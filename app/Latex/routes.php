<?php

use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '{performer}:{method}', function ($performer, $method) {
    $performer = str_replace('.', '\\', $performer);
    return app("App\Latex\Performers\\$performer")->{$method}();
});
