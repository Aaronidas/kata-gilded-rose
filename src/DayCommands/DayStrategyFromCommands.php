<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:55
 */

namespace Kata\DayCommands;

use Kata\Item\ItemFacade;

class DayStrategyFromCommands implements DayStrategy
{
    private $operations;

    public function __construct(array $operations)
    {
        $this->operations = $operations;
    }

    public function execute(ItemFacade $item)
    {
        if (array_key_exists($item->getName(), $this->operations)) {
            $this->operations[$item->getName()]->execute($item);
        } else {
            $this->operations['default']->execute($item);
        }
    }
}
