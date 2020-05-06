<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class Author
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string",name="authorname", length=32)
     */
    private $authorname;


    /**
     * @ORM\Column(type="string",name="authorurl", length=128, nullable=true)
     */
    private $authorurl;



    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime",name="createdat")
     */
    private $createdat;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Casino",mappedBy="reviewtextauthor")
     */
    private $casinoreviews;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\News",mappedBy="author")
     */
    private $news;

    /**
     * @ORM\Column(type="string",length=1000,name="bio",nullable=true)
     */
    private $bio;

    /**
     * @Gedmo\Slug(fields={"authorname"})
     * @ORM\Column(type="string",length=50,name="slug",nullable=true)
     */
    private $slug;

    /**
     * Author constructor.
     */
    public function __construct()
    {
        $this->casinoreviews=new ArrayCollection();
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
     * @return mixed
     */
    public function getAuthorname()
    {
        return $this->authorname;
    }


    /**
     * @param mixed $authorname
     */
    public function setAuthorname($authorname): void
    {
        $this->authorname = $authorname;
    }


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
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * @return mixed
     */
    public function getAuthorurl()
    {
        return $this->authorurl;
    }

    /**
     * @param mixed $authorurl
     */
    public function setAuthorurl($authorurl): void
    {
        $this->authorurl = $authorurl;
    }

    /**
     * @return mixed
     */
    public function getCasinoreviews()
    {
        return $this->casinoreviews;
    }


    public function addCasinoReview(Casino $casino)
    {
        if(!$this->casinoreviews->contains($casino))
        {
            $this->casinoreviews->add($casino);
        }
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
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }


}
