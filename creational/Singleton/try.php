<?php

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

var_dump($obj1 === $obj2);
