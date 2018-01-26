<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:22
 */

namespace Kata\Operations;

use Kata\Item\Item;

class BackstageOperation extends AbstractOperation
{
    public function execute(Item $item)
    {
        if ($item->sell_in <= 0) {
            $this->updateQuality($item, 0);
            return;
        }

        $this->updateQuality($item, $item->quality + 1);

        if ($item->sell_in <= 10) {
            $this->updateQuality($item, $item->quality + 1);
        }

        if ($item->sell_in <= 5) {
            $this->updateQuality($item, $item->quality + 1);
        }
    }
}
