<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:47
 */

namespace Kata\Factory;

use Kata\DayCommands\DayStrategyBuilder;
use Kata\Operations\OperationsStrategyBuilder;

class BasicFactory extends OperationsFactory
{
    public function getQualityOperationsStrategy()
    {
        return (new OperationsStrategyBuilder())->build();
    }

    public function getDaysOperationStrategy()
    {
        return (new DayStrategyBuilder())->build();
    }
}
