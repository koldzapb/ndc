<?php

namespace App\Controller;

use App\ElasticSearch\ElasticSearch;
use App\Entity\Article;
use App\Entity\Casino;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\ContactUs;
use App\Entity\MainPage;
use App\Entity\News;
use App\Entity\Post;
use App\Entity\User;
use App\Events\ContactEvent;
use App\Form\ContactUsType;
use App\Utils\Locator;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class OtherPagesController extends Controller
{

    private $userCountry;
    private $entityManager;

    public function __construct(Locator $locator, RequestStack $requestStack,EntityManagerInterface $entityManager)
    {
        $this->userCountry = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager=$entityManager;
    }

    /**
     * @Route(path="/search",name="search")
     */
    public function search(ElasticSearch $es, Request $request, $countryIconsWebPath)
    {

        $page = $this->entityManager->getRepository(MainPage::class)->findOneBy(['code' => 'search']);

        $country = $this->userCountry;


        $q = $request->request->get('search_query');
        if (empty($q)) return $this->render('search.html.twig', [
            'page' => $page,
            'bodyclass' => 'template-page',
            'error' => 'Fill in search field',

        ]);
        $result = $es->searchForCasinos($q);

        $casinos = [];

        foreach ($result['hits']['hits'] as $hit) {
            $casino = $this->entityManager->getRepository(Casino::class)->findOneBy(['casinoname' => $hit['_source']['casinoname']]);
            $casinos[] = $casino;
        }
        if (count($casinos) > 0) {
            $casinoslist = $this->renderView('Casino/casinos.html.twig', [
                'casinos' => $casinos,
                'countryiconswebpath' => $countryIconsWebPath,
                'country' => $country
            ]);
        } else $casinoslist = "<h3>No results found.</h3>";

        return $this->render('search.html.twig', [
            'page' => $page,
            'bodyclass' => 'template-page',
            'casinos' => $casinoslist,
        ]);

    }


    /**
     * @Route(path="/user/{id}/{username}",name="user")
     */
    public function user($id)
    {

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id' => $id]);
        if (!($user) instanceof User) {
            throw new NotFoundHttpException();
        }

        $reviewposts = $this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getUserPosts($user);
        $receivedcomments = $user->getReceivedcomments();

        $posts = [];
        /**@var $post Post **/
        foreach ($reviewposts as $post) {

            $posts[] = [$post, strtotime($post->getTimeadded()->format('Y-m-d H:i:s'))];

        }
        foreach ($posts as $key => $row) {

            $timeadded[$key] = $row[1];
        }

        if (count($posts)) {
            array_multisort($timeadded, SORT_DESC, $posts);
        }

        $comments = [];


        foreach ($receivedcomments as $comment) {
            $comments[] = [$comment, $comment->getTimeadded()];
        }

        foreach ($comments as $k => $v) {
            $timeadded1[$k] = $v[1];
        }

        if (count($comments)) {
            array_multisort($timeadded1, SORT_DESC, $comments);
        }

        $casinoLikesNumber=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getNumberOfUserCasinoLikes($user);
        $casinoPostsNumber=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getNumberOfUserCasinoPosts($user);

        return $this->render('user.html.twig', [
            'user' => $user,
            'bodyclass' => "template-page",
            'page' => $this->entityManager->getRepository(MainPage::class)->findOneBy(['code' => 'User']),
            'posts' => $posts,
            'comments' => $comments,
            'casinoLikesNumber'=>$casinoLikesNumber,
            'casinoPostsNumber'=>$casinoPostsNumber,
        ]);

    }


    /**
     * @Route(path="/profile",name="profile")
     */
    public function profile()
    {
        return $this->redirectToRoute("user", [
            "id" => $this->getUser()->getId(),
            "username" => $this->getUser()->getUsername()
        ]);
    }





    /**
     * @Route(path="/contact/",name="contact")
     */
    public function contact()
    {

        $page = $this->entityManager->getRepository(MainPage::class)->findOneBy(['code' => 'Contact us']);

        return $this->render('contact_us.html.twig', [
            'page' => $page,
            'bodyclass' => 'template-page',
        ]);
    }


    /**
     * @Route(path="/contactuscontent",name="contact us content")
     */
    public function contactUsContent(Request $request, ValidatorInterface $validator,EventDispatcherInterface $eventDispatcher)
    {

        $contactUsEntity = new ContactUs();
        $form = $this->createForm(ContactUsType::class, $contactUsEntity);
        $form->submit([
            'email' => $request->request->get('email'),
            'name' => $request->request->get('name'),
            'content' => $request->request->get('content')
        ]);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($contactUsEntity);
            $this->entityManager->flush();
            $event=new ContactEvent($contactUsEntity);
            $eventDispatcher->dispatch(ContactEvent::NAME,$event);
            return new JsonResponse("Thank You! Your message has successfully been sent, we will do our best to respond as soon as possible.");
        } else {
            $errors = [];
            $ers = $validator->validate($contactUsEntity);
            foreach ($ers as $error) {

                $errors [] = $error->getMessage();

            }
            $response = new Response();
            $response->setContent(json_encode($errors));
            $response->setStatusCode(400);
            return $response;

        }


    }


    /**
     * @Route(path="/sitemap.xml",name="sitemap")
     */
    public function siteMap(Request $request)
    {
        $host = $request->getSchemeAndHttpHost();
        $mainPages = $this->entityManager->getRepository(MainPage::class)->matching(Criteria::create()->where(Criteria::expr()->neq('url', null)));
        $articles = $this->entityManager->getRepository(Article::class)->findAll();
        $news = $this->entityManager->getRepository(News::class)->findAll();
        $casinos = $this->entityManager->getRepository(Casino::class)->matching(Criteria::create()->where(Criteria::expr()->neq('closed',true)));




        $response = new Response();
        $response->headers->set('Content-Type', 'xml');
        $response->setContent($this->renderView('sitemap.xml.twig', [
            'host' => $host,
            'mainPages' => $mainPages,
            'articles' => $articles,
            'news' => $news,
            'casinos' => $casinos
        ]));

        return $response;
    }






    /**
     * @Route(path="/{slug}",name="general_pages")
     */
    public function test($slug)
    {
        $page=$this->entityManager->getRepository(MainPage::class)->findOneBy(['slug'=>trim($slug,"/")]);
        if(!$page instanceof MainPage ) throw new NotFoundHttpException();


        return $this->render('privacy.html.twig', [
            'page' => $page,
            'bodyclass' => 'template-page',
        ]);
    }










}
