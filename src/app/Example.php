<?php

declare(strict_types=1);

namespace App;

class Example
{
    /**
     * @return string
     */
    public function __invoke(): string
    {
        return 'Hello';
    }
}