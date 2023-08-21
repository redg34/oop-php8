<?php
// Pizza.php
class Pizza {
    private $size;
    private $toppings = [];

    public function setSize($size) {
        $this->size = $size;
    }

    public function addTopping($topping) {
        $this->toppings[] = $topping;
    }

   
}
