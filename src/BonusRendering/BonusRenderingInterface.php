<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 14.12
 */

namespace App\BonusRendering;


interface BonusRenderingInterface
{
    public function supports($page);
    public function bonuses();
}