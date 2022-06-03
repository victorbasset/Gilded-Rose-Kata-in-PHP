<?php

namespace App;

use App\Items\Item;
use App\Items\ItemCategory;

class GildedRose
{
    /**
     * Create an item with the category, quality and daysRemaining passed in params.
     * @param $name
     * @param $quality
     * @param $daysRemaining
     * @return Item|mixed
     */
    public static function of($name, $quality, $daysRemaining) {
        $class = ItemCategory::links[$name] ?? Item::class;
        return new $class($quality, $daysRemaining);
    }
}
