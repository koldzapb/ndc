<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserToUserPostRepository")
 */
class UserToUserPost
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=512,name="content")
     */
    private $content;


    /**
     * @ORM\Column(type="datetime", name="timeadded")
     */
    private $timeadded;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="postedcomments")
     */
    private $userwhoposts;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="receivedcomments")
     */
    private $userwhoreceives;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reply",mappedBy="post",orphanRemoval=true)
     */
    private $replies;

    /**
     * UserToUserPost constructor.
     */
    public function __construct()
    {
        $this->replies=new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getTimeadded()
    {
        return $this->timeadded;
    }

    /**
     * @param mixed $timeadded
     */
    public function setTimeadded($timeadded): void
    {
        $this->timeadded = $timeadded;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUserwhoposts()
    {
        return $this->userwhoposts;
    }

    /**
     * @param mixed $userwhoposts
     */
    public function setUserwhoposts($userwhoposts): void
    {
        $this->userwhoposts = $userwhoposts;
    }

    /**
     * @return mixed
     */
    public function getUserwhoreceives()
    {
        return $this->userwhoreceives;
    }

    /**
     * @param mixed $userwhoreceives
     */
    public function setUserwhoreceives($userwhoreceives): void
    {
        $this->userwhoreceives = $userwhoreceives;
    }

    /**
     * @return mixed
     */
    public function getReplies()
    {
        return $this->replies;
    }

    public function addReply(Reply $reply)
    {
        if(!$this->replies->contains($reply))
        {
            $this->replies->add($reply);
        }
    }






}
