<?php
use App\Entities\BasicPizza;
use App\Decorators\ExtraCheeseDecorator;
use App\Decorators\PepperoniDecorator;

$pizza = new BasicPizza();
$pizzaWithExtraCheese = new ExtraCheeseDecorator($pizza);

echo $pizza->getDescription(); // "Basic Pizza"
echo $pizza->getPrice(); // 10.0

echo $pizzaWithExtraCheese->getDescription(); // "Basic Pizza, Extra Cheese"
echo $pizzaWithExtraCheese->getPrice(); // 12.0


