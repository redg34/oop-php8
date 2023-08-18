<?php
namespace App\Patterns\Creational\AbstractFactory\Menu;

use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;

interface MainCourseFactory {
    public function createMainCourse(string $type): MainCourse;
}

