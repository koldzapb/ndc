<?php

namespace App\Utils;

use App\Entity\Bonus;
use App\Entity\BonusType;
use App\Entity\Casino;
use App\Entity\CasinoBanking;
use App\Entity\Country;
use App\Entity\Currency;
use App\Entity\Language;
use App\Entity\Software;
use App\Repository\BonusRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class MetaGenerator
{
    /**
     * @var BonusRepository
     */
    private $bonusRepository;
    /**
     * @var Country
     */
    private $country;

    public function __construct(BonusRepository $bonusRepository, Locator $locator, RequestStack $requestStack)
    {
        $this->bonusRepository = $bonusRepository;
        $this->country = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
    }

    public function generateForCasino(Casino $casino,$bonus)
    {
        $meta = [
            'title' => trim($casino->getTitle()) ?: null,
            'description' => trim($casino->getMetaDescription()) ?: null,
            'keywords' => ($casino->getMetakeywords()) ?: null,
        ];
//        $bonus = $casino->getMetaDescriptionBonus();

        if ($meta['title'] === null) {
            if ($bonus instanceof Bonus) {
                $meta['title'] = sprintf(
                    '%s has %s %s%s %s Bonus',
                    $casino->getCasinoname(),
                    $bonus->getExclusive() ? 'an EXCLUSIVE' : 'a',
                    $bonus->getSymbol(),
                    $bonus->getFreespins() > 0 ? $bonus->getFreespins() . ' free spins' : $bonus->getMaxbonusshow(),
                    $bonus->getBonustype() instanceof BonusType?$bonus->getBonustype()->getName():""
                );
            } else {
                $meta['title'] = $casino->getCasinoname() . ' | No Deposit Casino Review';
            }
        }
        if ($meta['description'] === null) {
            if($bonus instanceof Bonus)
            {
                $meta['description'] = sprintf(
                    '%s is offering %s %s%s %s Bonus for new players%s!',
                    $casino->getCasinoname(),
                    $bonus->getExclusive() ? 'an EXCLUSIVE' : 'a',
                    $bonus->getSymbol(),
                    $bonus->getFreespins() > 0 ? $bonus->getFreespins() . ' free spins' : $bonus->getMaxbonusshow(),
                    $bonus->getBonustype()->getName(),
                    $bonus->getCode() ? ', visit us for the bonus code' : ''
                );
            } else {
                $software = $casino->getSoftwares()->map(function (Software $software) {
                    return $software->getTitle();
                })->getValues();
                $softwareCount = count($software);
                $meta['description'] = sprintf(
                    'A review of %s the online casino%s%s that offers %d banking options in %d currencies and playable in %d languages.',
                    $casino->getCasinoname(),
                    $softwareCount > 0 ? ' powered by ' : '',
                    $softwareCount > 1 ? ($softwareCount . ' software companies') : current($software),
                    $casino->getBankingOptions()->count(),
                    $casino->getCurrencies()->count(),
                    $casino->getLanguages()->count()
                );
            }
        }
        if ($meta['keywords'] === null) {
            $meta['keywords'] = implode(
                ', ',
                array_merge(
                    [
                        $casino->getCasinoname(),
                        'no deposit casino',
                        'online casino',
                        'no deposit bonus',
                        'review',
                    ],
                    $casino->getLanguages()->map(function (Language $language) {
                            return $language->getName();
                        })->slice(0, 3),
                    $casino->getCurrencies()->map(function (Currency $currency) {
                            return $currency->getName();
                        })->slice(0, 3),
                    $casino->getBankingOptions()->filter(function (CasinoBanking $banking) {
                            return $banking->getAllowsDeposits() && $banking->getAllowsWithdrawals();
                        })->map(function (CasinoBanking $banking) {
                            return $banking->getBanking() ? $banking->getBanking()->getName() : '';
                        })->slice(0, 3),
                    [
                        'screen shots',
                        'player comments',
                    ]
                )
            );
        }

        return $meta;
    }
}