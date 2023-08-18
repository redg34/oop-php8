<?php
namespace App\Patterns\Creational\AbstractFactory\Menu;

interface MainStarterFactory {
    public function createStarter(string $type);
    public function createMainCourse(string $type);
}

