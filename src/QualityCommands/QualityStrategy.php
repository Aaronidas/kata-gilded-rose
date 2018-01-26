<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 14:21
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

interface QualityStrategy
{
    public function execute(ItemFacade $itemFacade);
}
