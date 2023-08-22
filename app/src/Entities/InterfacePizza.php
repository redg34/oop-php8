<?php
namespace App\Entities;

interface Pizza {
    function getSize(): string;
    function getToppings(): array;
    function getDescription(): string;
    function getPrice(): float;
}