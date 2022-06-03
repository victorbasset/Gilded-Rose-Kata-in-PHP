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
    public static array $links = [
        Brie::name => Brie::class,
        Backstage::name => Backstage::class,
        Conjured::name => Conjured::class,
        Sulfuras::name => Sulfuras::class,
    ];
}