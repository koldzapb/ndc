<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 7.3.19.
 * Time: 15.06
 */

namespace App\Feed\Importer;


use App\Entity\Casino;
use App\Entity\Country;
use App\Feed\Downloader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CasinosJurisdictionsImporter implements Importer
{
    const FEED = 'casino_jurisdictions';
    private $downloader;
    private $entityManager;

    public function __construct(Downloader $downloader,EntityManagerInterface $entityManager)
    {
        $this->downloader=$downloader;
        $this->entityManager=$entityManager;
    }

    public function supports(string $name): string
    {
        return self::FEED===$name;
    }

    public function import(SymfonyStyle $io)
    {
        $data = $this->downloader->fetch(self::FEED);
        foreach ($data as $casinoCountryPair){
            $casino=$this->entityManager->getRepository(Casino::class)->find($casinoCountryPair['casino_id']);
            $country=$this->entityManager->getRepository(Country::class)->find($casinoCountryPair['region_id']);
            if($casino instanceof Casino && $country instanceof Country){
                $casino->addCountryWithJurisdiction($country);
                $country->addCasinoHaveJurisdiction($casino);

            }
        }
        $this->entityManager->flush();
    }


}