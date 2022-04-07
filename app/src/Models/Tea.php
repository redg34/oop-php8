<?php
namespace App\Models;

use App\Collections\Item;
use \App\Models\HotBeverage;
use \App\Helpers\StringHelper;

final class Tea extends HotBeverage {

    public function setType(string $type): self {
        $this->type = StringHelper::upperFirstLetter($type);

        return $this;
    }
}