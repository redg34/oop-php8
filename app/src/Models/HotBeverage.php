<?php
namespace App\Models;

use App\Collections\Item;
use App\Strategies\Beverages\FullPropertiesStrategy;
use App\Strategies\Beverages\ListingStrategyInterface;

abstract class HotBeverage implements Item {
    /**
     * Type de café
     * 
     * @var string
     */
    protected $type;

    /**
     * Origine du café
     * 
     * @var string
     */
    protected $origin;

    /**
     * Prix au Kg
     * 
     * @var float
     */
    protected $price;


    /**
     * @var {ListingStrategyInterface} Interface d'affichage de la boisson chaude
     */
    protected $listingStrategy;

    public function __construct() {
        $this->listingStrategy = new FullPropertiesStrategy();    
    }

    abstract public function setType(string $type): self;

    public function setListingStrategy(ListingStrategyInterface $strategy): void {
        $this->listingStrategy = $strategy;
    }

    /**
     * @return string | null
     */
    public function getType(): ?string {
        return $this->type;
    }

    public function setOrigin(string $origin): self {
        $this->origin = $origin;

        return $this;
    }

    public function getOrigin(): ?string {
        return $this->origin;
    }

    public function setPrice(float $price): self {
        $this->price = $price;

        return $this;
    }

    public function getPrice(): ?float {
        return $this->price;
    }

    public function __toString() {
        return $this->listingStrategy->listing($this);
    }

}