<?php
namespace App\Utils\Files;

/**
 * File
 * @author DaCoDeMaNiaK <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 * 
 * Abstract class for reading or writing files
 */
abstract class File {
    /**
     * @property array
     * 
     * Array of lines of the parsed file
     */
    protected static $lines = [];

    /**
     * @property string
     * 
     * File path to read or write
     */
    protected static $filePath;

    protected static function read(): void {
        if (!file_exists(self::$filePath)) {
            throw new \RuntimeException(self::$filePath . ' doesn\'t exists or has moved');
        }

        if (is_dir(self::$filePath)) {
            throw new \RuntimeException(self::$filePath . ' is not a file!');
        }

        if (!is_readable(self::$filePath)) {
            throw new \RuntimeException(self::$filePath . ' is not readable!');
        }

        self::$lines = file(self::$filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
}