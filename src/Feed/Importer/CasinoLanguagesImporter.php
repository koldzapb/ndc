<?php


namespace App\Feed\Importer;


use App\Entity\Casino;
use App\Entity\Country;
use App\Entity\Language;
use App\Feed\Downloader;
use App\Repository\CasinoRepository;
use App\Repository\LanguageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CasinoLanguagesImporter implements Importer
{
    const FEED = 'lcb_languages_casinos';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var CasinoRepository
     */
    private $casinoRepository;

    /**
     * @var LanguageRepository
     */
    private $languageRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->casinoRepository = $em->getRepository(Casino::class);
        $this->languageRepository = $em->getRepository(Language::class);
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

        foreach ($data as $row) {
            $casino = $this->casinoRepository->findOneBy(['newid' => $row['casino_id']]);
            $language = $this->languageRepository->find($row['lang_id']);
            if ($casino instanceof Casino && $language instanceof Language) {
                $casino->addLanguage($language);
                $language->addCasino($casino);
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Casino languages imported!');
        }
    }
}