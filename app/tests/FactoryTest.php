<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Patterns\Creational\Factory\Impl\BicycleCreatorImpl;


final class FactoryTest extends TestCase {
    public function testBicycleVelocity(): void {
        $creator = new BicycleCreatorImpl();
        
        $expectedResult = 60 / 0.3;
        
        $this->assertEquals($expectedResult, $creator->deliveryTime());
        
    }
}