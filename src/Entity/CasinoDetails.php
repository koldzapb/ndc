<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CasinoDetailsRepository")
 */
class CasinoDetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;










    /**
     * @ORM\Column(type="integer",name="ndcauthorid",nullable=true)
     */
    private $ndcauthorid;



    /**
     * @ORM\Column(type="datetime",name="timeadded",nullable=true)
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
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAwardrank()
    {
        return $this->awardrank;
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
    public function getNdcauthorid()
    {
        return $this->ndcauthorid;
    }



    /**
     * @return mixed
     */
    public function getNodepositoftheweek()
    {
        return $this->nodepositoftheweek;
    }

    /**
     * @param mixed $awardrank
     */
    public function setAwardrank($awardrank): void
    {
        $this->awardrank = $awardrank;
    }

    /**
     * @return mixed
     */
    public function getReviewtext()
    {
        return $this->reviewtext;
    }

    /**
     * @param mixed $ndcauthorid
     */
    public function setNdcauthorid($ndcauthorid): void
    {
        $this->ndcauthorid = $ndcauthorid;
    }




}
