<?php

namespace App;

class SingletonObject
{
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new SingletonObject();
        }

        return static::$instance;
    }


    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}