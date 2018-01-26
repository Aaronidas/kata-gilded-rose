<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:50
 */

namespace Kata\DayCommands;

use Kata\Item\ItemFacade;

class VoidDayCommand implements DayCommand
{
    public function execute(ItemFacade $item)
    {
        // void
    }
}
