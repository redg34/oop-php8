<?php
namespace App\Collections;

use App\Strategies\Beverages\ListingStrategyInterface;

interface Item {
    public function setListingStrategy(ListingStrategyInterface $strategy): void;
    public function getPrice(): ?float;
}