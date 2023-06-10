<?php

namespace App\Latex;

use App\Latex\Services\Strings;
use App\Latex\Traits\SingletonTrait;

class Latex
{
    use SingletonTrait;

    public function strings(): Strings
    {
        return Strings::getInstance();
    }
}
