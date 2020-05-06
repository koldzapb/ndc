<?php


namespace App\Utils;

use App\Entity\Country;
use App\Repository\CountryRepository;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;
use MaxMind\Db\Reader\InvalidDatabaseException;

class Locator
{
    private $reader;
    private $countryRepository;
    private $unitedStates;
    private $childCountryCode;

    public function __construct($geoipDbPath, CountryRepository $countryRepository)
    {
        $this->reader = new Reader($geoipDbPath);
        $this->countryRepository = $countryRepository;
    }

    public function getCountryCode($ip)
    {
        try {
            $countryCode= $this->reader->city($ip)->country->isoCode;
            if($countryCode=="US"){
                $this->unitedStates=true;
                $this->childCountryCode= $this->reader->city($ip)->mostSpecificSubdivision->isoCode;
            }
            return $countryCode;
        } catch (AddressNotFoundException | InvalidDatabaseException $e) {
            return 'RS';
        }
    }

    public function getCountry($ip):?Country
    {
        $countryCode=$this->getCountryCode($ip);
        /**
         * @var $country Country
         */
        $country= $this->countryRepository->findOneBy(['countrycode' => $countryCode, 'countryid' => null]);
        if($country->getJurisdictionCheck())$country->setChildCountry($country);
        if($this->unitedStates){
            $childCountry= $this->countryRepository->findOneBy(['countrycode' => $this->childCountryCode, 'countryid' => 435]);
            if($childCountry instanceof Country) $country->setChildCountry($childCountry);
        }
        return $country;

    }
}