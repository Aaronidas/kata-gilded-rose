<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:55
 */

namespace Kata\DayCommands;

use Kata\Item\Item;
use Symfony\Component\VarDumper\VarDumper;

class DayStrategy
{
    private $operations;

    public function __construct(array $operations)
    {
        $this->operations = $operations;
    }

    public function execute(Item $item)
    {
        if (array_key_exists($item->name, $this->operations)) {
            $this->operations[$item->name]->execute($item);
        } else {
            $this->operations['default']->execute($item);
        }
    }
}
