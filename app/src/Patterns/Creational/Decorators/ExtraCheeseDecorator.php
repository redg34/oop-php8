<?php
namespace App\Decorators;

use App\Entities\Pizza;

class ExtraCheeseDecorator extends PizzaDecorator {
    public function getDescription(): string {
        return $this->pizza->getDescription() . ", Extra Cheese";
    }

    public function getPrice(): float {
        return $this->pizza->getPrice() + 2.0;
    }

    public function getSize(): string {
        return $this->pizza->getSize();
    }

    public function getToppings(): array {
        return $this->pizza->getToppings();
    }
}



