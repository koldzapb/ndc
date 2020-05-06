<?php


namespace App\Events;


use App\Entity\Bonus;
use Symfony\Component\EventDispatcher\Event;

class NewNoDepositBonusEvent extends Event
{
    public const NAME='new.no.deposit.bonus';

    protected $bonus;

    public function __construct(Bonus $bonus)
    {
        $this->bonus=$bonus;
    }

    public function getBonus()
    {
        return $this->bonus;
    }
}