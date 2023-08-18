<?php
namespace App\Patterns\Creational\AbstractFactory\Menu\Products;

use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;
use App\Patterns\Creational\AbstractFactory\Menu\MainCourse;

final class Pizza implements MenuInformation, MainCourse
{

    public function __construct() {}
    
    public function getAllergens(): string {
        return 'Bah, tu verras bien';
    }

    public function getPrice(): float {
        return 15.50;
    }
    
    public function getDescription(): string {
        return 'Voilà la belle pizza maison au micro-ondes';
    }
}

