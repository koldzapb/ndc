<?php
namespace App\Utils;


use App\Entity\Bonus;

class NewBonusesSorter
{

    function sortNewBonuses($newBonuses,$sorttype)
    {
        switch($sorttype)
        {
            case "highRating":
                $casino=false;
                $sorttype=true;
                break;
            case "lowRating":
                $casino=false;
                $sorttype=false;
                break;
            case "A-Z":
                $casino=true;
                $sorttype=false;
                break;
            case "Z-A":
                $casino=true;
                $sorttype=true;
                break;
            case "highAmount":
                $bonusValue=true;
                $sorttype=true;
        }





        $newBonusesArray=[];
        /**
         * @var $bonus Bonus
         */
        foreach($newBonuses as $bonus)
        {
            if(isset($casino)&&$casino===true) $sortCriteria=$bonus->getCasino()->getCasinoname();
            elseif (isset($casino)&&$casino===false) $sortCriteria=$bonus->getCasino()->getAveragerating();
            elseif (isset($bonusValue)&&$bonusValue===true) $sortCriteria=$bonus->getMaxbonus();

            $newBonusesArray[]=[$bonus,$sortCriteria];

        }

        foreach ($newBonusesArray as $k=>$v)
        {
            $sort[$k]=$v[1];
        }

        if(count($newBonusesArray))
        {
            array_multisort( $sort, ($sorttype)?SORT_DESC:SORT_ASC, $newBonusesArray);
        }
        $returnArray=[];

        foreach ($newBonusesArray as $b)
        {
            $returnArray[]=$b[0];
        }

        return $returnArray;
    }

}