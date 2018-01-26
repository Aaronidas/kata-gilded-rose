<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:47
 */

namespace Kata\Factory;

use Kata\DayCommands\DayStrategy;
use Kata\DayCommands\DayStrategyBuilder;
use Kata\QualityCommands\OperationsStrategyBuilder;
use Kata\QualityCommands\QualityStrategy;

class BasicFactory extends OperationsFactory
{
    public function getQualityOperationsStrategy(): QualityStrategy
    {
        return (new OperationsStrategyBuilder())->build();
    }

    public function getDaysOperationStrategy(): DayStrategy
    {
        return (new DayStrategyBuilder())->build();
    }
}
