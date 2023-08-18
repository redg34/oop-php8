<?php
namespace App\Patterns\Creational\Builder\Impl;

use App\Patterns\Creational\AbstractFactory\Menu\MainCourse;
use App\Patterns\Creational\AbstractFactory\Menu\MenuInformation;
use App\Patterns\Creational\Builder\MenuBuilder;

final class MainCourseBuilderImpl implements MenuBuilder {
    /**
     * 
     * @var array<MainCourse>
     */
    private $pieces = [];
    
    public function addPiece(MenuInformation $piece): self {
        if ($piece instanceof MainCourse && count($this->pieces) === 0) {
            array_push($this->pieces, $piece);
        }
        
        return $this;
    }
    
    public function build(): float {
        if (count($this->pieces) > 0 ) {
            $total = 0;
            foreach($this->pieces as $piece) {
                $total += $piece->getPrice();
            }
            return $total;
        }
        throw new \Exception('Not enough data to compute total');
    }
}

