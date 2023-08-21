<?php
// PizzaBuilder.php
namespace    App\Patterns\Creational\Builder;
use App\Entities\Pizza;
use App\Patterns\Creational\Factory\PizzaBuilderFactory;
class PizzaBuilder {
     private $pizza;
 
     public function __construct() {
         $this->pizza = new Pizza();
     }
 
     public function setSize($size) {
         $this->pizza->setSize($size);
         return $this;
     }
 
     public function addTopping($topping) {
         $this->pizza->addTopping($topping);
         return $this;
     }
 
     public function build() {
         return $this->pizza;
     }
 }
 
 // Usage
 $pizzaBuilder = PizzaBuilderFactory::createPizzaBuilder();
 $pizza = $pizzaBuilder->setSize('large')
                       ->addTopping('cheese')
                       ->addTopping('pepperoni')
                       ->build();