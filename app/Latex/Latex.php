<?php

namespace App\Latex;

use App\Latex\Classes\Strings;
use App\Latex\Traits\SingletonTrait;

class Latex
{
    use SingletonTrait;

    public function strings(): Strings
    {
        return Strings::getInstance();
    }
}
