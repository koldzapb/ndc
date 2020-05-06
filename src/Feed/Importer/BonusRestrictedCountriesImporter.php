<?php


namespace App\Feed\Importer;


use App\Entity\Bonus;
use App\Entity\Country;
use App\Events\NewNoDepositBonusEvent;
use App\Feed\Downloader;
use App\Repository\BonusRepository;
use App\Repository\CountryRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\DBAL\Driver\PDOException;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class BonusRestrictedCountriesImporter implements Importer
{
    const FEED = 'bonus_restricted_countries';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var BonusRepository
     */
    private $bonusRepository;

    /**
     * @var CountryRepository
     */
    private $countryRepository;
    private $dispatcher;

    public function __construct(Downloader $downloader, EntityManagerInterface $em,EventDispatcherInterface $dispatcher)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->bonusRepository = $em->getRepository(Bonus::class);
        $this->countryRepository = $em->getRepository(Country::class);
        $this->dispatcher=$dispatcher;
    }

    function supports(string $name): string
    {
        return $name === self::FEED;
    }

    function import(SymfonyStyle $io)
    {
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note(sprintf('Fetching feed "%s"...', self::FEED));
        }
        $data = $this->downloader->fetch(self::FEED);
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->success(sprintf('Feed "%s" fetched!', self::FEED));
        }

        foreach ($data as $bonusId => $restricted_countries) {
            $bonus = $this->bonusRepository->findOneBy(['lcbId'=>$bonusId]);
            if ($bonus instanceof Bonus) {
                $bonus=$this->em->merge($bonus);
                try{

                    $bonus->getRestrictedcountries()->clear();
                    foreach ($restricted_countries as $restricted_country) {
                        $country = $this->countryRepository->findOneBy(['countrycode' => $restricted_country,'countryid'=>null]);
                        if ($country instanceof Country) {
                            $country=$this->em->merge($country);
                            $bonus->addRestrictedCountry($country);
                            $country->addBonus($bonus);
                            $this->em->merge($bonus);
                            $this->em->merge($country);
                        }
                    }
                }

                catch(\PDOException | ForeignKeyConstraintViolationException | PDOException $exception)
                {
                    $io->error(sprintf('[%s] %s', (new \DateTime())->format('Y-m-d H:i:s'), $exception->getMessage()));
                    }




            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        try{

            $this->em->flush();
        }
        catch(\Exception $e)
        {
            $io->error($e->getMessage());

        }
        $bonusesForWhichNdEmailShouldBeSent=$this->em->getRepository(Bonus::class)->matching(Criteria::create()->where(Criteria::expr()->eq('sendNdMailsForThisBonus',true)));
        /*** @var $bonus Bonus */
        foreach ($bonusesForWhichNdEmailShouldBeSent as $bonus){
            $event=new NewNoDepositBonusEvent($bonus);
            $this->dispatcher->dispatch(NewNoDepositBonusEvent::NAME,$event);
            $bonus->setSendNdMailsForThisBonus(false);
        }
        $this->em->flush();


        $this->em->clear();
        $this->em->getUnitOfWork()->clear();

        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Restricted countries for bonuses imported!');
        }

    }
}