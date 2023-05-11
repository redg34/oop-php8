<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Utils\Files\DotEnv;

final class DotEnvTest extends TestCase {
    public function testMariaDbVarsAvailableFromServerEnv(): void {
        $mariaDbVars = [
            'MARIADB_DATABASE',
            'MARIADB_USER',
            'MARIADB_PASSWORD'
        ];

        DotEnv::load();
        
        $hasMariaDbEnv = true;

        foreach($mariaDbVars as $mariaDbVar) {
            if (!array_key_exists($mariaDbVar, $_SERVER)) {
                $hasMariaDbEnv = false;
            }
        }
        $this->assertSame(true, $hasMariaDbEnv);
    }

    public function testMariaDbVarsAvailableFromEnv(): void {
        $mariaDbVars = [
            'MARIADB_DATABASE',
            'MARIADB_USER',
            'MARIADB_PASSWORD'
        ];

        DotEnv::load();
        
        $hasMariaDbEnv = true;

        foreach($mariaDbVars as $mariaDbVar) {
            if (!array_key_exists($mariaDbVar, $_ENV)) {
                $hasMariaDbEnv = false;
            }
        }
        $this->assertSame(true, $hasMariaDbEnv);
    }

    public function testMariaDbVarsAvailableFromEnvVars(): void {
        $mariaDbVars = [
            'MARIADB_DATABASE',
            'MARIADB_USER',
            'MARIADB_PASSWORD'
        ];

        DotEnv::load();
        
        $hasMariaDbEnv = true;

        foreach($mariaDbVars as $mariaDbVar) {
            if (!getenv($mariaDbVar)) {
                $hasMariaDbEnv = false;
            }
        }
        $this->assertSame(true, $hasMariaDbEnv);
    }
}