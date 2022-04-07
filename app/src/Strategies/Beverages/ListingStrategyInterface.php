<?php
namespace App\Strategies\Beverages;

use App\Models\HotBeverage;

interface ListingStrategyInterface {
    public function listing(HotBeverage $beverage): string;
}