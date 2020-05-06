<?php

namespace App\EntityListener;



use App\Entity\Casino;
use App\Mailer\Mailer;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class CasinoListener
{

    private $casinoLogoImages;
    private $mailer;
    private $melanysMail;
    private $joshsMail;


    public function __construct(Mailer $mailer,$casinoLogoImages,$melanysMail,$joshsMail)
    {
        $this->casinoLogoImages=$casinoLogoImages;
        $this->mailer=$mailer;
        $this->melanysMail=$melanysMail;
        $this->joshsMail=$joshsMail;

    }


    public function postLoad(Casino $casino)
    {
        $casino->setCasinologo($this->casinoLogoImages.$casino->getId()."/".$casino->getCasinologoimage());
        $casino->setCasinoUrl((strlen($casino->getCustomurl())>0)?$casino->getCustomurl():$casino->getCasinoUrl());
        $casino->setLogo35($this->casinoLogoImages.$casino->getId()."/35.png");
        $casino->setLogo50($this->casinoLogoImages.$casino->getId()."/50.png");
        $casino->setLogo90($this->casinoLogoImages.$casino->getId()."/90.png");
        $casino->setLogo105($this->casinoLogoImages.$casino->getId()."/105.png");


    }


    public function preUpdate(Casino $casino,PreUpdateEventArgs $eventArgs)
    {
        if($eventArgs->hasChangedField('customurl') && $casino->getCustomurl()!=null ) {

            $this->mailer->sendAffiliateLinkChange("Melany",$this->melanysMail,$casino->getCasinoname(),$casino->getCustomurl());
            $this->mailer->sendAffiliateLinkChange("Josh",$this->joshsMail,$casino->getCasinoname(),$casino->getCustomurl());

        }
    }




}