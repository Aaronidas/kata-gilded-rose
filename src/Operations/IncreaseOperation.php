<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:48
 */

namespace Kata\Operations;

use Kata\Item\Item;

class IncreaseOperation extends AbstractOperation
{
    public function execute(Item $item)
    {
        $this->updateQuality($item, $item->quality + 1);
    }
}
