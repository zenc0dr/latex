<?php

namespace App\Latex\Traits;

trait SingletonTrait
{
    private static self $instance;

    public static function getInstance(): self {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}
}
