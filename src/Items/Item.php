<?php

namespace App\Items;

use App\Items\Categories\AgedBrie;
use App\Items\Categories\BackstagePasses;
use App\Items\Categories\Conjured;
use App\Items\Categories\Sulfuras;

class Item
{
    /**
     * Items names linked to is class.
     * @var array
     */
    public const ITEMS_CATEGORIES = [
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePasses::class,
        'Conjured Mana Cake' => Conjured::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
    ];

    /**
     * All items have a Quality value which denotes how valuable the item is.
     * @var int
     */
    public int $quality;

    /**
     * All items have a SellIn value which denotes the number of days we have to sell the item.
     * @var int
     */
    public int $daysRemaining;

    /**
     * @param $quality
     * @param $daysRemaining
     */
    public function __construct($quality, $daysRemaining)
    {
        $this->quality = $quality;
        $this->daysRemaining = $daysRemaining;
    }

    /**
     * Pass one day in time.
     * @return void
     */
    public function tick()
    {
        $this->updateQuality();

        // At the end of each day our system lowers SellIn values for every item.
        $this->daysRemaining -= 1;

        // The Quality of an item is never negative.
        if ($this->quality <= 0) {
            $this->quality = 0;
        }

        // The Quality of an item is never more than 50.
        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    /**
     * Update the "quality" attribute.
     */
    protected function updateQuality()
    {
        // At the end of each day our system lowers Quality values for every item.
        $this->quality -= 1;

        // Once the sell by date has passed, Quality degrades twice as fast
        if ($this->daysRemaining <= 0) {
            $this->quality -= 1;
        }
    }
}