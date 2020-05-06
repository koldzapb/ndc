<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;



/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, unique=true)
     * @Assert\NotBlank(message="Username should not be blank")
     * @Assert\Length(min=5,max=15,minMessage="Username should be at least five characters long",maxMessage="Username should not be longer than 15 characters")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64,nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60,nullable=true)
     * @Assert\Email()
     * @Assert\NotBlank(message="Email should not be blank")
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean",nullable=true)
     */
    private $isActive;

    /**
     *
     * @Assert\Length(
     *      min = 5,
     *      max = 4096,
     *      minMessage = "Your password must be at least {{ limit }} characters long.",
     *      maxMessage = "Your password cannot be longer than {{ limit }} characters."
     * )
     *
     */
    private $plainPassword;



    /**
     *
     * @ORM\Column(type="integer",name="roles",options={"default"=0})
     */
    private $roles;


    /**
     *@ORM\Column(type="string",name="salt",nullable=true)
     */
    private $salt;








    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino",inversedBy="users" ,orphanRemoval=true)
     * @ORM\JoinTable(name="casinouserlikes")
     */
    private $casinos;


    /**
     * @ORM\Column(type="boolean",name="admin",options={"default"=0},nullable=true)
     */
    private $admin;

    /**
     * @ORM\Column(type="datetime",name="timejoined",nullable=true)
     */
    private $timejoined;


    /**
     * @ORM\Column(type="string",length=255,name="googleid",nullable=true)
     */
    private $googleid;


    /**
     * @ORM\Column(type="string",length=255,name="twitterid",nullable=true)
     */
    private $twitterid;


    /**
     * @ORM\Column(type="integer",name="likessubmited",options={"default"=0},nullable=true)
     */
    private $likessubmitted;


    /**
     * @ORM\Column(type="integer",name="commentssubmited",options={"default"=0},nullable=true)
     */
    private $commentssubmitted;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserToUserPost",mappedBy="userwhoposts",orphanRemoval=true)
     */
    private $postedcomments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserToUserPost",mappedBy="userwhoreceives",orphanRemoval=true)
     */
    private $receivedcomments;


    /**
     * @ORM\Column(type="boolean",name="newsletter",nullable=true)
     */
    private $newsletter;


    /**
     * @ORM\Column(type="string",name="token",length=64,nullable=true)
     */
    private $token;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoAndBonusLikesAndPosts",mappedBy="userAdded")
     */
    private $likesAndPostsToCasinoAndBonus;





    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User",mappedBy="userwholikesotherusers" ,orphanRemoval=true)
     */
    private $otheruserslikes;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User",inversedBy="otheruserslikes" ,orphanRemoval=true)
     * @ORM\JoinTable(name="usertouserlikes")
     */
    private $userwholikesotherusers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reply",mappedBy="user")
     */
    private $replies;

    /**
     * @ORM\Column(type="string",length=128,name="image",options={"default"=null},nullable=true)
     */
    private $image;


    /**
     * @ORM\Column(type="boolean",name="male",nullable=true)
     */
    private $male;



    /**
     * @ORM\Column(type="string",name="fb_token",nullable=true)
     */
    private $fb_token;

    /**
     * @ORM\Column(type="string",name="reset_password_token",nullable=true)
     */
    private $resetPasswordToken;


    /**
     * @ORM\Column(type="string",name="register_ip",nullable=true)
     */
    private $registerIp;


    /**
     * @ORM\Column(type="string",name="current_ip",nullable=true)
     */
    private $currentIp;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CasinoAndBonusLikesAndPosts",inversedBy="usersWhoLikedPost")
     */
    private $postsLikes;





    private $imagefile;


    private $imagelocation;
























    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->isActive = false;
        $this->roles=0;
        $this->casinos=new ArrayCollection();
        $this->timejoined=new \DateTime();
        $this->postedcomments=new ArrayCollection();
        $this->receivedcomments=new ArrayCollection();
        $this->otheruserslikes=new ArrayCollection();
        $this->userwholikesotherusers=new ArrayCollection();
        $this->replies=new ArrayCollection();
        $this->likesAndPostsToCasinoAndBonus=new ArrayCollection();
        $this->postsLikes=new ArrayCollection();



    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {

        return $this->salt;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {

        if($this->roles==1)
        {
            return ['ROLE_ADMIN'];
        }

        return['ROLE_USER'];


    }




    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->salt
            ) = unserialize($serialized);
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }



    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }



    /**
     * @param mixed $salt
     */
    public function setSalt($salt): void
    {
        $this->salt = $salt;
    }






    /**
     * @return mixed
     */
    public function getCasinos()
    {
        return $this->casinos;
    }


    public function addCasino(Casino $casino)
    {
        if(!$this->casinos->contains($casino))
        {
            $this->casinos->add($casino);
        }
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $roleflag
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
        $this->roles=$admin;

    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getTimejoined()
    {
        return $this->timejoined;
    }

    /**
     * @param mixed $timejoined
     */
    public function setTimejoined($timejoined): void
    {
        $this->timejoined = $timejoined;
    }

    /**
     * @return mixed
     */
    public function getGoogleid()
    {
        return $this->googleid;
    }

    /**
     * @param mixed $googleid
     */
    public function setGoogleid($googleid): void
    {
        $this->googleid = $googleid;
    }

    /**
     * @return mixed
     */
    public function getTwitterid()
    {
        return $this->twitterid;
    }

    /**
     * @param mixed $twitterid
     */
    public function setTwitterid($twitterid): void
    {
        $this->twitterid = $twitterid;
    }

    /**
     * @param mixed $likessubmitted
     */
    public function setLikessubmited($addsub): void
    {
        if ($addsub === "+"){
            $this->likessubmitted = $this->likessubmitted + 1;
        }

        if ($addsub === "-"){
            $this->likessubmitted = $this->likessubmitted - 1;
        }
    }

    /**
     * @return mixed
     */
    public function getLikessubmited()
    {
        return $this->likessubmitted;
    }

    /**
     * @return mixed
     */
    public function getCommentssubmitted()
    {
        return $this->commentssubmitted;
    }


    /**
     *
     */
    public function setCommentssubmitted($addsub): void
    {
        if($addsub==="+"){
            $this->commentssubmitted = $this->commentssubmitted + 1;
        }
        if($addsub==="-"){
            $this->commentssubmitted = $this->commentssubmitted - 1;
        }


    }

    /**
     * @return mixed
     */
    public function getPostedcomments()
    {
        return $this->postedcomments;
    }

    public function addPostedComments(UserToUserPost $post)
    {
        if(!$this->postedcomments->contains($post))
        {
            $this->postedcomments->add($post);
        }

    }
    public function addCommentReceived(UserToUserPost $post)
    {
        if(!$this->receivedcomments->contains($post))
        {
            $this->receivedcomments->add($post);
        }
    }

    /**
     * @return mixed
     */
    public function getReceivedcomments()
    {
        return $this->receivedcomments;
    }

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public function setNewsletter($newsletter): void
    {
        $this->newsletter = $newsletter;
    }


    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }


    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }





    /**
     * @return mixed
     */
    public function getOtheruserslikes()
    {
        return $this->otheruserslikes;
    }


    public function addOtherUserLike(User $userToUserLike)
    {
        if(!$this->otheruserslikes->contains($userToUserLike))
        {
            $this->otheruserslikes->add($userToUserLike);
        }
    }

    /**
     * @return mixed
     */
    public function getLikestootherusers()
    {
        return $this->userwholikesotherusers;
    }

    public function addLikeToOtherUser(User $liketootheruser)
    {
        if(!$this->userwholikesotherusers->contains($liketootheruser))
        {
            $this->userwholikesotherusers->add($liketootheruser);
        }
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
        $this->replies->add($reply);
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getImagefile()
    {
        return $this->imagefile;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @param mixed $imagefile
     */
    public function setImagefile($imagefile): void
    {
        $this->imagefile = $imagefile;
    }

    /**
     * @return mixed
     */
    public function getImagelocation()
    {
        return $this->imagelocation;
    }


    /**
     * @param mixed $imagelocation
     */
    public function setImagelocation($imagelocation): void
    {
        $this->imagelocation = $imagelocation;
    }


    /**
     * @return mixed
     */
    public function getMale()
    {
        return $this->male;
    }

    /**
     * @param mixed $male
     */
    public function setMale($male): void
    {
        $this->male = $male;
    }


    /**
     * @return mixed
     */
    public function getFbToken()
    {
        return $this->fb_token;
    }


    /**
     * @param mixed $fb_token
     */
    public function setFbToken($fb_token): void
    {
        $this->fb_token = $fb_token;
    }

    /**
     * @return mixed
     */
    public function getResetPasswordToken()
    {
        return $this->resetPasswordToken;
    }

    /**
     * @param mixed $resetPasswordToken
     */
    public function setResetPasswordToken($resetPasswordToken): void
    {
        $this->resetPasswordToken = $resetPasswordToken;
    }

    /**
     * @return mixed
     */
    public function getCurrentIp()
    {
        return $this->currentIp;
    }

    /**
     * @return mixed
     */
    public function getRegisterIp()
    {
        return $this->registerIp;
    }

    /**
     * @param mixed $currentIp
     */
    public function setCurrentIp($currentIp): void
    {
        $this->currentIp = $currentIp;
    }

    /**
     * @param mixed $registerIp
     */
    public function setRegisterIp($registerIp): void
    {
        $this->registerIp = $registerIp;
    }

    /**
     * @return mixed
     */
    public function getLikesAndPostsToCasinoAndBonus()
    {
        return $this->likesAndPostsToCasinoAndBonus;
    }

    /**
     * @return ArrayCollection
     */
    public function getPostlikes(): ArrayCollection
    {
        return $this->postsLikes;
    }

    public function addPostsLike(CasinoAndBonusLikesAndPosts $post)
    {
        if(!$this->postsLikes->contains($post)) {
            $this->postsLikes->add($post);
        }
    }

    public function removePostLiked($post)
    {
        $this->postsLikes->removeElement($post);
    }


}

