<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Patterns\Creational\AbstractFactory\Menu\Impl\MainCourseImpl;
use App\Patterns\Creational\AbstractFactory\Menu\Products\Pizza;

final class AbstractFactoryTest extends TestCase {
    public function testMainCourseReturnAPizza(): void {
        $mainCourseFactory = new MainCourseImpl();
        
        $pizza = $mainCourseFactory->createMainCourse(Pizza::class);
        
        $this->assertInstanceOf(Pizza::class, $pizza);
        
    }
}