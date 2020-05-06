<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 15.14
 */

namespace App\BonusRendering;


use App\Entity\Country;

class IndexBonuses extends BonusRendering implements BonusRenderingInterface
{
    const PAGE='index';
    public function supports($page)
    {
        return $page===self::PAGE;
    }
    public function bonuses()
    {
        $indextype = $this->requestStack->getCurrentRequest()->get('name');
        $indextype=str_replace("_"," ",$indextype);
        $this->first=(isset($this->first))?$this->first:0;
        $this->max=(isset($this->max))?$this->max:50;

        if ($indextype === 'No Deposit' || $indextype === 'Casino Spins') {
            $rawBonuses = $this->bonusRepository->getBonusesByType($indextype, $this->userCountry,$this->order,$this->first,$this->max);
            $totalNumber = $this->bonusRepository->countBonusesByType($indextype, $this->userCountry);
        } elseif ($indextype === 'New') {

            $totalNumber=10;

            if($this->bonusRepository->countNewBonuses($this->userCountry)>=$totalNumber)
            {
                $rawBonuses = $this->bonusRepository->getNewBonuses($this->userCountry,$this->order);
                $totalNumber = $this->bonusRepository->countBonusesByTypeNew($this->userCountry);
            }
            else
            {
                $result = $this->bonusRepository->getLatestBonusesForNewSection($this->userCountry,$totalNumber);
                $rawBonuses= $this->newBonusesSorter->sortNewBonuses($result,$this->order);
            }

        } elseif ($indextype == 'Exclusive') {
            $rawBonuses = $this->bonusRepository->getExclusiveBonuses($this->userCountry,$this->order,$this->first,$this->max);
            $totalNumber = $this->bonusRepository->getExclusiveBonusesCount($this->userCountry);

        }

        return [$this->bonusemplateRender->render($rawBonuses,$this->userCountry),$totalNumber];
    }

}
