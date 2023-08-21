<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\Factory\PizzaBuilderFactory;
use App\Patterns\Creational\Builder\PizzaBuilder;


class PizzaBuilderFactoryTest extends TestCase {
    public function testCreatePizzaBuilder() {
        $pizzaBuilder = PizzaBuilderFactory::createPizzaBuilder();
        
        $this->assertInstanceOf(PizzaBuilder::class, $pizzaBuilder);
    }
}

