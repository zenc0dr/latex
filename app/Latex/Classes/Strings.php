<?php

namespace App\Latex\Classes;

use App\Latex\Traits\SingletonTrait;

class Strings
{
    use SingletonTrait;

    function toJson($arr, $pretty_print = false, $no_slashes = false): ?string
    {
        if (!$arr) {
            return null;
        }
        if (!is_array($arr)) {
            return null;
        }

        $options = JSON_UNESCAPED_UNICODE;
        if ($pretty_print) {
            $options |= JSON_PRETTY_PRINT;
        }
        if ($no_slashes) {
            $options |= JSON_UNESCAPED_SLASHES;
        }

        return json_encode($arr, $options);
    }

    function fromJson($string, $assoc = true): ?array
    {
        if (empty($string)) {
            return null;
        }
        return json_decode($string, $assoc);
    }
}
