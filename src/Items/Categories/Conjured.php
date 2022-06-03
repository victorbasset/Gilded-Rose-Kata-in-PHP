<?php

namespace App\Items\Categories;

use App\Items\Item;

class Conjured extends Item
{
    /**
     * @inheritdoc
     */
    public const name = 'Conjured Mana Cake';

    /**
     * @inheritdoc
     */
    protected function updateQuality()
    {
        // "Conjured" items degrade in Quality twice as fast as normal items.
        $this->quality -= 2;

        if ($this->daysRemaining <= 0) {
            $this->quality -= 2;
        }
    }
}