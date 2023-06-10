<?php

if (!function_exists('latex')) {
    function latex()
    {
        return \App\Http\Latex\Latex::getInstance();
    }
}

