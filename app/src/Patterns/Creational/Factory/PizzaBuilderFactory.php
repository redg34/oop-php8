<?php
// PizzaBuilderFactory.php
class PizzaBuilderFactory {
     public static function createPizzaBuilder() {
         return new PizzaBuilder();
     }
 }