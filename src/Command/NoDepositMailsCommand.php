<?php


namespace App\Command;


use App\Entity\NoDepositBonusMails;
use App\Mailer\Mailer;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NoDepositMailsCommand extends Command
{
    protected static $defaultName = 'app:send_nd_mails';
    private $entityManager;
    private $mailer;

    public function __construct(string $name = null,EntityManagerInterface $entityManager,Mailer $mailer)
    {
        $this->entityManager=$entityManager;
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function configure()
    {
        $this->setDescription("Sends New No Deposit Mails");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $mails=$this->entityManager->getRepository(NoDepositBonusMails::class)->matching(Criteria::create()->where(Criteria::expr()->eq('sent',0))->setMaxResults(50));
        /*** @var $mail NoDepositBonusMails */
        foreach ($mails as $mail){
            $this->mailer->sendNewNodepositBonusMail($mail->getEmail(),$mail->getSubject(),$mail->getContent());
            $mail->setSent(true);
        }
        $this->entityManager->flush();
    }
}