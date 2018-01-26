<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:21
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

class VoidQualityCommand implements QualityCommand
{
    public function execute(ItemFacade $item)
    {
        // void
    }
}
