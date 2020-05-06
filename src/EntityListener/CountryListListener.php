<?php

namespace App\EntityListener;
use App\Entity\CountryList;

class CountryListListener
{
    public function preFlush(CountryList $countryList)
    {
        $countryList->setSlug(strtolower(str_replace(' ','-',$countryList->getCountryname())));
    }
}