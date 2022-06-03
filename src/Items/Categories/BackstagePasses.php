<?php

namespace App\Items\Categories;

use App\Items\Item;

class BackstagePasses extends Item
{
    /**
     * @inheritdoc
     */
    protected function updateQuality()
    {
        // Increases in Quality as it's SellIn value approaches.
        $this->quality += 1;

        // Quality increases by 2 when there are 10 days or less and by 3 when there are 5 days or less.
        if ($this->sellIn <= 10) {
            $this->quality += 1;
        }

        if ($this->sellIn <= 5) {
            $this->quality += 1;
        }

        // Quality drops to 0 after the concert.
        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }
    }
}