<?php


namespace App\EventSubscribers;


use App\Events\ContactEvent;
use App\Mailer\Mailer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ContactUsSubscriber implements EventSubscriberInterface
{
    /**
     * @var Mailer
     */
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return[
            ContactEvent::NAME=>[
                ["sendContactMail"]
            ]

        ];

    }

    public function sendContactMail(ContactEvent $contactEvent)
    {
        $this->mailer->sendContactUsMail($contactEvent->getContactUs());
    }

}