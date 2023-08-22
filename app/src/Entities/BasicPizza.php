<?php
namespace App\Entities;
// Pizza.php
class BasicPizza implements Pizza {
    private $size;
    private $toppings = [];

    public function setSize($size) {
        $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

    public function addTopping($topping) {
        $this->toppings[] = $topping;
    }

    public function getToppings() {
        return $this->toppings;
    }

    public function getDescription(): string {
        return "Basic Pizza";
    }

    public function getPrice(): float {
        return 10.0;
    }
}

