<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:31
 */

namespace Kata\Operations;

class OperationsStrategyBuilder
{
    public function build()
    {
        $operations = [];

        $operations['Aged Brie'] = new IncreaseOperation();
        $operations['Sulfuras, Hand of Ragnaros'] = new VoidOperation();
        $operations['Backstage passes to a TAFKAL80ETC concert'] = new BackstageOperation();
        $operations['default'] = new DefaultOperation();

        return new OperationsStrategy($operations);
    }
}
