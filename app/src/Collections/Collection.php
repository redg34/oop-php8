<?php
namespace App\Collections;

use App\Models\HotBeverage;
use App\Strategies\Beverages\AsTableRowStrategy;

abstract class Collection implements Collectable {
    protected $collection;

    /**
     * @var \App\Strategies\Beverages\ListingStrategyInterface
     */
    protected $listingStrategy;

    public function __construct() {
        $this->collection = [];
    }

    abstract public function add(Item $item): self;

    abstract public function remove(Item $item): self;

    abstract public function replace(Item $item): self;
}