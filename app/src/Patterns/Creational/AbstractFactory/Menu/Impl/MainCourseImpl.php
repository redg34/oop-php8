<?php
namespace App\Patterns\Creational\AbstractFactory\Menu\Impl;

use App\Patterns\Creational\AbstractFactory\Menu\MainCourseFactory;
use App\Patterns\Creational\AbstractFactory\Menu\MainCourse;

final class MainCourseImpl implements MainCourseFactory {

    public function createMainCourse(string $type): MainCourse {
        return new $type();
    }
}

