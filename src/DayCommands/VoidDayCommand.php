<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:50
 */

namespace Kata\DayCommands;

use Kata\Item\Item;

class VoidDayCommand implements DayCommand
{
    public function execute(Item $item)
    {
        // void
    }
}
