<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Patterns\Creational\AbstractFactory\Menu\Impl\MainCourseImpl;
use App\Patterns\Creational\AbstractFactory\Menu\Products\Pizza;
use App\Patterns\Creational\Builder\Impl\MainCourseBuilderImpl;

final class MenuBuilderTest extends TestCase {
    public function testBuildASinglePiece(): void {
        $mainCourseFactory = new MainCourseImpl();
        
        $pizza = $mainCourseFactory->createMainCourse(Pizza::class);
        
        $builder = new MainCourseBuilderImpl();
        $builder->addPiece($pizza);
        $builder->addPiece($pizza);
        
        $total = $builder->build();
        
        $this->assertEquals(15.50, $total);
        
    }
}