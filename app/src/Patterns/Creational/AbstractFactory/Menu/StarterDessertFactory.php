<?php
namespace App\Patterns\Creational\AbstractFactory\Menu;

interface StarterDessertFactory {
    public function createMainCourse(string $type);
    public function createDessert(string $type);
}

