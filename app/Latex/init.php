<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('latex')) {
    function latex(): \App\Latex\Latex
    {
        return \App\Latex\Latex::getInstance();
    }
}

Route::match(['get', 'post'], '/latex/{performer}:{method}', function ($performer, $method) {
    return app("App\Latex\Performers\\$performer")->{$method}();
});
