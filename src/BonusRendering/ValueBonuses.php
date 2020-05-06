<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 15.02
 */

namespace App\BonusRendering;


use App\Entity\BonusType;

class ValueBonuses extends BonusRendering implements BonusRenderingInterface
{
    const PAGE='value';

    public function supports($page)
    {
        return $page===self::PAGE;
    }

    public function bonuses()
    {
        $value=number_format(intval($this->requestStack->getCurrentRequest()->get("value")), 4, '.', '');
        $maxValue=number_format(intval($this->requestStack->getCurrentRequest()->get("maxValue")), 4, '.', '');
        $currencySymbol=$this->requestStack->getCurrentRequest()->get("symbol");
        $bonusType=$this->requestStack->getCurrentRequest()->get("bonustype");
        $bonusType=$this->entityManager->getRepository(BonusType::class)->findOneBy(['name'=>$bonusType]);
        $bonuses= $this->bonusRepository->getBonusesByValue($bonusType,$value,$maxValue,$currencySymbol,$this->userCountry,0,50,$this->order);
        return $this->bonusemplateRender->render($bonuses,$this->userCountry);

    }

}