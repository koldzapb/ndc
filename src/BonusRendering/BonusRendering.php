<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.2.19.
 * Time: 14.20
 */

namespace App\BonusRendering;


use App\Repository\BonusRepository;
use App\Utils\BonusRender;
use App\Utils\Locator;
use App\Utils\NewBonusesSorter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class BonusRendering
{
    protected $bonusRepository;
    protected $requestStack;
    protected $entityManager;
    protected $first;
    protected $max;
    protected $order;
    protected $userCountry;
    protected $newBonusesSorter;
    protected $bonusemplateRender;

    public function __construct(Locator $locator,BonusRepository $bonusRepository,RequestStack $requestStack,EntityManagerInterface $entityManager,NewBonusesSorter $newBonusesSorter,BonusRender $bonusRender)
    {
        $this->bonusRepository=$bonusRepository;
        $this->requestStack=$requestStack;
        $this->entityManager=$entityManager;
        $this->first=$this->requestStack->getCurrentRequest()->get('first');
        $this->max=$this->requestStack->getCurrentRequest()->get('max');
        $this->order=$this->requestStack->getCurrentRequest()->get('sorttype');
        $this->userCountry = $locator->getCountry($requestStack->getCurrentRequest()->getClientIp());
        $this->newBonusesSorter=$newBonusesSorter;
        $this->bonusemplateRender=$bonusRender;

    }
}