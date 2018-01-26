<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 13:09
 */

namespace Kata\Item;

class ItemFacade
{
    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    /**
     * @var Item
     */
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function getName()
    {
        return $this->item->name;
    }

    public function getSellIn()
    {
        return $this->item->sell_in;
    }

    public function getQuality()
    {
        return $this->item->quality;
    }

    public function updateQuality($quality)
    {
        $this->item->quality = min(self::MAX_QUALITY, max(self::MIN_QUALITY, $quality));
    }

    public function decreaseSellIn()
    {
        $this->item->sell_in--;
    }
}
