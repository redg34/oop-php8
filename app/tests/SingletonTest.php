<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Patterns\Creational\Singleton\Singleton;

final class SingletonTest extends TestCase {
    public function testMainCourseReturnAPizza(): void {
        $firstCall = Singleton::getInstance();
        
        $secondCall = Singleton::getInstance();
        
        $this->assertEquals(1, $secondCall->getCounter());
        $this->assertSame($firstCall, $secondCall);
        
    }
}