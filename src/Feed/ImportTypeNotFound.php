<?php

namespace App\Feed;

use Throwable;

class ImportTypeNotFound extends \RuntimeException
{
    public function __construct(string $encoding = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct(
            sprintf('Import type "%s" not found!', $encoding),
            $code,
            $previous
        );
    }
}