<?php
namespace App\Patterns\Creational\Factory\Impl;

use App\Patterns\Creational\Factory\DeliveryCreator;
use App\Patterns\Creational\Factory\DeliveriesMode\Bicycle;
use App\Patterns\Creational\Factory\DeliveryMode;

class BicycleCreatorImpl extends DeliveryCreator {
    public function factoryMethod(): DeliveryMode {
        return new Bicycle();
    }
}

