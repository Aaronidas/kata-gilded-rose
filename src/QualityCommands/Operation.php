<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:47
 */

namespace Kata\QualityCommands;

use Kata\Item\Item;

interface Operation
{
    public function execute(Item $item);
}
