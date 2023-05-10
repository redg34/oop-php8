<?php
namespace App\Http\Foundation;

/**
 * Parse query string and sanitize entries
 * @author DaCoDeMaNiaK <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 */

 class QueryString {
    /**
     * @property array
     * 
     * Associative array containing sanitized params
     */
    private $queryPairs = [];

    public function __construct() {
        $this->_parseQueryString();

        // Don't forget to clear $_GET array
        $_GET = [];
    }

    /**
     * Returns the value associated to a query string key if exists
     * @param string
     * @return string | null
     */
    public function get(string $key): ?string {
        if (array_key_exists($key, $this->queryPairs)) {
            return $this->queryPairs[$key];
        }
    }
    
    /**
     * Returns an associative array containing
     *  keys as param name,
     *  values as param value
     * 
     * @return void
     */
    private function _parseQueryString(): void {
        $queryParts = [];
        $queryParts = explode('&', $_SERVER['QUERY_STRING']);

        // Loop over queryParts to feed final hashmap
        foreach($queryParts as $queryPart) {
            $map = explode('=', $queryPart);

            // i.e <script> => &lt;script&gt;
            $this->queryPairs[$map[0]] = htmlentities($map[1]);
        }
    }
 }