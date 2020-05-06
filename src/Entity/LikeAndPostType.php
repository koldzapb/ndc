<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LikeAndPostTypeRepository")
 */
class LikeAndPostType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoAndBonusLikesAndPosts",mappedBy="type")
     */
    private $likesAndPosts;


    public function __construct()
    {
        $this->likesAndPosts=new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
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
    public function getLikesAndPosts()
    {
        return $this->likesAndPosts;
    }




}
