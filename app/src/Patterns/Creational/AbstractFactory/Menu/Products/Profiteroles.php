<?php
namespace App\Patterns\Creational\AbstractFactory\Menu\Products;

use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;

final class Profiteroles implements MenuInformation {

    public function __construct() {}
    
    public function getAllergens(): string {
        return 'Pas dans la glace, peut être dans le chou';
    }

    public function getPrice(): float {
        return 10.0;
    }
}

