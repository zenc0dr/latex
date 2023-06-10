<?php

namespace App\Http\Latex;

use App\Http\Latex\Classes\Strings;
use App\Http\Latex\Traits\SingletonTrait;

class Latex
{
    use SingletonTrait;

    public function strings(): Strings
    {
        return Strings::getInstance();
    }
}
