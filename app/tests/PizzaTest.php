<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Entities\Pizza;

class PizzaTest extends TestCase {
    public function testSetSize() {
        $pizza = new Pizza();
        $pizza->setSize('large');
        
        $this->assertEquals('large', $pizza->getSize());
    }

    public function testAddTopping() {
        $pizza = new Pizza();
        $pizza->addTopping('cheese');
        $pizza->addTopping('pepperoni');

        $this->assertCount(2, $pizza->getToppings());
    }
}