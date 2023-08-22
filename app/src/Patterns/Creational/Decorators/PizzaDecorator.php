<?php
namespace App\Decorators;

use App\Entities\Pizza;

abstract class PizzaDecorator implements Pizza {
    protected $pizza;

    public function __construct(Pizza $pizza) {
        $this->pizza = $pizza;
    }

    abstract function getDescription(): string;
    abstract function getPrice(): float;
}