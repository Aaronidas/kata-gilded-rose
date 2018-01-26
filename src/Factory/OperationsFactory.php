<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 12:44
 */

namespace Kata\Factory;

abstract class OperationsFactory
{
    public abstract function getQualityOperationsStrategy();

    public abstract function getDaysOperationStrategy();
}
