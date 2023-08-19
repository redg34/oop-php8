<?php
namespace App\Patterns\Creational\Factory;

use App\Patterns\Creational\Factory\DeliveryMode;

abstract class DeliveryCreator {
    public abstract function factoryMethod(): DeliveryMode;
    
    public function deliveryTime(): float {
        $delivery = $this->factoryMethod();
        
        return 60 / $delivery->getVelocity();
    }
}

