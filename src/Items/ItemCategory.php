<?php

namespace App\Items;

use App\Items\Categories\Brie;
use App\Items\Categories\Backstage;
use App\Items\Categories\Conjured;
use App\Items\Categories\Sulfuras;

class ItemCategory
{
    /**
     * Items names linked to is class.
     * @var array
     */
    public const links = [
        'Aged Brie' => Brie::class,
        'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
        'Conjured Mana Cake' => Conjured::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
    ];
}