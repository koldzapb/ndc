<?php


namespace App\Feed\Importer;


use App\Entity\Casino;
use App\Entity\NoDepositBonusCodes;
use App\Feed\Downloader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class NoDepositCodesImporter implements Importer
{
    const CODE='nd_codes';
    private $downloader;
    private $entityManager;

    public function __construct(Downloader $downloader,EntityManagerInterface $entityManager)
    {
        $this->downloader=$downloader;
        $this->entityManager=$entityManager;
    }

    function supports(string $name): string
    {
        return self::CODE===$name;
    }

    function import(SymfonyStyle $io)
    {
        $data=$this->downloader->fetch(self::CODE);
        $existingCodes=[];
        foreach($data as $code) {
            $casino=$this->entityManager->getRepository(Casino::class)->findOneBy(['newid'=>$code['casino_id']]);
            if(!$casino instanceof Casino ) continue;
            $dateAdded=new \DateTime($code['date_added']);
            $dateUpdated=new \DateTime($code['date_updated']);
            $existingCodes[]=$code['id'];
            $noDepositCode=$this->entityManager->getRepository(NoDepositBonusCodes::class)->findOneBy(['lcb_id'=>$code['id']]);
            $noDepositCode=$noDepositCode instanceof NoDepositBonusCodes?$noDepositCode:new NoDepositBonusCodes();
            $noDepositCode->setCasino($casino);
            $noDepositCode->setHidden($code['hidden']=="true"?true:false);
            $noDepositCode->setExclusive($code['exclusive']=="true"?true:false);
            $noDepositCode->setCode($code['code']);
            $noDepositCode->setStatus($code['status']);
            $noDepositCode->setLcbId($code['id']);
            $noDepositCode->setTimeadded($dateAdded);
            $noDepositCode->setTimeUpdated($dateUpdated);
            $this->entityManager->persist($noDepositCode);
        }
        $this->entityManager->flush();
        $nonExistingCodes=$this->entityManager->getRepository(NoDepositBonusCodes::class)->selectNonExistingCodes($existingCodes);
        foreach ($nonExistingCodes as $code){
            $code=$this->entityManager->merge($code);
            $this->entityManager->remove($code);
        }
        $this->entityManager->flush();
    }

}