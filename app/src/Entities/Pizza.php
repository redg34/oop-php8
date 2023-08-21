<?php
namespace App\Entities;
// Pizza.php
class Pizza {
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
}
