<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 14:21
 */

namespace Kata\DayCommands;

use Kata\Item\ItemFacade;

interface DayStrategy
{
    public function execute(ItemFacade $itemFacade);
}
