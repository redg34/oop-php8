<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\Builder\PizzaBuilder;
use App\Entities\Pizza;



class PizzaBuilderTest extends TestCase {
    public function testBuild() {
        $pizzaBuilder = new PizzaBuilder();
        $pizza = $pizzaBuilder->setSize('large')
                              ->addTopping('cheese')
                              ->addTopping('pepperoni')
                              ->build();

        $this->assertInstanceOf(Pizza::class, $pizza);
        $this->assertEquals('large', $pizza->getSize());
        $this->assertCount(2, $pizza->getToppings());
    }
}

