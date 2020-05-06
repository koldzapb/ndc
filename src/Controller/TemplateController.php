<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Bonus;
use App\Entity\BonusType;
use App\Entity\BonusValue;
use App\Entity\Casino;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\CountryList;
use App\Entity\GamesList;
use App\Entity\MainPage;
use App\Entity\News;
use App\Entity\Software;
use App\Entity\SoftwaresList;
use App\SocialRegister\SocialRegister;
use App\Utils\Locator;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class TemplateController extends Controller
{

    private $entityManager;
    private $socialRegister;
    private $userCountry;
    private $cache;


    public function __construct(EntityManagerInterface $entityManager,SocialRegister $socialRegister,Locator $locator,RequestStack $requestStack,AdapterInterface $cache)
    {
        $this->cache=new TagAwareAdapter($cache);
        $this->userCountry = $locator->getCountry($requestStack->getMasterRequest()->getClientIp());
        $this->entityManager=$entityManager;
        $this->socialRegister=$socialRegister;
        $this->socialRegister->createLinks();
    }


    public function header()
    {

        $countryList=$this->entityManager->getRepository(CountryList::class)->findAll();
        $softwaresList=$this->entityManager->getRepository(SoftwaresList::class)->findAll();
        $gamesList=$this->entityManager->getRepository(GamesList::class)->findAll();
        $bonusesByValue=$this->entityManager->getRepository(BonusValue::class)->findAll();

        return $this->render('header.html.twig', [
            'countrylist'=>$countryList,
            'softwareslist'=>$softwaresList,
            'gameslist'=>$gamesList,
            'bonusesbyvalue'=>$bonusesByValue
        ]);
    }


    public function footer(MainPage $page,$countryIconsWebPath)
    {
        $latestBonuses = $this->entityManager->getRepository(Bonus::class)->getLatestBonuses($this->userCountry);
        return $this->render('footer.html.twig', [
                'page'=>$page,
                'latestbonuses'=>$latestBonuses,
                'socialregister'=>$this->socialRegister,
                'country'=>$this->userCountry,
                'countryIconsWebPath'=>$countryIconsWebPath
            ]);

    }

    public function joinContent()
    {

        return $this->render('join_content.html.twig', [
            'socialregister'=>$this->socialRegister
        ]);
    }

    public function sectionInterest($pageTags)
    {

        $articles=$this->entityManager->getRepository(Article::class)->getArticlesByTags();
        array_walk($articles,function(&$item,$k,$data){
            $item=[
                'article_id'=>$item['id'],
                'match_count'=>count(
                    array_intersect(
                        explode(',',$data),
                        explode(',',$item['tags'])
                    )
                )];
        },$pageTags);
        $articles=array_combine(array_column($articles,'article_id'),array_column($articles,'match_count'));
        arsort($articles);
        $articles=$this->entityManager->getRepository(Article::class)->matching(Criteria::create()->where(Criteria::expr()->in('id',array_slice(array_keys($articles),0,2))));
        return $this->render('section_interest.html.twig', [
            'articles'=>$articles
        ]);
    }

    public function indexHeader()
    {
        $indexHeader=$this->cache->getItem("index_header_".str_replace([" ",":"],["_","_"],$this->userCountry->getName()));
        if(!$indexHeader->isHit()){
            $ndBonusType=$this->entityManager->getRepository(BonusType::class)->findOneBy(['name'=>'No Deposit']);
            $noDepositOfTheWeek=$this->entityManager->getRepository(Casino::class)->noDepositCasinosOfTheWeek($this->userCountry,$ndBonusType);
            $bestcasinos=$this->entityManager->getRepository(Casino::class)->getBestCasinosForCountry($this->userCountry);
            $indexHeader->tag(['casinos','ndw']);
            $indexHeader->set($this->render('index_header.twig',[
                'bestcasinos'=>$bestcasinos,
                'ndw'=>$noDepositOfTheWeek,
                'country'=>$this->userCountry
            ]));
            $this->cache->save($indexHeader);

        }
        return $indexHeader->get();
    }

    public function mostLikedBonuses()
    {
        $bonuses=[];
        $top3Bonuses=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getTopThreeLikedBonuses($this->userCountry);
        foreach ($top3Bonuses as $bonusLike)
        {
            /*** @var $bonus Bonus */
            $bonus=$bonusLike[0]->getLikedBonus();
            if($bonus instanceof Bonus)
            {
                $bonuses[]=[$bonus,$this->entityManager->getRepository(Software::class)->getSoftwaresForCasino($bonus->getCasino(),$this->userCountry,0,3),$this->entityManager->getRepository(Software::class)->getSoftwaresForCasino($bonus->getCasino(),$this->userCountry,3,500)];
            }
        }
        return new Response($this->renderView('Bonus/most_liked.html.twig',[
            'bonuses'=>$bonuses,
            'country'=>$this->userCountry
        ]));
    }

    public function latestNewsAndArticlesForIndexPage()
    {
        $newsAndArticles=$this->cache->getItem('news_and_articles');
        if(!$newsAndArticles->isHit()){
            $news=$this->entityManager->getRepository(News::class)->matching(Criteria::create()->where(Criteria::expr()->eq('live',true))->orderBy(['timeadded'=>Criteria::DESC])->setMaxResults(3));
            $articles=$this->entityManager->getRepository(Article::class)->matching(Criteria::create()->where(Criteria::expr()->eq('live',true))->orderBy(['timeadded'=>Criteria::DESC])->setMaxResults(3));
            $newsAndArticles->tag(['news','articles']);
            $newsAndArticles->set($this->renderView('latest_news_articles_index.html.twig',[
                'news'=>$news,
                'articles'=>$articles
            ]));
            $this->cache->save($newsAndArticles);
        }

        return new Response($newsAndArticles->get());
    }

    public function userPopups()
    {

        return $this->render('user_popups.html.twig', [
            'socialregister'=>$this->socialRegister
        ]);
    }

}
