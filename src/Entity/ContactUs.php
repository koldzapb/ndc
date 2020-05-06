<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;




/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactUsRepository")
 */
class ContactUs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string",length=32,name="name")
     * @Assert\NotBlank(message="Name should not be blank")
     */
    private $name;



    /**
     * @ORM\Column(type="string",length=64,name="email")
     * @Assert\Email()
     * @Assert\NotBlank(message="Email should not be blank")
     */
    private $email;


    /**
     * @ORM\Column(type="string",length=512,name="content")
     * @Assert\NotBlank(message="Content should not be blank")
     */
    private $content;


    /**
     * @ORM\Column(type="boolean" ,name="seen",options={"default"=0})
     */
    private $seen=false;



    /**
     * @var \DateTime $createdat
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime",name="createdat",nullable=true)
     */
    private $createdat;


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
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
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
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * @param mixed $createdat
     */
    public function setCreatedat($createdat): void
    {
        $this->createdat = $createdat;
    }

    /**
     * @return mixed
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * @param mixed $seen
     */
    public function setSeen($seen): void
    {
        $this->seen = $seen;
    }


}
