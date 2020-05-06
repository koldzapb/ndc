<?php


namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\Security\Core\Exception\InsufficientAuthenticationException;

class NotAuthorizedListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        if ($exception = $event->getException() instanceof InsufficientAuthenticationException) {
            $event->setResponse(new Response('', Response::HTTP_UNAUTHORIZED));
        }
    }
}