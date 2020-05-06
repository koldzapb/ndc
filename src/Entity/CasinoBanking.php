<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CasinoBankingRepository")
 *
 */
class CasinoBanking
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean",name="allowsdeposits")
     */
    private $allowsdeposits;

    /**
     * @ORM\Column(type="boolean",name="allowswithdrawals")
     */
    private $allowswithdrawals;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Casino",inversedBy="bankingoptions")
     * @ORM\JoinColumn(name="casino_id",referencedColumnName="id",onDelete="CASCADE")
     */
    private $casino;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Banking",inversedBy="casinos")
     */
    private $banking;



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
    public function getAllowsDeposits()
    {
        return $this->allowsdeposits;
    }

    /**
     * @param mixed $allowsdeposits
     */
    public function setAllowsDeposits($allowsdeposits): void
    {
        $this->allowsdeposits = $allowsdeposits;
    }

    /**
     * @return mixed
     */
    public function getAllowsWithdrawals()
    {
        return $this->allowswithdrawals;
    }

    /**
     * @param mixed $allowswithdrawals
     */
    public function setAllowsWithdrawals($allowswithdrawals): void
    {
        $this->allowswithdrawals = $allowswithdrawals;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return Banking
     */
    public function getBanking()
    {
        return $this->banking;
    }

    /**
     * @param mixed $banking
     */
    public function setBanking(Banking $banking): void
    {
        $this->banking = $banking;
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
}
