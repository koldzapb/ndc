<?php

namespace App\Controller;

use App\BonusRendering\BonusRenderManager;
use App\Entity\BonusValue;
use App\Entity\CountryList;
use App\Entity\GamesList;
use App\Entity\SoftwaresList;
use App\Repository\BonusRepository;
use App\Utils\BonusRender;
use App\Utils\Locator;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BonusController extends Controller
{
    private $userCountry;
    private $entityManager;
    private $bonusRepository;
    private $bonusRender;

    public function __construct(Locator $locator, RequestStack $requestStack, EntityManagerInterface $entityManager, BonusRepository $bonusRepository, BonusRender $bonusRender)
    {
        $this->userCountry = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager = $entityManager;
        $this->bonusRepository = $bonusRepository;
        $this->bonusRender = $bonusRender;
    }

    /**
     * @Route(path="/bonuses/country/{slug}",name="bonusesforcountry")
     */
    public function bonusesForCountry(CountryList $countryList, CountryList $countryPage)
    {
        if (!$countryList instanceof CountryList) throw new NotFoundHttpException();
        $country = $countryList->getReferencedcountry();
        $bonusesc = $this->bonusRepository->getAllBonusesForCountry($country, 0, 50, "highRating",$this->userCountry);

        return $this->render('Bonus/bonusesforcountry.html.twig', [
            'countryPage' => $countryPage,
            'bonuseslist' => $this->bonusRender->render($bonusesc, $country),
            'countrycode' => strtolower($country->getCountryCode()),
            'bodyclass' => "template-page",
            'page' => $countryList,
            'totalnumber' => $this->bonusRepository->getBonusesNumberForCountry($country,$this->userCountry),
            'country' => $country,

        ]);
    }


    /**
     * @Route(path="/bonuses/software/{slug}" , name="bonusesforsoftware")
     */
    public function bonusesForSoftware(SoftwaresList $softwarePage)
    {
        if (!$softwarePage instanceof SoftwaresList) throw new NotFoundHttpException();
        $software = $softwarePage->getSoftware();
        $bonuses = $this->bonusRepository->getAllBonusesForSoftware($this->userCountry, $software, 0, 50, "highRating");
        return $this->render('Bonus/bonusesforsoftware.html.twig', [
            'softwarePage' => $softwarePage,
            'bonuseslist' => $this->bonusRender->render($bonuses, $this->userCountry),
            'countrycode' => strtolower($this->userCountry->getCountryCode()),
            'bodyclass' => "template-page",
            'page' => $softwarePage,
            'totalnumber' => $this->bonusRepository->getBonusesNumberForSoftware($this->userCountry, $software),
            'country' => $this->userCountry,
            'software' => $software,

        ]);
    }

    /**
     * @Route(path="/bonuses/game/classicblackjack")
     */
    public function classicblackjack()
    {
        return $this->redirectToRoute('bonusesbygametype',['gametype'=>'blackjack']);
    }

    /**
     * @Route(path="/bonuses/game/{gametype}" , name="bonusesbygametype")
     */
    public function bonusesbygametype($gametype)
    {
        $gemTypePage = $this->entityManager->getRepository(GamesList::class)->findOneBy(['slug' => $gametype]);
        if(!$gemTypePage instanceof GamesList) throw new NotFoundHttpException();
        $bonuses = $this->bonusRepository->getAllBonusesByGameType($this->userCountry,$gametype,0,50,"highRating");
        return $this->render('Bonus/bonusesbygametype.html.twig', [
            'casinoslist' => $this->bonusRender->render($bonuses,$this->userCountry),
            'countrycode' => strtolower($this->userCountry->getCountryCode()),
            'bodyclass' => "template-page",
            'page' => $gemTypePage,
            'totalnumber'=>$this->bonusRepository->getBonusesNumberForGameType($this->userCountry,$gametype),
            'country'=>$this->userCountry,
            'gametype'=>$gametype,

        ]);


    }




    /**
     * @Route(path="/bonusrendering",name="bonus_rendering")
     */
    public function bonusRendering(Request $request,BonusRenderManager $bonusRenderManager)
    {
        $type=$request->get('type');
        $bonuses=$bonusRenderManager->getBonuses($type);
        $response=$bonuses;
        if($type=="index"){
            $response=[$bonuses[0],$bonuses[1]];
        }
        return new JsonResponse($response);
    }

    /**
     * @Route(path="/bonuses/value/{slug}",name="bonuses_by_value")
     */
    public function bonusesByValue(BonusValue $bonusValuePage)
    {
        if(!$bonusValuePage instanceof BonusValue) throw new NotFoundHttpException();
        $bonusType=$bonusValuePage->getBonustype();
        $bonusValue=number_format($bonusValuePage->getValue(), 4, '.', '');
        $bonusMaximumValue=number_format($bonusValuePage->getUpperValue(), 4, '.', '');
        $currencySymbol=$bonusValuePage->getSymbol();
        $bonuses=$this->bonusRepository->getBonusesByValue($bonusType,$bonusValue,$bonusMaximumValue,$currencySymbol,$this->userCountry,0,50,"highRating");
        return $this->render('Bonus/bonusesbyvalue.html.twig', [
            'casinoslist' => $this->bonusRender->render($bonuses,$this->userCountry),
            'countrycode' => strtolower($this->userCountry->getCountryCode()),
            'bodyclass' => 'template-page',
            'page' => $bonusValuePage,
            'country'=>$this->userCountry,
            'totalnumber'=>$this->bonusRepository->getBonusesByValueTotalNumber($bonusType,$bonusValue,$bonusMaximumValue,$currencySymbol,$this->userCountry,0)
        ]);
    }
}
