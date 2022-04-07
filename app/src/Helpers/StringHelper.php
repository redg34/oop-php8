<?php
namespace App\Helpers;

class StringHelper {
    public static function upperFirstLetter(string $source): string {
        $firstLetter = substr($source, 0, 1);
        $next = substr($source, 1, strlen($source));

        return strtoupper($firstLetter).strtolower($next);
    }
}