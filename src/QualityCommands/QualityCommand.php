<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:49
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

interface QualityCommand
{
    public function execute(ItemFacade $item);
}
