<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 26/01/18
 * Time: 13:22
 */

namespace Kata\Item;

use Kata\Factory\OperationsFactory;

class UpdateItemStrategy
{
    private static $instance;
    private $daysStrategy;
    private $qualityStrategy;

    private function __construct(OperationsFactory $factory)
    {
        $this->daysStrategy = $factory->getDaysOperationStrategy();
        $this->qualityStrategy = $factory->getQualityOperationsStrategy();
    }

    public static function instance(OperationsFactory $factory)
    {
        if (null === self::$instance) {
            self::$instance = new self($factory);
        }

        return self::$instance;
    }

    public function execute(ItemFacade $itemFacade)
    {
        $this->daysStrategy->execute($itemFacade);
        $this->qualityStrategy->execute($itemFacade);
    }
}
