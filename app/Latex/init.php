<?php

if (!function_exists('latex')) {
    function latex()
    {
        return \App\Latex\Latex::getInstance();
    }
}

