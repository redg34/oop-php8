<?php
namespace App\Patterns\Creational\AbstractFactory\Menu\Products;

use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;
use App\Patterns\Creational\AbstractFactory\Menu\MainCourse;

final class Liguine implements MenuInformation, MainCourse
{

    public function __construct() {}
    
    public function getAllergens(): string {
        return 'Okay, tout va bien, vous pouvez y aller';
    }

    public function getPrice(): float {
        return 12.0;
    }
    
    public function getDescription(): string {
        return 'Des pâtes cuites à l\'eau à peine égoutées';
    }
}

