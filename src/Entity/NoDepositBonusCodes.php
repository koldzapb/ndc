<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NoDepositBonusCodesRepository")
 */
class NoDepositBonusCodes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $status;

    /**
     * @ORM\Column(type="boolean",options={"default"=false})
     */
    private $hidden;

    /**
     * @ORM\Column(type="boolean",options={"default"=false})
     */
    private $exclusive;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timeadded;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Casino",inversedBy="noDepositCodes")
     */
    private $casino;

    /**
     * @ORM\Column(type="integer")
     */
    private $lcb_id;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $time_updated;

    public function getId()
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(bool $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getExclusive(): ?bool
    {
        return $this->exclusive;
    }

    public function setExclusive(bool $exclusive): self
    {
        $this->exclusive = $exclusive;

        return $this;
    }

    public function getTimeadded(): ?\DateTimeInterface
    {
        return $this->timeadded;
    }

    public function setTimeadded(\DateTimeInterface $timeadded): self
    {
        $this->timeadded = $timeadded;

        return $this;
    }

    public function getTimeUpdated(): ?\DateTimeInterface
    {
        return $this->time_updated;
    }

    public function setTimeUpdated(?\DateTimeInterface $time_updated): self
    {
        $this->time_updated = $time_updated;

        return $this;
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
    public function getLcbId()
    {
        return $this->lcb_id;
    }

    /**
     * @param mixed $lcb_id
     */
    public function setLcbId($lcb_id): void
    {
        $this->lcb_id = $lcb_id;
    }
}
