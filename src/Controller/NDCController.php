<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Bonus;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\Filters;
use App\Entity\MainPage;
use App\Entity\News;
use App\Entity\User;
use App\Entity\Casino;
use App\TextReplacement\TextReplacement;
use App\Utils\Locator;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class NDCController extends Controller
{
    private $userCountry;
    private $currentUri;

    public function __construct(Locator $locator, RequestStack $requestStack)
    {
        $this->userCountry = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
        $this->currentUri=$requestStack->getCurrentRequest()->getUri();
    }

    /**
     * @Route(path="/",name="index")
     * @param EntityManagerInterface $em
     * @param TextReplacement $textReplacement
     * @return Response
     */
    public function index(EntityManagerInterface $em,TextReplacement $textReplacement)
    {
        $liveActivities=$em->getRepository(CasinoAndBonusLikesAndPosts::class)->getLikesAndPosts(0);
        $liveActivitiesList=$this->renderView('LiveActivities/liveactivities.html.twig',['liveactivities'=>$liveActivities]);
        $page=$em->getRepository(MainPage::class)->findOneBy(['code'=>'Index']);
        $maintext=explode('<h3>',$page->getContent());
        $casinosForTextReplacement=$em->getRepository(Casino::class)->getCasinosForReplacement();
        $filters=$em->getRepository(Filters::class)->findAll();
        $maintext=$textReplacement->otherPagesReplacement($casinosForTextReplacement,$filters,$maintext,strstr($this->currentUri,'//',false));
        $segmentedText=[];
        foreach($maintext as $segment)
        {
            $exploded=explode('</h3>',$segment);
            if(!isset ($exploded[1])) {
                $segmentedText[] = [$exploded[0]];
            }
            else $segmentedText[]= [$exploded[0],$exploded[1]];
        }
        $segmentedText[0][0]=strip_tags($segmentedText[0][0]);

        return $this->render('index.html.twig',[
                'page'=>$page,
                'bodyclass'=>"template-home",
                'country'=>$this->userCountry,
                'liveactivities'=>$liveActivitiesList,
                'segmentedtext'=>$segmentedText,
        ]);
    }


    /**
     * @Route(path="/admin")
     */
    public function adminRedirection()
    {
        return $this->redirectToRoute('adminlogin');
    }



    /**
     * @Route(path="/liveactivities",name="getliveactivities")
     */
    public function liveactivities()
    {
        return new Response(1);
    }



    /**
     * @Route(path="/moreliveactivities",name="moreliveactivities")
     */
    public function moreLiveActivities(EntityManagerInterface $em,Request $request)
    {
        $first=$request->query->get('first');
        $liveActivities=$em->getRepository(CasinoAndBonusLikesAndPosts::class)->getLikesAndPosts($first);
        $liveActivitiesList=$this->renderView('LiveActivities/liveactivities.html.twig',['liveactivities'=>$liveActivities]);

        return new JsonResponse($liveActivitiesList);
    }




    /**
     * @Route(path="/moreliveactivitiesrewcas",name="moreliveactivities_for_casino_review")
     */
    public function moreLiveActivitiesForCasinoReview(EntityManagerInterface $em,Request $request)
    {
        try {
            /**@var $casino Casino **/
            $casino = $em->getReference(Casino::class, $request->get('casinoid'));
        } catch (ORMException $e) {
            return new JsonResponse(false);
        }
        $all=$request->get("total");
        $first=$request->get("first");
        $max=(isset($all))?$all:10;
        $liveActivities=$em->getRepository(CasinoAndBonusLikesAndPosts::class)->likesAndPostsForCasino($casino,$first,10);
        $liveActivitiesList=$this->renderView('LiveActivities/liveactivities.html.twig',['liveactivities'=>$liveActivities,'review'=>true]);

        return new JsonResponse($liveActivitiesList);
    }



    /**
     * @Route(path="/usertouserlike" , name="usertouserlike")
     */
    public function userToUserLike(Request $request,EntityManagerInterface $em,AuthorizationCheckerInterface $authorizationChecker)
    {
        if($authorizationChecker->isGranted("ROLE_USER")||$authorizationChecker->isGranted("ROLE_ADMIN"))
        {

            $userToBeLikedId=$request->request->get('id');
            try {
                $userToBeLiked = $em->getReference(User::class, $userToBeLikedId);
            } catch (ORMException $e) {
                return new JsonResponse("<strong>Unexistant user.</strong>");
            }
            $userWhoLikesOtherUser=$this->getUser();
            if($userToBeLiked->getOtheruserslikes()->contains($userWhoLikesOtherUser)){
                return new JsonResponse("<strong>Already Liked!</strong>");
            }
            $userToBeLiked->addOtherUserLike($userWhoLikesOtherUser);
            $userWhoLikesOtherUser->addLikeToOtherUser($userToBeLiked);
            $em->merge($userToBeLiked);
            $em->merge($userWhoLikesOtherUser);
            $em->flush();
            return new JsonResponse("<strong>Liked</strong> </br> Your Like Has Been Saved");

        }
        return new JsonResponse("<strong>Register/Login to like.</strong>");

    }


}
