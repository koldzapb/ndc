<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 14.55
 */

namespace App\BonusRendering;


class GameBonuses extends BonusRendering implements BonusRenderingInterface
{
    const PAGE="game";

    public function supports($page)
    {
        return $page===self::PAGE;
    }

    public function bonuses()
    {
        $gametype=$this->requestStack->getCurrentRequest()->get('gametype');
        $bonuses=$this->bonusRepository->getAllBonusesByGameType($this->userCountry,$gametype,$this->first,$this->max,$this->order);
        return $this->bonusemplateRender->render($bonuses,$this->userCountry);
    }
}