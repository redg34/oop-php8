<?php
namespace App\Models;

use App\Collections\Item;
use \App\Helpers\StringHelper;
use \App\Models\HotBeverage;

final class Coffee extends HotBeverage {
    private static $types = ['arabica', 'robusta'];

    /**
     * @param {string} Type de café
     * @return Coffee
     */
    public function setType(string $type): self {
        if ($this->_isACorrectType($type)) {
            $this->type = StringHelper::upperFirstLetter($type);

            return $this;
        }
        throw new \Exception('Le type ' . $type . ' n\'est pas autorisé dans ce contexte');
    }

    private function _isACorrectType(string $type): bool {
        return in_array(strtolower($type), self::$types);
    }
}