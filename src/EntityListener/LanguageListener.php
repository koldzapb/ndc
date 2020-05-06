<?php


namespace App\EntityListener;



use App\Entity\Language;

class LanguageListener
{
    private $languageIconsWebPath;


    public function __construct($languageIconsWebPath)
    {
        $this->languageIconsWebPath=$languageIconsWebPath;
    }

    public function postLoad(Language $language)
    {
        $language->setImageLocation($this->languageIconsWebPath.$language->getImg());
    }
}