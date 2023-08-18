<?php
namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;

interface MenuBuilder {
    public function addPiece(MenuInformation $piece): MenuBuilder;
    public function build(): float;
}

