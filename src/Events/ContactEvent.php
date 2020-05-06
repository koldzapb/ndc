<?php


namespace App\Events;


use App\Entity\ContactUs;
use Symfony\Component\EventDispatcher\Event;

class ContactEvent extends Event
{
    public const NAME='contact_message.added';

    protected $contactUs;

    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs=$contactUs;
    }

    public function getContactUs()
    {
        return $this->contactUs;
    }

}