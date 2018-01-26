<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:49
 */

namespace Kata\DayCommands;

use Kata\Item\ItemFacade;

interface DayCommand
{
     public function execute(ItemFacade $item);
}
