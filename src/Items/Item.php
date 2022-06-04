<?php

namespace App\Items;

class Item
{
    /**
     * Quality minimum of an item.
     * @var int
     */
    private const QUALITY_MIN = 0;

    /**
     * Quality maximum of an item.
     * @var int
     */
    private const QUALITY_MAX = 50;

    /**
     * Name of the item.
     * @var string
     */
    public const name = 'normal';

    /**
     * All items have a Quality value which denotes how valuable the item is.
     * @var int
     */
    public int $quality;

    /**
     * All items have a DaysRemaining value which denotes the number of days we have to sell the item.
     * @var int
     */
    public int $daysRemaining;

    /**
     * @param int $quality
     * @param int $daysRemaining
     */
    public function __construct(int $quality, int $daysRemaining)
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

        // At the end of each day our system lowers DaysRemaining values for every item.
        $this->daysRemaining -= 1;

        // The Quality of an item is never negative.
        if ($this->quality <= self::QUALITY_MIN) {
            $this->quality = self::QUALITY_MIN;
        }

        // The Quality of an item is never more than 50.
        if ($this->quality > self::QUALITY_MAX) {
            $this->quality = self::QUALITY_MAX;
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