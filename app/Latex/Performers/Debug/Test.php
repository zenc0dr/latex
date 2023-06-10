<?php

namespace App\Latex\Performers\Debug;

class Test
{
    # /latex/Debug.Test:hallo
    public function hallo(): string
    {
        return latex()->strings()->toJson([
            'foo' => 'bar'
        ]);
    }
}
