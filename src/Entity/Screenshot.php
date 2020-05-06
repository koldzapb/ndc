<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScreenshotRepository")
 */
class Screenshot
{
    /**
     * @ORM\Id

     * @ORM\Column(type="integer")
     */
    private $id;





    /**
     * @ORM\Column(type="text", name="filename")
     */
    private $filename;


    /**
     * @ORM\Column(type="text",length=255,name="url",nullable=true)
     */
    private $url;


    /**
     *@ORM\Column(type="string",name="slideimgsrc",nullable=true)
     */
    private $slideimgsrc;


    /**
     *@ORM\Column(type="string",name="thumbimgsrc",nullable=true)
     */
    private $thumbimgsrc;


    private $thumbImageSource;

    private $sliderImageSource;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getCasino()
    {
        return $this->casino;
    }

    /**
     * @param mixed $casino
     */
    public function setCasino($casino): void
    {
        $this->casino = $casino;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Casino", inversedBy="screenshots")
     * @ORM\JoinColumn(name="casino_id",referencedColumnName="id",onDelete="CASCADE")
     */
    private $casino;

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getThumbimgsrc()
    {
        return $this->thumbimgsrc;
    }

    /**
     * @param mixed $slideimgsrc
     */
    public function setSlideimgsrc($slideimgsrc): void
    {
        $this->slideimgsrc = $slideimgsrc;
    }

    /**
     * @return mixed
     */
    public function getSlideimgsrc()
    {
        return $this->slideimgsrc;
    }

    /**
     * @param mixed $thumbimgsrc
     */
    public function setThumbimgsrc($thumbimgsrc): void
    {
        $this->thumbimgsrc = $thumbimgsrc;
    }

    /**
     * @return mixed
     */
    public function getSliderImageSource()
    {
        return $this->sliderImageSource;
    }

    /**
     * @return mixed
     */
    public function getThumbImageSource()
    {
        return $this->thumbImageSource;
    }

    /**
     * @param mixed $sliderImageSource
     */
    public function setSliderImageSource($sliderImageSource): void
    {
        $this->sliderImageSource = $sliderImageSource;
    }

    /**
     * @param mixed $thumbImageSource
     */
    public function setThumbImageSource($thumbImageSource): void
    {
        $this->thumbImageSource = $thumbImageSource;
    }




}


