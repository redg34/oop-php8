<?php
namespace App\Strategies\Beverages;

use App\Models\HotBeverage;

class OriginPriceStrategy implements ListingStrategyInterface {
    public function listing(HotBeverage $beverage): string {
        $output = '';

        $output .= '<table>';
        $output .= '<thead>';
        $output .= '<tr>';
        $output .= '<th>Origine</th><th>Prix</th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        $output .= '<tr>';
        $output .= '<td>' . $beverage->getOrigin() . '</td><td>' . $beverage->getPrice() . '</td>';
        $output .= '</tr>';
        $output .= '</tbody>';
        $output .= '</table>';

        return $output;
    }
}