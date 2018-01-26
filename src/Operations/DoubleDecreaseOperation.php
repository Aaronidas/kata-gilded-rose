<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 13:04
 */

namespace Kata\Operations;

use Kata\Item\Item;

class DoubleDecreaseOperation extends AbstractOperation
{
    public function execute(Item $item)
    {
        $this->updateQuality($item, $item->quality - 2);
    }
}
