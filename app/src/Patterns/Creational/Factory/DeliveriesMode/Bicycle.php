<?php
namespace App\Patterns\Creational\Factory\DeliveriesMode;

use App\Patterns\Creational\Factory\DeliveryMode;

final class Bicycle implements DeliveryMode {
    public function getVelocity(): float {
        return 0.3;
    }
}

