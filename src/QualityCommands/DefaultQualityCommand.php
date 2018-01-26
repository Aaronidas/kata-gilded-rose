<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:47
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

class DefaultQualityCommand implements QualityCommand
{
    public function execute(ItemFacade $item)
    {
        $item->updateQuality($item->getQuality() - 1);
        if ($item->getSellIn() <= 0) {
            $item->updateQuality($item->getQuality() - 1);
        }
    }
}
