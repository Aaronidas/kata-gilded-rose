<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 11:49
 */

namespace Kata\Operations;

use Kata\Item\Item;

abstract class AbstractOperation implements Operation
{

    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    public abstract function execute(Item $item);

    protected function updateQuality(Item $item, $quality)
    {
        $item->quality = min(self::MAX_QUALITY, max(self::MIN_QUALITY, $quality));
    }
}
