<?php

namespace App\Controller;

use App\AppHelperFunctions\AppHelperFunctions;
use App\Entity\Article;
use App\Entity\ArticleCategory;
use App\Entity\Author;
use App\Entity\Casino;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\Filters;
use App\Entity\MainPage;
use App\Entity\News;
use App\Repository\ArticleRepository;
use App\TextReplacement\TextReplacement;
use App\Utils\Locator;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ArticleController extends Controller
{

    private $userCountry;
    private $entityManager;
    private $articleRepository;
    private $currentUri;

    public function __construct(Locator $locator, RequestStack $requestStack,EntityManagerInterface $entityManager,ArticleRepository $articleRepository)
    {
        $this->userCountry = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager=$entityManager;
        $this->articleRepository=$articleRepository;
        $this->currentUri=$requestStack->getCurrentRequest()->getUri();
    }

    /**
     * @Route(path="/articles/",name="articles")
     */
    public function articles()
    {
        $activities=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getLikesAndPosts(0,2);
        $activities=$this->renderView('LiveActivities/articles_and_news_pages_liveactivities.html.twig',['liveactivities'=>$activities]);


        return $this->render('Articles/articles.html.twig',
            [
                'page' =>  $this->entityManager->getRepository(MainPage::class)->findOneBy(['code' => 'Articles']),
                'articlecategories' => $this->entityManager->getRepository(ArticleCategory::class)->getCategoriesWhichHaveAssignedArticles(),
                'topcasinosforcountry' => $this->entityManager->getRepository(Casino::class)->getBestCasinosForCountry($this->userCountry),
                'articles' => $this->articleRepository->getArticles(0),
                'country' => $this->userCountry,
                'bodyclass' => "template-page",
                'liveactivities' => $activities,
                'totalnumber' => $this->articleRepository->getArticlesNumber()

            ]);
    }


    /**
     * @Route(path="/article/{slug}",name="article")
     */
    public function article(Article $article, TextReplacement $textReplacement)
    {

        $page = $article;
        $page->setTotalviews();
        $this->entityManager->merge($page);
        $this->entityManager->flush();
        $casinosForTextReplacement=$this->entityManager->getRepository(Casino::class)->getCasinosForReplacement();
        $filters=$this->entityManager->getRepository(Filters::class)->findAll();
        $page->setContent($textReplacement->otherPagesReplacement($casinosForTextReplacement,$filters,$page->getContent(),strstr($this->currentUri,'//',false)));

        $bodyclass = "template-page";
        return $this->render('Articles/article.html.twig', [
            'page' => $page,
            'bodyclass' => $bodyclass,
        ]);


    }



    /**
     * @Route(path="/morearticles",name="morearticles")
     */
    public function moreArticles(Request $request)
    {
        $first=$request->get('first');
        $articles=$this->entityManager->getRepository(Article::class)->getArticles($first);
        return new JsonResponse($this->renderView('Articles/more_articles.html.twig',['articles'=>$articles]));
    }





    /**
     * @Route(path="/news/",name="news")
     */
    public function news()
    {

        $activities=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getLikesAndPosts(0,2);
        $activities=$this->renderView('LiveActivities/articles_and_news_pages_liveactivities.html.twig',['liveactivities'=>$activities]);


        return $this->render('Articles/news.html.twig',[
            'page'=>$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'News']),
            'articlecategories'=>$this->entityManager->getRepository(ArticleCategory::class)->getCategoriesWhichHaveAssignedArticles(),
            'topcasinosforcountry'=>$this->entityManager->getRepository(Casino::class)->getBestCasinosForCountry($this->userCountry),
            'news'=>$this->entityManager->getRepository(News::class)->getAllNews(0),
            'country'=>$this->userCountry,
            'bodyclass'=>"template-page",
            'liveactivities'=>$activities,
            'totalnumber'=>$this->entityManager->getRepository(News::class)->totalNumber(),
        ]);
    }

    /**
     * @Route(path="/morenews",name="more_news")
     */
    public function moreNews(Request $request)
    {
        $first=$request->get('first');
        $first=(isset($first))?$first:10;
        $news=$this->entityManager->getRepository(News::class)->getAllNews($first);
        return new JsonResponse($this->renderView("Articles/more_news.html.twig",['news'=>$news]));
    }





    /**
     * @Route(path="/news/{slug}",name="singlenews")
     */
    public function singleNews(News $singleNews,TextReplacement $textReplacement)
    {

        $casinosForTextReplacement=$this->entityManager->getRepository(Casino::class)->getCasinosForReplacement();
        $filters=$this->entityManager->getRepository(Filters::class)->findAll();
        $singleNews->setContent($textReplacement->otherPagesReplacement($casinosForTextReplacement,$filters,$singleNews->getContent(),strstr($this->currentUri,'//',false)));
        $latestNews=$this->entityManager->getRepository(News::class)->matching(Criteria::create()->where(Criteria::expr()->eq('live',true))->orderBy(['timeadded'=>Criteria::DESC])->setMaxResults(3));


        return $this->render('Articles/singlenews.html.twig',[
            'page'=>$singleNews,
            'bodyclass'=>'template/page',
            'latestNews'=>$latestNews
        ]);

    }






    /**
     * @Route(path="category/{slug}",name="newsbycategory")
     */
    public function newsByCategory(ArticleCategory $articleCategory)
    {

        $activities=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->getLikesAndPosts(0,2);
        $activities=$this->renderView('LiveActivities/articles_and_news_pages_liveactivities.html.twig',['liveactivities'=>$activities]);

        return $this->render('Articles/newsbycategory.html.twig',[
            'page'=>$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'News']),
            'articlecategories'=>$this->entityManager->getRepository(ArticleCategory::class)->getCategoriesWhichHaveAssignedArticles(),
            'topcasinosforcountry'=>$this->entityManager->getRepository(Casino::class)->getBestCasinosForCountry($this->userCountry),
            'news'=>$this->entityManager->getRepository(News::class)->getNewsByCategory($articleCategory),
            'country'=>$this->userCountry,
            'bodyclass'=>"template-page",
            'articlecategory'=>$articleCategory,
            'liveactivities'=>$activities
        ]);

    }

    /**
     * @Route(path="/authors/{slug}",name="author")
     */
    public function author($slug){

        $author=$this->entityManager->getRepository(Author::class)->findOneBy(['slug'=>$slug]);
        if(!$author instanceof Author) throw new NotFoundHttpException();
        $latestNews=$this->entityManager->getRepository(News::class)->matching(Criteria::create()->where(Criteria::expr()->eq('live',true))->orderBy(['timeadded'=>Criteria::DESC])->setMaxResults(3));

        return $this->render("Authors/author.html.twig",[
            'author'=>$author,
            'latestNews'=>$latestNews
        ]);
    }



}




