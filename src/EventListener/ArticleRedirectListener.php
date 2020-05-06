<?php


namespace App\EventListener;


use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\RouterInterface;

class ArticleRedirectListener
{
    private $articleRepository;
    private $router;

    public function __construct(ArticleRepository $articleRepository, RouterInterface $router)
    {
        $this->articleRepository = $articleRepository;
        $this->router = $router;
    }


    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $slug = trim($event->getRequest()->getPathInfo(), '/');
        if ($exception = $event->getException() instanceof NotFoundHttpException && $slug
            && $article = $this->articleRepository->findOneBy(['slug'=>$slug])
        ) {
            $event->setResponse(new RedirectResponse($this->router->generate('article', ['slug'=>$article->getSlug()])));
        }
    }
}