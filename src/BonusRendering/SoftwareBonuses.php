<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 14.41
 */

namespace App\BonusRendering;


use App\Entity\Software;

class SoftwareBonuses extends BonusRendering implements BonusRenderingInterface
{
    const PAGE='software';

    public function supports($page)
    {
        return $page===self::PAGE;
    }

    public function bonuses()
    {
        $softwarename=$this->requestStack->getCurrentRequest()->get('software');
        $software=$this->entityManager->getRepository(Software::class)->findOneBy(['title'=>$softwarename]);
        $bonuses= $this->bonusRepository->getAllBonusesForSoftware($this->userCountry,$software,$this->first,$this->max,$this->order);
        return $this->bonusemplateRender->render($bonuses,$this->userCountry);
    }
}