<?php

namespace App;

use App\Items\Item;
use App\Items\ItemCategory;

class GildedRose
{
    /**
     * Create an item with the category, quality and daysRemaining passed in params.
     * @param string $name
     * @param int $quality
     * @param int $daysRemaining
     * @return Item|mixed
     */
    public static function of(string $name, int $quality, int $daysRemaining)
    {
        $class = ItemCategory::$links[$name] ?? Item::class;
        return new $class($quality, $daysRemaining);
    }
}
