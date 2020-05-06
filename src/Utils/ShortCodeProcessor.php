<?php

namespace App\Utils;


use App\Repository\BonusRepository;
use App\Repository\CasinoRepository;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;

class ShortCodeProcessor
{
    /**
     * @var BonusRepository
     */
    private $bonusRepository;
    private $casinoRepository;
    private $cache;

    public function __construct(BonusRepository $bonusRepository, CasinoRepository $casinoRepository, AdapterInterface $cache)
    {
        $this->cache=new TagAwareAdapter($cache);
        $this->bonusRepository = $bonusRepository;
        $this->casinoRepository= $casinoRepository;
    }

    public function process(?string $text, array $replacements = []): string
    {

        return strtr($text, $this->getSubstitutions($replacements));
    }

    public function __invoke(?string $text, array $replacements = []): string
    {

        return $this->process($text, $replacements);
    }

    private function getSubstitutions(array $replacements)
    {
        $now = new \DateTime();
        $map = [
            '[month]' => $now->format('F'),
            '[year]' => $now->format('Y'),
            '[total]' => $this->getTotalBonuses(),
            '[total_casinos]'=>$this->getTotalCasinos(),
            '[exclusive_nd_bonuses_number]'=>$this->getNumberOfExclusiveNoDepositBonuses(),
            '[no_deposit_bonuses_number]'=>$this->noDepositBonusesNumber(),
            '[exclusive_nd_bonuses_amount]'=>$this->exclusiveNoDepositAmount(),
            '[no_deposit_bonuses_total_amount]'=>$this->noDepositBonusesTotalAmount(),
            /*
             * At first idea was to return only current month amount,
             * after that we decided to return last 8 months total amount as last month value.
             * Don't be confused with shortcode name and assigned value.
             */
            '[no_deposit_bonuses_amount_this_month]'=>$this->noDepositBonusesLastEightMonthsAmount(),
            '[gift]'=>'🎁', //gift is not empty string - emoji may be invisible in phpstorm
        ];

        foreach ($replacements as $k => $v) {
            $map['['.$k.']'] = $v;
        }


        return $map;
    }

    private function getTotalBonuses()
    {
        $totalBonuses=$this->cache->getItem('total_bonuses');
        if(!$totalBonuses->isHit()){
            $totalBonuses->set($this->bonusRepository->count([]));
            $totalBonuses->tag('bonus');
            $this->cache->save($totalBonuses);
        }
        return $totalBonuses->get();
    }

    private function getTotalCasinos()
    {
        $totalCasinos=$this->cache->getItem('total_casinos');
        if(!$totalCasinos->isHit()){
            $totalCasinos->tag('casino');
            $totalCasinos->set(count($this->casinoRepository->getAllNonClosedCasinos()));
            $this->cache->save($totalCasinos);
        }

        return $totalCasinos->get();
    }

    private function getNumberOfExclusiveNoDepositBonuses()
    {
        $bonuses=$this->cache->getItem('number_of_exclusive_no_deposit_bonuses');
        if(!$bonuses->isHit()){
            $bonuses->tag('casino');
            $bonuses->set($this->bonusRepository->getNumberOfExclusiveNoDepositBonuses());
            $this->cache->save($bonuses);
        }

        return $bonuses->get();
    }

    private function noDepositBonusesNumber()
    {
        $bonuses=$this->cache->getItem('number_of_no_deposit_bonuses');
        if(!$bonuses->isHit()){
            $bonuses->tag('bonus');
            $bonuses->set($this->bonusRepository->getNumberOfNoDepositBonuses());
            $this->cache->save($bonuses);
        }

        return $bonuses->get();
    }


    private function exclusiveNoDepositAmount()
    {
        $bonuses=$this->cache->getItem('exclusive_no_deposit_amount');
        if(!$bonuses->isHit()){
            $bonuses->tag('bonus');
            $bonuses->set(array_sum(array_map(function($bonus){ return strstr($bonus->getMaxbonus(), '.', 1); },$this->bonusRepository->getAllExclusiveNoDepositBonuses())));
            $this->cache->save($bonuses);
        }

        return $bonuses->get();
    }


    private function noDepositBonusesTotalAmount()
    {
        $bonuses=$this->cache->getItem('no_deposit_bonuses_total_amount');
        if(!$bonuses->isHit()){
            $bonuses->tag('bonus');
            $bonuses->set(array_sum(array_map(function($bonus){ return strstr($bonus->getMaxbonus(), '.', 1); },$this->bonusRepository->getNoDepositBonusesTotalAmount())));
            $this->cache->save($bonuses);
        }

        return $bonuses->get();
    }

    private function noDepositBonusesLastEightMonthsAmount()
    {
        $bonuses=$this->cache->getItem('no_deposit_bonuses_amount_this_month');
        if(!$bonuses->isHit()){
            $bonuses->tag('bonus');
            $bonuses->set(array_sum(array_map(function($bonus){ return strstr($bonus->getMaxbonus(), '.', 1); },$this->bonusRepository->getNoDepositBonusesTotalAmount(date('Y-m-01', strtotime("-7 months"))))));
            $this->cache->save($bonuses);
        }

        return $bonuses->get();
    }

}
