<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FiltersRepository")
 */
class Filters
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=128,name="search")
     */
    private $search;


    /**
     * @ORM\Column(type="string",length=128,name="replace")
     */
    private $replace;

    /**
     * @var int
     * @ORM\Column(type="smallint")
     */
    private $rank = 1;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $active = true;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $maxReplacements = 1;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getSearch()
    {
        return $this->search;
    }


    /**
     * @return mixed
     */
    public function getReplace()
    {
        return $this->replace;
    }


    /**
     * @param mixed $replace
     */
    public function setReplace($replace): void
    {
        $this->replace = $replace;
    }


    /**
     * @param mixed $search
     */
    public function setSearch($search): void
    {
        $this->search = $search;
    }

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getMaxReplacements(): int
    {
        return $this->maxReplacements;
    }

    /**
     * @param int $maxReplacements
     */
    public function setMaxReplacements(int $maxReplacements): void
    {
        $this->maxReplacements = $maxReplacements;
    }
}
