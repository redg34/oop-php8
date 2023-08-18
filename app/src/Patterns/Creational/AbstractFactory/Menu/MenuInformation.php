<?php
namespace App\Patterns\Creational\AbstractFactory\Menu;

interface MenuInformation {
    public function getAllergens(): string;
    public function getPrice(): float;
}

