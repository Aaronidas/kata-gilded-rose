<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:38
 */

namespace Kata\QualityCommands;

use Kata\Item\ItemFacade;

class QualityStrategy
{
    /**
     * @var array
     */
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
