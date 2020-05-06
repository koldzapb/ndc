<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleCategoryRepository")
 */
class ArticleCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",name="name")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $introText;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article",mappedBy="category")
     */
    private $articles;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\News", mappedBy="category")
     */
    private $news;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string",length=255,name="imgsrc",nullable=true)
     */
    private $imgsrc;

    private $file;

    private $imglocation;

    /**
     * ArticleCategory constructor.
     */


    public function __construct()
    {
        $this->articles=new ArrayCollection();
        $this->news=new ArrayCollection();

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @return mixed
     */
    public function getNews()
    {
        return $this->news;
    }


    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getImgsrc()
    {
        return $this->imgsrc;
    }

    /**
     * @param mixed $imgsrc
     */
    public function setImgsrc($imgsrc): void
    {
        $this->imgsrc = $imgsrc;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getImglocation()
    {
        return $this->imglocation;
    }

    /**
     * @param mixed $imglocation
     */
    public function setImglocation($imglocation): void
    {
        $this->imglocation = $imglocation;
    }

    /**
     * @return string
     */
    public function getIntroText(): ?string
    {
        return $this->introText;
    }

    /**
     * @param string $introText
     * @return ArticleCategory
     */
    public function setIntroText(?string $introText): self
    {
        $this->introText = $introText;
        return $this;
    }

}
