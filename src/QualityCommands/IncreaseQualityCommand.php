<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:48
 */

namespace Kata\QualityCommands;

use Kata\Item\Item;

class IncreaseQualityCommand extends AbstractQualityCommand
{
    public function execute(Item $item)
    {
        $this->updateQuality($item, $item->quality + 1);
    }
}
