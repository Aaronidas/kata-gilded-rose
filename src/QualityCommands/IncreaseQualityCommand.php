<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:48
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

class IncreaseQualityCommand implements QualityCommand
{
    public function execute(ItemFacade $item)
    {
        $item->updateQuality($item->getQuality() + 1);
    }
}
