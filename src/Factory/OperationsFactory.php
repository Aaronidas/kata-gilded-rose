<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:44
 */

namespace Kata\Factory;

use Kata\DayCommands\DayStrategy;
use Kata\QualityCommands\QualityStrategy;

abstract class OperationsFactory
{
    public abstract function getQualityOperationsStrategy(): QualityStrategy;

    public abstract function getDaysOperationStrategy(): DayStrategy;
}
