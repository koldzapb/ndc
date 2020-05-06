<?php

namespace App\EntityListener;

use App\Entity\Software;

class SoftwareListener
{
    public $softwareImagesWebPath;

    public function __construct($softwareImagesWebPath)
    {
        $this->softwareImagesWebPath=$softwareImagesWebPath;
    }

    public function postLoad(Software $software)
    {
        if ($software->getImgsrc() !== null &&!empty($software->getImgsrc())){
            $software->setSoftwarelogo($this->softwareImagesWebPath ."/". $software->getId() . "/" . $software->getImgsrc());
        }
        else $software->setSoftwarelogo($software->getImageLink());

        $software->setImage25($this->softwareImagesWebPath ."/". $software->getId() . "/s25.png");

    }


}