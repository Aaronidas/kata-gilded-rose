<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:21
 */

namespace Kata\QualityCommands;

use Kata\Item\Item;

class VoidQualityCommand extends AbstractQualityCommand
{
    public function execute(Item $item)
    {
        // void
    }
}
