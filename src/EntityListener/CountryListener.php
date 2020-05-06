<?php

namespace App\EntityListener;


use App\Entity\Country;
use Doctrine\ORM\EntityManagerInterface;

class CountryListener
{
    private $countryIconsWebPath;
    private $entityManager;

    public function __construct($countryIconsWebPath,EntityManagerInterface $entityManager)
    {
        $this->countryIconsWebPath=$countryIconsWebPath;
        $this->entityManager=$entityManager;
    }

    public function postLoad(Country $country){
        if($country->getCountryId()>0){
            $parentCountry=$this->entityManager->getRepository(Country::class)->find($country->getCountryId());
        }
        $country->setImgSrc(sprintf("%s%s.png",$this->countryIconsWebPath,strtolower(isset($parentCountry)?$parentCountry->getCountryCode():$country->getCountryCode())));
    }
}