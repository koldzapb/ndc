<?php

namespace App\Controller;

use App\AppHelperFunctions\AppHelperFunctions;
use App\Entity\Banking;
use App\Entity\Bonus;
use App\Entity\Casino;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\CasinoLikes;
use App\Entity\Currency;
use App\Entity\Filters;
use App\Entity\Language;
use App\Entity\LikesAndPosts;
use App\Entity\MainPage;
use App\Entity\Post;
use App\Entity\Software;
use App\Entity\User;
use App\SocialRegister\SocialRegister;
use App\TextReplacement\TextReplacement;
use App\Utils\Locator;
use App\Utils\MetaGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CasinoController extends Controller
{


    private $userCountry;
    private $entityManager;
    private $socialRegister;
    private $currentUri;
    private $countryIconsWebPath;

    public function __construct(Locator $locator, RequestStack $requestStack,EntityManagerInterface $entityManager,SocialRegister $socialRegister,$countryIconsWebPath)
    {
        $this->userCountry = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager=$entityManager;
        $this->socialRegister=$socialRegister;
        $this->socialRegister->createLinks();
        $this->currentUri=$requestStack->getCurrentRequest()->getUri();
        $this->countryIconsWebPath=$countryIconsWebPath;

    }

    /**
     * @Route(path="/casinos/",name="casinos")
     */
    public function allCasinos(TextReplacement $textReplacement)
    {

        $casinos = $this->entityManager->getRepository(Casino::class)->getAllCasinos($this->userCountry,0,50);
        $page = $this->entityManager->getRepository(MainPage::class)->findOneBy(['code' => 'Casinos']);
        $casinosForTextReplacement=$this->entityManager->getRepository(Casino::class)->getCasinosForReplacement();
        $filters=$this->entityManager->getRepository(Filters::class)->findAll();
        $page->setContent($textReplacement->otherPagesReplacement($casinosForTextReplacement,$filters,$page->getContent(),strstr($this->currentUri,'//',false)));


        return $this->render('Casino/casinos_page.html.twig', [
            'casinoslist' => $this->renderView('Casino/casinos.html.twig',['casinos'=>$casinos,'country'=>$this->userCountry,'countryiconswebpath'=>$this->countryIconsWebPath]),
            'countrycode' => strtolower($this->userCountry->getCountryCode()),
            'bodyclass' => "template-page",
            'page' => $page,
            'totalnumber'=>$this->entityManager->getRepository(Casino::class)->getCasinosNumber(),
            'totalnumber_for_pagination'=>$this->entityManager->getRepository(Casino::class)->getNumberOfAllCasinos($this->userCountry)
        ]);

    }




    /**
     * @Route(path="casinourl/{id}",name="visit_casino")
     */
    public function visit_casino($id)
    {
        try {
            $casino = $this->entityManager->getReference(Casino::class, $id);
            $casinourl=$casino->getCasinoUrl();
            return $this->redirect($casinourl);
        } catch (ORMException $e) {
            throw new NotFoundHttpException();
        }
    }



    /**
     * @Route(path="casino-review/191/Sloto'Cash-Casino/ ")
     */
    public function slotoRedirection()
    {

        return $this->redirectToRoute('casino-review',
            [
               'id'=>191,
               'casinoname'=> 'SlotoCash-Casino'
            ],301);
    }


    /**
     * @Route(path="casino-review/{id}/{casinoname}/",name="casino-review")
     */
    public function casinoReview($id,TextReplacement $textReplacement, MetaGenerator $metaGenerator)
    {


        $casino=$this->entityManager->getRepository(Casino::class)->getCasinoForReview($id,$this->userCountry);
        if(!isset($casino[0])||!($casino[0] instanceof Casino)) throw new NotFoundHttpException();
        if(isset($casino[0])&&($casino[0] instanceof Casino)) {
            $casino=$casino[0];
        }

        $liveActivities=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->likesAndPostsForCasino($casino,0,10);
        $liveActivitiesList=$this->renderView('LiveActivities/liveactivities.html.twig',['liveactivities'=>$liveActivities,'review'=>true]);
        $bonuses=$this->entityManager->getRepository(Bonus::class)->getBonusesForReview($casino,$this->userCountry);
        $noDepositExclusiveBonuses=[];
        $noDepositBonuses=[];
        $otherBonuses=[];
        /** @var Bonus $bonus */
        foreach ($bonuses as $bonus)
        {
            if($bonus->getExclusive() && $bonus->getBonustypename()=="No Deposit")
            {
             $noDepositExclusiveBonuses[]=$bonus;
            }
            else if($bonus->getBonustypename()=="No Deposit")
            {
                $noDepositBonuses[]=$bonus;
            }
            else{
                $otherBonuses[]=$bonus;
            }

        }
        $bonuses=array_merge($noDepositExclusiveBonuses,$noDepositBonuses,$otherBonuses);

        $user=$this->getUser();
        if($user instanceof User)
        {
            if($casino->getUsers()->contains($user))
            {
                $casino->setLikedbyuser(true);
            }
            else{
                $casino->setLikedbyuser(false);

            }
        }

        $casinosForReplacement=$this->entityManager->getRepository(Casino::class)->getCasinosForReplacement();
        $filters=$this->entityManager->getRepository(Filters::class)->findAll();
        $reviewText=$textReplacement->reviewReplacement($casino,$casinosForReplacement,$filters,$casino->getReviewtext());

        if(strlen($casino->getReviewtext())>0) {
            $splittedReviewText=$parts = preg_split('#</h3>#', $reviewText, 2, PREG_SPLIT_DELIM_CAPTURE);
            $firstHeading =(isset($splittedReviewText[0]))?$splittedReviewText[0] :"";
            $restOfReviewText = (isset($splittedReviewText[1]))?$splittedReviewText[1]:"";
        }
        else{
            $firstHeading="";
            $restOfReviewText="";
        }

        return $this->render(
            'Casino/review.html.twig',
            [
                'casino'=>$casino,
                'meta'=>$metaGenerator->generateForCasino($casino,(isset($bonuses[0]))?$bonuses[0]:null),
                'likesAndComments'=>$liveActivitiesList,
                'country'=>$this->userCountry,
                'page'=>$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'Casino Review']),
                'bodyclass'=>"template-review",
                'bonuses'=>$bonuses,
                'softwares'=>$this->entityManager->getRepository(Software::class)->getSoftwaresForReview($casino,$this->userCountry),
                'likesandcomments'=>$liveActivitiesList,
                'reviewtext'=>$casino->getReviewtext(),
                'firstheading'=>$firstHeading,
                'restoftext'=>$restOfReviewText,
                'totalnumber'=>$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getTotalNumberOfEntriesForCasino($casino),
                'reviewpage'=>true
            ]
        );

    }



    /**
     * @Route(path="/morecasinos",name="morecasinos")
     */
    public function morecasinos(Request $request)
    {
        $country = $this->userCountry;
        $first=$request->get('first');
        $max=$request->get('max');
        $casinos=$this->entityManager->getRepository(Casino::class)->getAllCasinos($country,$first,$max);
        $casinoslist=$this->renderView('Casino/casinos.html.twig',['casinos'=>$casinos,'country'=>$this->userCountry,'countryiconswebpath'=>$this->countryIconsWebPath]);
        return new JsonResponse($casinoslist);
    }





    /**
     * @Route(path="/sortedcasinos",name="sortedcasinos")
     */
    public function sortedcasinos(Request $request)
    {

        $country = $this->userCountry;
        $sortType=$request->query->get("sorttype");
        $numberOfCasinosToReturn=$request->query->get("number");
        switch($sortType)
        {
            case "highRating":$casinos=$this->entityManager->getRepository(Casino::class)->getSortedCasinos($country,$numberOfCasinosToReturn,"averagerating DESC");
                break;
            case "lowRating":$casinos=$this->entityManager->getRepository(Casino::class)->getSortedCasinos($country,$numberOfCasinosToReturn,"averagerating ASC");
                break;
            case "nameAsc":$casinos=$this->entityManager->getRepository(Casino::class)->getSortedCasinos($country,$numberOfCasinosToReturn,"casinoname ASC");
                break;
            case "nameDesc":$casinos=$this->entityManager->getRepository(Casino::class)->getSortedCasinos($country,$numberOfCasinosToReturn,"casinoname DESC");
                break;
        }


        $casinoslist=$this->renderView('Casino/casinos.html.twig',['casinos'=>$casinos,'country'=>$this->userCountry,'countryiconswebpath'=>$this->countryIconsWebPath]);

        return new JsonResponse($casinoslist);


    }



    /**
     * @Route(path="/banking/{id}/{casinoname}", name="banking")
     */
    public function bankingreview($id)
    {

        $banking = $this->entityManager->getRepository(Banking::class)->find($id);
        if (!$banking instanceof Banking) {
            throw new NotFoundHttpException();
        }

        $casinos=$this->entityManager->getRepository(Casino::class)->getCasinosForBanking($banking,$this->userCountry);


        return $this->render('Casino/banking.html.twig',[
            'page'=>$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'Banking']),
            'casinos'=>$this->renderView('Casino/casinos.html.twig',['casinos'=>$casinos,'country'=>$this->userCountry,'countryiconswebpath'=>$this->countryIconsWebPath]),
            'banking'=>$banking,
            'bodyclass'=>'template-page',
            'country'=>$this->userCountry,
            'casinocount'=>count($casinos)
        ]);

    }


    /**
     * @Route(path="/currency/{id}/{name}", name="currency")
     */
    public function currencyreview ($id)
    {

        $currency = $this->entityManager->getRepository(Currency::class)->find($id);
        if (!$currency instanceof Currency) {
            throw new NotFoundHttpException();
        }

        $casinos=$this->entityManager->getRepository(Casino::class)->getCasinosForCurrency($currency,$this->userCountry);


        return $this->render('Casino/currency.html.twig',[
            'page'=>$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'Currency']),
            'country'=>$this->userCountry,
            'casinos'=>$this->renderView('Casino/casinos.html.twig',['casinos'=>$casinos,'country'=>$this->userCountry,'countryiconswebpath'=>$this->countryIconsWebPath]),
            'bodyclass'=>'template-page',
            'currency'=>$currency,
            'casinocount'=>count($casinos)
        ]);
    }



    /**
     * @Route(path="/language/{id}/{name}", name="language")
     */
    public function languagereview ($id)
    {

        $language = $this->entityManager->getRepository(Language::class)->find($id);
        if (!$language instanceof Language) {
            throw new NotFoundHttpException();
        }

        $casinos=$this->entityManager->getRepository(Casino::class)->getCasinosForLanguage($language,$this->userCountry);


        return $this->render('Casino/language.html.twig',[
            'page'=>$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'Language']),
            'country'=>$this->userCountry,
            'casinos'=>$this->renderView('Casino/casinos.html.twig',['casinos'=>$casinos,'country'=>$this->userCountry,'countryiconswebpath'=>$this->countryIconsWebPath]),
            'bodyclass'=>'template-page',
            'language'=>$language,
            'casinocount'=>count($casinos)]);
    }










}
