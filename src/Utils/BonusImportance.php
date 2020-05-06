<?php

namespace App\Utils;


use App\Entity\Bonus;
use App\Entity\BonusType;
use App\Entity\Casino;

class BonusImportance
{

    public function getApropriattebonus(Casino $casino)
    {

        /**
         * @var $bonus Bonus
         */
        foreach($casino->getBonuses() as $bonus)
        {

            if($bonus->getBonustype() instanceof BonusType && $bonus->getBonustype()->getName()==='No Deposit')
            {

                return $bonus;
                break;
            }

        }

        foreach($casino->getBonuses() as $bonus)
        {

            if($bonus->getExclusive())
            {
                return $bonus;
            }
        }


        return $casino->getBonuses()[0];

    }


}