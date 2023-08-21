<?php
namespace    App\Patterns\Creational\Factory;
use App\Patterns\Creational\Builder\PizzaBuilder;
// PizzaBuilderFactory.php
class PizzaBuilderFactory {
     public static function createPizzaBuilder() {
         return new PizzaBuilder();
     }
 }