<?php
namespace App\Patterns\Creational\Singleton;

final class Counter {

   private static $iterations = 0;
   
   public static function incrementCounter(): void {
       self::$iterations = self::$iterations + 1;
   }
   
   public static function getCounter(): int {
       return self::$iterations;
   }
}

