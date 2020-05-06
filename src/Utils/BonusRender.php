<?php

namespace App\Utils;


use App\Entity\Bonus;
use App\Entity\Country;
use App\Entity\Software;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Templating\EngineInterface;

class BonusRender
{

    private $entityManager;
    private $twigEngine;
    private $countryIconsWebPath;


    public function __construct(EntityManagerInterface $entityManager,EngineInterface $twigEngine,$countryIconsWebPath)
    {
        $this->entityManager=$entityManager;
        $this->twigEngine=$twigEngine;
        $this->countryIconsWebPath=$countryIconsWebPath;
    }

    public function render($bonusesc,Country $country)
    {
        $bonuses=[];
        foreach ($bonusesc as $bonus)
        {
            if($bonus instanceof Bonus)
            {
                $bonuses[]=[$bonus,$this->entityManager->getRepository(Software::class)->getSoftwaresForCasino($bonus->getCasino(),$country,0,3),$this->entityManager->getRepository(Software::class)->getSoftwaresForCasino($bonus->getCasino(),$country,3,500)];
            }
        }
        return $this->twigEngine->render('Bonus/bonuses.html.twig',['bonuses'=>$bonuses,'country'=>$country,'countryiconswebpath'=>$this->countryIconsWebPath]);
    }

}