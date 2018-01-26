<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 13:04
 */

namespace Kata\QualityCommands;

use Kata\Item\Item;

class DoubleDecreaseQualityCommand extends AbstractQualityCommand
{
    public function execute(Item $item)
    {
        $this->updateQuality($item, $item->quality - 2);
    }
}
