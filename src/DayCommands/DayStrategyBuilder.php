<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:51
 */

namespace Kata\DayCommands;

class DayStrategyBuilder
{
    public function build()
    {
        $commands = [];

        $commands['Sulfuras, Hand of Ragnaros'] = new VoidDayCommand();
        $commands['default'] = new DecreaseDayCommand();

        return new DayStrategyFromCommands($commands);
    }
}
