<?php

namespace App\EntityListener;




use App\Entity\Currency;

class CurrencyListener
{

    private $currencyIconsWebPath;

    public function __construct($currencyIconsWebPath)
    {
        $this->currencyIconsWebPath=$currencyIconsWebPath;
    }

    public function postLoad(Currency $currency)
    {
        $currency->setImageLocation($this->currencyIconsWebPath.$currency->getImgsrc());
    }

}