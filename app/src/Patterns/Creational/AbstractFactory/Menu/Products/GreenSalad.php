<?php
namespace App\Patterns\Creational\AbstractFactory\Menu\Products;

use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;

final class GreenSalad implements MenuInformation {

    public function __construct() {}
    
    public function getAllergens(): string {
        return 'Bah, non, pas possible et je me gave en plus';
    }

    public function getPrice(): float {
        return 6.5;
    }
}

