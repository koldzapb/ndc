<?php


namespace App\EntityListener;



use App\Entity\SoftwaresList;

class SoftwaresListListener
{

    public function preFlush(SoftwaresList $softwaresList)
    {

        $softwaresList->setSlug(strtolower(str_replace([' ','\''],'-',$softwaresList->getSoftwarename())));

    }



}