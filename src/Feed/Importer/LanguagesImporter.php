<?php


namespace App\Feed\Importer;


use App\Entity\Language;
use App\Feed\Downloader;
use App\Repository\LanguageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LanguagesImporter implements Importer
{
    const FEED = 'lcb_languages_options';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var LanguageRepository
     */
    private $languagesRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->languagesRepository = $em->getRepository(Language::class);
        $this->downloader = $downloader;
        $this->em = $em;
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

        foreach ($data as $languageData) {
            $language = $this->languagesRepository->find($languageData['id']) ?: new Language($languageData['id']);
            $language->setCountryCode($languageData['name']);
            $language->setName($languageData['title']);
            $language->setAddedTime(new \DateTime($languageData['added_time']));
            $language->setUpdatedTime(new \DateTime($languageData['updated_time']));
            $language->setSlug(str_replace([' ','/'],'-',$language->getName()));
            $language->setImg(strtolower($languageData['title']).".png");
            $this->em->merge($language);

        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->getUnitOfWork()->clear();
        $this->em->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Languages imported!');
        }
    }
}