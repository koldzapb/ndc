<?php


namespace App\Feed\Importer;


use App\Entity\Bonus;
use App\Entity\BonusType;
use App\Entity\Casino;
use App\Events\NewNoDepositBonusEvent;
use App\Feed\Downloader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class BonusesImporter extends FeedsParent implements Importer
{
    const FEED = 'site_bonuses';

    CONST BONUS_GAME_TYPE_CLASSIC_BLACKJACK = 1;
    CONST BONUS_GAME_TYPE_OTHER_BLACKJACK = 2;
    CONST BONUS_GAME_TYPE_VIDEO_POKER = 3;
    CONST BONUS_GAME_TYPE_CRAPS = 4;
    CONST BONUS_GAME_TYPE_BACCARAT = 5;
    CONST BONUS_GAME_TYPE_POKER_GAMES = 6;
    CONST BONUS_GAME_TYPE_CASINO_WAR = 7;
    CONST BONUS_GAME_TYPE_SICBO = 8;
    CONST BONUS_GAME_TYPE_AMERICAN_ROULETTE = 9;
    CONST BONUS_GAME_TYPE_OTHER_ROULETTE = 10;
    CONST BONUS_GAME_TYPE_SLOTS = 11;
    CONST BONUS_GAME_TYPE_PARLOR_GAMES = 12;

    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    private $bonusTypeRepository;
    private $casinoRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em,AdapterInterface $cache)
    {
        parent::__construct($cache);
        $this->downloader = $downloader;
        $this->em = $em;
        $this->bonusTypeRepository = $em->getRepository(BonusType::class);
        $this->casinoRepository = $em->getRepository(Casino::class);
    }

    function supports(string $name): string
    {
        return $name === self::FEED;
    }

    function import(SymfonyStyle $io)
    {
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note(sprintf('Fetching feed "%s"...', self::FEED));
        }
        $data = $this->downloader->fetch(self::FEED);
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->success(sprintf('Feed "%s" fetched!', self::FEED));
        }
        $existingBonusesArray=[];
        foreach ($data as $bonusData) {
            $newBonus=false;
            $existingBonusesArray[]=$bonusData['id'];
            $bonus=$this->em->getRepository(Bonus::class)->findOneBy(['lcbId'=>$bonusData['id']]);
            if(!$bonus instanceof Bonus){
                $bonus= new Bonus();
                $newBonus=true;
            }
            /** @var Bonus $bonus */
            $bonus = $this->em->merge($bonus);
            $bonus->setLcbId($bonusData['id']);
            $casino = $this->casinoRepository->findOneBy(['newid' => $bonusData['casino_id']])
                ?: $this->casinoRepository->find($bonusData['casino_id']);
            $bonus->setCasino($casino);
            $currency = end($bonusData['currencies']);
            $bonus->setSymbol($currency['symbol'] ?? null);
            $bonus->setExtraIntable($bonusData['reviews'][0]['text'] ?? '');
            $bonus->setTimeAdded(new \DateTime($bonusData['time_added']));
            $bonus->setTimeUpdated(new \DateTime($bonusData['time_updated']));
            $bonus->setBonusUrl($bonusData['bonus_url'] ?? '');
            $bonus->setCashable((bool) $bonusData['cashable']);
            $bonus->setBonuspercent($bonusData['bonus_percent'] ?? null);
            $bonus->setCode($bonusData['code'] ?? '');
            $bonus->setBonusGiven((bool) $bonusData['bonus_given'] ?? false);
            $bonus->setForumThread($bonusData['forum_thread'] ?? '');
            $bonus->setTcurl($bonusData['tc_url'] ?? '');
            $bonus->setFreespins($bonusData['free_spins']);
            $bonus->setShowOnlyFirstValue($bonusData['show_only_first_value'] ?: false);

            $maxbonus = (float) ($bonusData['maxbonus'] ?? 0);
            foreach ($bonusData['bonus_types'] as $bonusTypeData) {
                if ($bonusTypeData['name'] === "Exclusive") {
                    $bonus->setExclusive(true);
                } else {
                    $bonusType = $this->bonusTypeRepository->find($bonusTypeData['id']) ?: new BonusType((int) $bonusTypeData['id']);
                    $bonusType->setName($bonusTypeData['name']);
                    $bonusType->setPriority($bonusTypeData['priority']);
                    /** @var BonusType $bonusType */
                    $bonusType = $this->em->merge($bonusType);
                    $bonus->setBonustype($bonusType);
                    if ($bonusType->getId() == 6) {
                        $maxbonus = (float) ($bonusData['free_spins'] ?? 0);
                    }
                }
            }
            $bonus->setMaxbonus($maxbonus);

            $minValue = PHP_INT_MAX;
            $bestTypeValue = PHP_INT_MAX;
            $wr = '';
            foreach ($bonusData['bonus_game_types'] as $bonusGameType) {
                $value = (int) ($bonusGameType['value'] ?? 0);
                $bonusValue = (bool) ($bonusGameType['xbonus'] ?? false);
                $depositValue = (bool) ($bonusGameType['xdeposit'] ?? false);
                if ($value > 0 && $value < $minValue && ($bonusValue || $depositValue)) {
                    $minValue = $value;
                    if ($bonusValue && $depositValue) {
                        $wr = $value . 'xb&d';
                    } elseif ($bonusValue) {
                        $wr = $value . 'xb';
                    } elseif ($depositValue) {
                        $wr = $value . 'xd';
                    }
                }
                $number = $this->getBonusAmount($value, $bonusValue, $depositValue, $bonus);
                if($number > 0 && $number < $bestTypeValue) {
                    $bestTypeValue = $number;
                }
                switch ((int) $bonusGameType['game_category_id']) {
                    case self::BONUS_GAME_TYPE_CLASSIC_BLACKJACK:
                        $bonus->setClassicblackjack($value);
                        $bonus->setClassicblackjackB($bonusValue);
                        $bonus->setClassicblackjackD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_OTHER_BLACKJACK:
                        $bonus->setOtherblackjack($value);
                        $bonus->setOtherblackjackB($bonusValue);
                        $bonus->setOtherblackjackD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_VIDEO_POKER:
                        $bonus->setVideopoker($value);
                        $bonus->setVideopokerB($bonusValue);
                        $bonus->setVideopokerD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_CRAPS:
                        $bonus->setCraps($value);
                        $bonus->setCrapsB($bonusValue);
                        $bonus->setCrapsD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_BACCARAT:
                        $bonus->setBaccarat($value);
                        $bonus->setBaccaratB($bonusValue);
                        $bonus->setBaccaratD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_POKER_GAMES:
                        $bonus->setPokergames($value);
                        $bonus->setPokergamesB($bonusValue);
                        $bonus->setPokergamesD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_CASINO_WAR:
                        $bonus->setCasinowar($value);
                        $bonus->setCasinowarB($bonusValue);
                        $bonus->setCasinowarD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_SICBO:
                        $bonus->setSicbo($value);
                        $bonus->setSicboB($bonusValue);
                        $bonus->setSicboD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_AMERICAN_ROULETTE:
                        $bonus->setAmericanroulette($value);
                        $bonus->setAmericanrouletteB($bonusValue);
                        $bonus->setAmericanrouletteD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_OTHER_ROULETTE:
                        $bonus->setOtherroulette($value);
                        $bonus->setOtherrouletteB($bonusValue);
                        $bonus->setOtherrouletteD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_SLOTS:
                        $bonus->setSlots($value);
                        $bonus->setSlotsB($bonusValue);
                        $bonus->setSlotsD($depositValue);
                        break;
                    case self::BONUS_GAME_TYPE_PARLOR_GAMES:
                        $bonus->setParlorgames($value);
                        $bonus->setParlorgamesB($bonusValue);
                        $bonus->setParlorgamesD($depositValue);
                        break;
                    default:
                        break;
                }
            }
            $bonus->setWr($wr);
            if ($bestTypeValue === PHP_INT_MAX) {
                $bestTypeValue = 0;
            }

            $bonus->setBonusranking(90000000-($maxbonus*10000)-$bestTypeValue);
            if($newBonus){
                $this->em->persist($bonus);
                if($bonus->getBonustype() instanceof BonusType && $bonus->getBonustype()->getName()=="No Deposit"){
                    $bonus->setSendNdMailsForThisBonus(true);
                }
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $nonExistingBonuses=$this->em->getRepository(Bonus::class)->selectNonExistingBonuses($existingBonusesArray);
        /**@var $nonExistingBonus \App\Entity\Bonus **/
        foreach ($nonExistingBonuses as $nonExistingBonus) {
            $nonExistingBonus = $this->em->merge($nonExistingBonus);
            $this->em->remove($nonExistingBonus);
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Bonuses imported!');
        }
        $this->cache->invalidateTags(['bonus']);
        sleep(10);
    }

    public function getBonusAmount($value, $bonusValue, $depositValue, Bonus $bonus)
    {
        $poundValue = 2;
        $euroValue = 1.2;
        $dollarValue = 1;
        $currencyValue = $dollarValue;
        if (strpos($bonus->getSymbol(), '&#163;') !== false
            || strpos($bonus->getSymbol(), '?') !== false
            || strpos($bonus->getSymbol(), 'pound') !== false) {
            $currencyValue = $poundValue;
        } elseif (strpos($bonus->getSymbol(), '&#128;') !== false
            || strpos($bonus->getSymbol(), '?') !== false
            || strpos($bonus->getSymbol(), 'euro') !== false) {
            $currencyValue = $euroValue;
        }
        $max_bonus_divide_by_amount = 50;
        $bonus_percent_divide_by_amount = 25;
        $bonus_after_add_amount = 3;

        $depositFor = 0;
        if ($bonus->getBonuspercent() > 0) {
            $depositFor = round((intval($bonus->getMaxbonus()) / floatval($bonus->getBonuspercent())) * 100, 0);
        }
        $number = 0;
        if ($bonus->getMaxbonus() > 0) {
            if ($bonusValue && $depositValue) {
                $number = ($value * $bonus->getMaxbonus() + $value * $depositFor) / $bonus->getMaxbonus();
            } else if ($bonusValue) {
                $number = $value;
            } else {
                $number = $value * $depositFor / $bonus->getMaxbonus();
            }
        } elseif (!$bonusValue && !$depositValue) {
            $number = $value * $depositFor;
        }

        if (!$bonus->getCashable()) {
            $number = $number * 2.5;
        }
        $number -= intval($bonus->getMaxbonus() * $currencyValue) / $max_bonus_divide_by_amount;;
        $number -= $bonus->getBonuspercent() / $bonus_percent_divide_by_amount;
        if (!$bonus->getBonusGiven()) {
            $number = $number + $bonus_after_add_amount;
        }
        return round($number * 1000, 0);
    }

}