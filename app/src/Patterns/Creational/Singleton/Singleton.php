<?php
namespace App\Patterns\Creational\Singleton;

use App\Patterns\Creational\Singleton\Counter;

final class Singleton {
    private static $instance = null;

    private function __construct() {
        Counter::incrementCounter();
    }
    
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        
        return self::$instance;
    }
    
    public function getCounter(): int {
        return Counter::getCounter();
    }
}

