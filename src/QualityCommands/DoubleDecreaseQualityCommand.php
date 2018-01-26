<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 13:04
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

class DoubleDecreaseQualityCommand implements QualityCommand
{
    public function execute(ItemFacade $item)
    {
        $item->updateQuality($item->getQuality() - 2);
    }
}
