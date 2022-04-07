<?php
namespace App\Collections;

use App\Models\Coffee;
use App\Models\HotBeverage;
use App\Strategies\Beverages\AsTableRowStrategy;

class HotBeverageCollection extends Collection {

    public function __construct() {
        parent::__construct();
        $this->listingStrategy = new AsTableRowStrategy();
    }
    public function add(Item $beverage): self {
        $beverage->setListingStrategy(new AsTableRowStrategy());
        array_push($this->collection, $beverage);

        return $this;
    }

    public function remove(Item $beverage): self {
        return $this;
    }

    public function replace(Item $beverage): self {
        return $this;
    }

    public function total(): float {
        $total = 0;
        foreach($this->collection as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function __toString() {
        $output = '';

        $output .= '<table>';
        $output .= '<thead>';
        $output .= '<tr><th>Type</th><th>Origine</th><th>Prix</th></tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        // Boucle sur les boissons
        foreach($this->collection as $beverage) {
            $output .= $beverage;
        }
        $output .= '</tbody>';
        $output .= '</table>';

        return $output;
    }
}