<?php
namespace App\Strategies\Beverages;

use App\Models\HotBeverage;

class AsTableRowStrategy implements ListingStrategyInterface {
    public function listing(HotBeverage $beverage): string {
        return '<tr><td>' . $beverage->getType() . '</td><td>' . $beverage->getOrigin() . '</td><td>' . $beverage->getPrice() . '</td></tr>';
    }
}