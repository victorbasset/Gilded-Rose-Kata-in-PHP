<?php

namespace App\Items\Categories;

use App\Items\Item;

class Sulfuras extends Item
{
    /**
     * @inheritdoc
     */
    public function tick()
    {
        // "Sulfuras", being a legendary item, never has to be sold or decreases in Quality
    }
}