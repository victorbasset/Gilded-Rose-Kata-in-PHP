<?php

namespace App\Items\Categories;

use App\Items\Item;

class Backstage extends Item
{
    /**
     * @inheritdoc
     */
    public const name = 'Backstage passes to a TAFKAL80ETC concert';

    /**
     * @inheritdoc
     */
    protected function updateQuality()
    {
        // Increases in Quality as it's DaysRemaining value approaches.
        $this->quality += 1;

        // Quality increases by 2 when there are 10 days or less.
        if ($this->daysRemaining <= 10) {
            $this->quality += 1;
        }

        // Quality increases by 3 when there are 5 days or less.
        if ($this->daysRemaining <= 5) {
            $this->quality += 1;
        }

        // Quality drops to 0 after the concert.
        if ($this->daysRemaining <= 0) {
            $this->quality = 0;
        }
    }
}