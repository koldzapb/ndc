<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReplyRepository")
 */
class Reply
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string",length=255,name="content")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserToUserPost",inversedBy="replies")
     */
    private $post;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="replies")
     */
    private $user;

    /**
     * @ORM\Column(type="datetime",name="timeadded")
     */
    private $timeadded;


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
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post): void
    {
        $this->post = $post;
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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
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






}
