<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CasinoAndBonusLikesAndPostsRepository")
 */
class CasinoAndBonusLikesAndPosts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Casino",inversedBy="likes")
     */
    private $casinoLiked;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Casino",inversedBy="posts")
     */
    private $postToCasino;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Bonus",inversedBy="likes")
     */
    private $likedBonus;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LikeAndPostType",inversedBy="likesAndPosts")
     */
    private $type;

    /**
     * @ORM\Column(type="string",length=512,nullable=true)
     */
    private $postText;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime",length=512,nullable=true)
     */
    private $timeAdded;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="likesAndPostsToCasinoAndBonus")
     */
    private $userAdded;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User",mappedBy="postsLikes")
     */
    private $usersWhoLikedPost;

    public function __construct()
    {
        $this->usersWhoLikedPost=new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getCasinoLiked()
    {
        return $this->casinoLiked;
    }

    /**
     * @param mixed $casinoLiked
     */
    public function setCasinoLiked($casinoLiked): void
    {
        $this->casinoLiked = $casinoLiked;
    }

    /**
     * @return mixed
     */
    public function getPostToCasino()
    {
        return $this->postToCasino;
    }

    /**
     * @param mixed $postToCasino
     */
    public function setPostToCasino($postToCasino): void
    {
        $this->postToCasino = $postToCasino;
    }

    /**
     * @return mixed
     */
    public function getLikedBonus()
    {
        return $this->likedBonus;
    }

    /**
     * @param mixed $likedBonus
     */
    public function setLikedBonus($likedBonus): void
    {
        $this->likedBonus = $likedBonus;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * @param mixed $postText
     */
    public function setPostText($postText): void
    {
        $this->postText = $postText;
    }

    /**
     * @return mixed
     */
    public function getUserAdded()
    {
        return $this->userAdded;
    }

    /**
     * @param mixed $userAdded
     */
    public function setUserAdded($userAdded): void
    {
        $this->userAdded = $userAdded;
    }

    /**
     * @return mixed
     */
    public function getTimeAdded()
    {
        return $this->timeAdded;
    }

    /**
     * @return mixed
     */
    public function getUsersWhoLikedPost()
    {
        return $this->usersWhoLikedPost;
    }

    public function addUserWhoLikedPost(User $user)
    {
        if(!$this->usersWhoLikedPost->contains($user)) {
            $this->usersWhoLikedPost->add($user);
        }
    }

    public function allowedToRemovePost($user)
    {
        return $user instanceof User &&($this->userAdded->getId()==$user->getId()||$user->getRoles());
    }

    public function removeUserWhoLikedPost($user)
    {
        $this->usersWhoLikedPost->removeElement($user);
    }
}
