<?php


namespace App\Hydrator;

use App\Entity\Bonus;
use App\Entity\Casino;
use Doctrine\ORM\Internal\Hydration\ObjectHydrator;

class BonusHydrator extends ObjectHydrator
{
    protected function hydrateAllData()
    {
        $result= parent::hydrateAllData();
        foreach ($result as $k=>&$row){
            $bonus=$row[0]->getLikedBonus();
            if($bonus instanceof Bonus){
                if(isset($row['count'])){
                    $bonus->setLikesCount($row['count']);
                }
                $result[$k]=[$bonus];
            }
        }
        return $result;
    }

}