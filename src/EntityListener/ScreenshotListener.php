<?php

namespace App\EntityListener;



use App\Entity\Screenshot;

class ScreenshotListener
{
    private $casinoLogoImages;

    public function __construct($casinoLogoImages)
    {
        $this->casinoLogoImages=$casinoLogoImages;
    }


    public function postLoad(Screenshot $screenshot)
    {
        $screenshot->setThumbImageSource($this->casinoLogoImages.$screenshot->getCasino()->getId()."/screenshots/".$screenshot->getThumbimgsrc());
        $screenshot->setSliderImageSource($this->casinoLogoImages.$screenshot->getCasino()->getId()."/screenshots/".$screenshot->getSlideimgsrc());

    }
}