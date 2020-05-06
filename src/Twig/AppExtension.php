<?php

namespace App\Twig;


use App\Utils\ShortCodeProcessor;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    /**
     * @var ShortCodeProcessor
     */
    private $shortCodeProcessor;

    public function __construct(ShortCodeProcessor $shortCodeProcessor)
    {
        $this->shortCodeProcessor = $shortCodeProcessor;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('shortCodes', $this->shortCodeProcessor)
        ];
    }
}