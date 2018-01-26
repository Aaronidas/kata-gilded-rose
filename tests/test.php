<?php

namespace Kata\Tests;

use Kata\GildedRose;
use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase {

    /**
     * @test
     */
    function testFoo() {
        $items = array(new \Kata\Item\Item("foo", 0, 0));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("fixme", $items[0]->name);
    }

}
