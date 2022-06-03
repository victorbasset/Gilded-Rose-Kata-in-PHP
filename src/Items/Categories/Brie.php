<?php

namespace App\Items\Categories;

use App\Items\Item;

class Brie extends Item
{
    /**
     * @inheritdoc
     */
    protected function updateQuality()
    {
        // "Aged Brie" actually increases in Quality the older it gets.
        $this->quality += 1;

        if ($this->daysRemaining <= 0) {
            $this->quality += 1;
        }
    }
}