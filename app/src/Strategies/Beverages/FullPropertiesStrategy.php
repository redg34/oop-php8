<?php
namespace App\Strategies\Beverages;

use App\Models\HotBeverage;

class FullPropertiesStrategy implements ListingStrategyInterface {
    public function listing(HotBeverage $beverage): string {
        $output = '';
        
        $output .= '<ul>';
        $output .= '<li>Origine : ' . $beverage->getOrigin() . '</li>';
        $output .= '<li>Type : ' . $beverage->getType() . '</li>';
        $output .= '<li>Prix : ' . $beverage->getPrice() . '</li>';
        $output .= '</ul>';
        
        return $output;
    }
}