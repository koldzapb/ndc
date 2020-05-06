<?php

namespace App\Hydrator;

use App\Entity\Casino;
use Doctrine\ORM\Internal\Hydration\ObjectHydrator;

class CasinoHydrator extends ObjectHydrator
{
    protected function hydrateAllData()
    {
        $result = parent::hydrateAllData();
        foreach ($result as $k => &$row) {
            if (isset($row[0]) and $row[0] instanceof Casino) {
                if (isset($row['available'])) {
                    $row[0]->setAvailableInCountry((bool)$row['available']);
                }


            }
            $result[$k] = $row[0];
        }
        return $result;
    }
}