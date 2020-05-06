<?php


namespace App\EventListener;


use App\Entity\NoDepositBonusMails;
use App\Entity\User;
use App\Events\NewNoDepositBonusEvent;
use App\Mailer\Mailer;
use App\Utils\Locator;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Templating\EngineInterface;

class NewNoDepositBonusEventSubscriber implements EventSubscriberInterface
{
    private $entityManager;
    private $mailer;
    private $templating;
    private $locator;

    public function __construct(EntityManagerInterface $entityManager,Mailer $mailer,EngineInterface $templating,Locator $locator)
    {
        $this->entityManager=$entityManager;
        $this->mailer=$mailer;
        $this->templating=$templating;
        $this->locator = $locator;
    }

    public static function getSubscribedEvents()
    {
        return [
            NewNoDepositBonusEvent::NAME=>[
                ['prepareMails']
            ]
        ];
    }

    public function prepareMails(NewNoDepositBonusEvent $event)
    {
        $users=$this->entityManager->getRepository(User::class)->matching(Criteria::create()->where(Criteria::expr()->eq('isActive',1))->andWhere(Criteria::expr()->eq('newsletter',1)));
        /*** @var $user User */
        foreach ($users as $user){
            $bonus=$event->getBonus();
            $noDepositBonusMail=new NoDepositBonusMails();
            $noDepositBonusMail->setEmail($user->getEmail());
            $noDepositBonusMail->setSubject(
                sprintf("[ 🎁 New Bonus Alert!] %s%s NDC Details Inside",
                    $bonus->getSymbol(),$bonus->getMaxbonusshow()
            ));
            $usersCountry=!empty($user->getCurrentIp())?$this->locator->getCountry($user->getCurrentIp()):null;

           $noDepositBonusMail->setContent($this->templating->render('emails/new_no_deposit_bonus.html.twig',[
               'bonus'=>$event->getBonus(),
               'user'=>$user,
               'users_country'=>$usersCountry
           ]));
           $noDepositBonusMail->setSent(false);
           $this->entityManager->persist($noDepositBonusMail);
        }
        $this->entityManager->flush();
    }

}