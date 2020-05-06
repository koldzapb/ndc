<?php


namespace App\Feed\Importer;


use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;

abstract class FeedsParent
{
    protected $cache;

    public function __construct(AdapterInterface $cache)
    {
        $this->cache=new TagAwareAdapter($cache);
    }
}