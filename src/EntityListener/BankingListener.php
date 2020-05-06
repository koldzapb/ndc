<?php

namespace App\EntityListener;




use App\Entity\Banking;

class BankingListener
{

    private $bankingIconsWebPath;


    public function __construct($bankingIconsWebPath)
    {
        $this->bankingIconsWebPath=$bankingIconsWebPath;

    }


    public function postLoad(Banking $banking)
    {
        $banking->setImageLocation($this->bankingIconsWebPath.$banking->getImgsrc());
    }


}