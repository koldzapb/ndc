<?php

namespace App\Mailer;

use App\Entity\Casino;
use App\Entity\ContactUs;
use App\Entity\Subscription;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Templating\EngineInterface;

class Mailer
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    /**
     * @var string
     */
    private $from;
    /**
     * @var string
     */
    private $host;
    /**
     * @var EngineInterface
     */
    private $templating;

    private $joshsMail;

    public function __construct(\Swift_Mailer $mailer, RequestStack $requestStack, EngineInterface $templating, $joshsMail)
    {
        $this->mailer = $mailer;
        $currR = $requestStack->getCurrentRequest();
        if ($currR !== null) {
            $this->host = $currR->getSchemeAndHttpHost();
        }

        $this->templating = $templating;
        $this->from = 'nodepositcasino.org@gmail.com';
        $this->joshsMail = $joshsMail;
    }

    public function sendRegistrationEmail(User $user)
    {
        $message = new \Swift_Message();
        $message
            ->setSubject($user->getNewsletter() ?
                'Welcome to NDC - Confirm Your Subscription' :
                'Welcome to NDC - Confirm Your Registration')
            ->setTo($user->getEmail())
            ->setBody($this->templating->render('emails/registration.txt.twig', [
                'user' => $user,
                'host' => $this->host,
            ]))
            ->addPart($this->templating->render('emails/registration.html.twig', [
                'user' => $user,
                'host' => $this->host,
            ]), 'text/html')
            ->setFrom($this->from);
        return $this->mailer->send($message);
    }

    public function sendSubscriptionEmail(Subscription $subscription)
    {
        $message = new \Swift_Message();
        $message
            ->setSubject('Welcome to NDC - Confirm Your Subscription')
            ->setTo($subscription->getEmail())
            ->setBody($this->templating->render('emails/subscription.txt.twig', [
                'subscription' => $subscription,
                'host' => $this->host,
            ]))
            ->addPart($this->templating->render('emails/subscription.html.twig', [
                'subscription' => $subscription,
                'host' => $this->host,
            ]), 'text/html')
            ->setFrom($this->from);
        return $this->mailer->send($message);
    }

    public function sendEmailChangeEmail(User $user)
    {
        $message = new \Swift_Message();
        $message
            ->setSubject('Welcome to NDC - Confirm Your Subscription')
            ->setTo($user->getEmail())
            ->setBody($this->templating->render('emails/email_change.txt.twig', [
                'user' => $user,
                'host' => $this->host,
            ]))
            ->addPart($this->templating->render('emails/email_change.html.twig', [
                'user' => $user,
                'host' => $this->host,
            ]), 'text/html')
            ->setFrom($this->from);
        return $this->mailer->send($message);
    }


    public function sendAffiliateLinkChange($name, $email, $casinoname, $casinourl)
    {
        $message = new \Swift_Message();
        $message
            ->setSubject('NDC-Affiliate link change')
            ->setTo($email)
            ->setBody($this->templating->render('emails/affiliate_link_change.txt.twig', [
                'username' => $name,
                'casinoname' => $casinoname,
                'casinourl' => $casinourl
            ]))
            ->addPart($this->templating->render('emails/affiliate_link_change.html.twig', [
                'username' => $name,
                'casinoname' => $casinoname,
                'casinourl' => $casinourl
            ]), 'text/html')
            ->setFrom($this->from);
        return $this->mailer->send($message);
    }


    public function sendEmailResetPassword(User $user)
    {
        $message = new \Swift_Message();
        $message
            ->setSubject('Welcome to NDC - Reset Your Password')
            ->setTo($user->getEmail())
            ->setBody($this->templating->render('emails/reset_password.txt.twig', [
                'user' => $user,
                'host' => $this->host,
            ]))
            ->addPart($this->templating->render('emails/reset_password.html.twig', [
                'user' => $user,
                'host' => $this->host,
            ]), 'text/html')
            ->setFrom($this->from);
        return $this->mailer->send($message);
    }

    public function sendContactUsMail(ContactUs $contactUs)
    {

        $message = new \Swift_Message();
        $message
            ->setSubject('New Contact Message From nodepositcasino.org')
            ->setTo($this->joshsMail)
            ->setBody(
                $contactUs->getContent()
            )
            ->setFrom($contactUs->getEmail());
        return $this->mailer->send($message);

    }

    public function sendNewNodepositBonusMail($email,$subject,$content)
    {
        $message = new \Swift_Message();
        $message
            ->setSubject($subject)
            ->setTo($email)
            ->setBody($content)
            ->setContentType('text/html')
            ->setCharset('utf8mb4')
            ->setFrom($this->from);
        return $this->mailer->send($message);
    }




}