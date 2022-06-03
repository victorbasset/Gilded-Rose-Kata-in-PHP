<?php

namespace App;

use App\Items\Item;

class GildedRose
{
    /**
     * Create an item with the category, quality and sellIn passed in params.
     * @param $name
     * @param $quality
     * @param $sellIn
     * @return Item|mixed
     */
    public static function of($name, $quality, $sellIn) {
        $class = Item::ITEMS_CATEGORIES[$name] ?? Item::class;
        return new $class($quality, $sellIn);
    }
}
