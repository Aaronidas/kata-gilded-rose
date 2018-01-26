<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:47
 */

namespace Kata\QualityCommands;

use Kata\Item\Item;

class DefaultQualityCommand extends AbstractQualityCommand
{
    public function execute(Item $item)
    {
        $this->updateQuality($item, $item->quality - 1);
        if ($item->sell_in <= 0) {
            $this->updateQuality($item, $item->quality - 1);
        }
    }
}