<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('latex')) {
    function latex(): \App\Latex\Latex
    {
        return \App\Latex\Latex::getInstance();
    }
}
