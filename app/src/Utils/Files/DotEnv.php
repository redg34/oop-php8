<?php
namespace App\Utils\Files;

/**
 * DotEnv.php
 * @author DaCoDeMaNiaK <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 * 
 * Read .env file at root app to store datas in $_ENV global
 */
final class DotEnv extends File {
    private static $rootDir = __DIR__ . '/../../../';

    public static function load(): void {
        self::$filePath = self::$rootDir . '.env';
        self::read();

        // Loop over lines to parse every line
        foreach (self::$lines as $line) {
            // Exclude comment lines
            if (strpos(trim($line), '#') === 0) continue;

            // Unstructure array to vars
            list($name, $value) = explode('=', $line, 2);

            $name = trim($name);
            $value = trim($value);

            // Store name / value pair both to PHP env variables, $_ENV and $_SERVER globals
            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}