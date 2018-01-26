<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:31
 */

namespace Kata\QualityCommands;

class OperationsStrategyBuilder
{
    public function build()
    {
        $operations = [];

        $operations['Aged Brie'] = new IncreaseQualityCommand();
        $operations['Sulfuras, Hand of Ragnaros'] = new VoidQualityCommand();
        $operations['Backstage passes to a TAFKAL80ETC concert'] = new BackstageQualityCommand();
        $operations['Conjured Mana Cake'] = new DoubleDecreaseQualityCommand();
        $operations['default'] = new DefaultQualityCommand();

        return new QualityStrategyFromCommands($operations);
    }
}
