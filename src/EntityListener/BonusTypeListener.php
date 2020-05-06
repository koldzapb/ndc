<?php

namespace App\EntityListener;
use App\Entity\Article;
use App\Entity\BonusType;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 7.3.18.
 * Time: 14.51
 */
class BonusTypeListener
{
    private $uploadPath;
    private $webPath;

    public function __construct(string $bonusTypeUploadPath,string $bonusTypeWebPath)
    {
        $this->uploadPath = $bonusTypeUploadPath;
        $this->webPath = $bonusTypeWebPath;
        $fs = new Filesystem();
        if (!$fs->exists($bonusTypeUploadPath)) {
            $fs->mkdir($bonusTypeUploadPath);
        }
    }

    public function preFlush(BonusType $bonusType, PreFlushEventArgs $event)
    {

        $file=$bonusType->getImagefile();

        if(isset($file)) {
            $bonusType->setImgsrc($this->upload($file));

        }
    }


    public function postLoad(BonusType $bonusType)
    {
        $bonusType->setImagelocation($this->webPath.$bonusType->getImgsrc());
    }

    public function upload(?UploadedFile $file)
    {
        if (!($file instanceof UploadedFile)) {
            return null;
        }
        $name = sprintf("%s.%s", Uuid::uuid4()->toString(), $file->guessExtension());
        $file->move($this->uploadPath, $name);

        return $name;
    }
}