<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:22
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

class BackstageQualityCommand implements QualityCommand
{
    public function execute(ItemFacade $item)
    {
        if ($item->getSellIn() <= 0) {
            $item->updateQuality(0);
            return;
        }

        $item->updateQuality($item->getQuality() + 1);

        if ($item->getSellIn() <= 10) {
            $item->updateQuality($item->getQuality() + 1);
        }

        if ($item->getSellIn() <= 5) {
            $item->updateQuality($item->getQuality() + 1);
        }
    }
}
