<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 27.3.19.
 * Time: 12.35
 */

namespace App\EntityListener;



use App\Entity\Bonus;

class BonusListener
{
    public function prePersist(Bonus $bonus)
    {
        if(!$bonus->getTimeAdded()) $bonus->setTimeAdded(new \DateTime('now'));
        if(!$bonus->getTimeupdated())$bonus->setTimeupdated(new \DateTime('now'));
    }


}