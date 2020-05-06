<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 14.10
 */

namespace App\BonusRendering;


use App\Entity\Country;

class CountryBonuses extends BonusRendering implements BonusRenderingInterface
{
    const PAGE='country';

    public function supports($page)
    {
        return $page===self::PAGE;
    }
    public function bonuses()
    {
        $name=$this->requestStack->getCurrentRequest()->get('countryname');

        $country=$this->entityManager->getRepository(Country::class)->findOneBy(['name'=>$name]);
        $bonuses= $this->bonusRepository->getAllBonusesForCountry($country,$this->first,$this->max,$this->order,$this->userCountry);
        return $this->bonusemplateRender->render($bonuses,$country);
    }
}