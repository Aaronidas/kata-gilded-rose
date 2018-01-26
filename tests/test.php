<?php

namespace Kata\Tests;

use Kata\GildedRose;
use PHPUnit\Framework\TestCase;
use Symfony\Component\VarDumper\VarDumper;

class GildedRoseTest extends TestCase {

    /**
     * @test
     */
    function testFoo() {
        $items = array(new \Kata\Item\Item("foo", 0, 0));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("foo", $items[0]->name);
    }

    /**
     * @test
     */
    public function given_normal_item_when_update_quaylity_then_decrease_one()
    {
        $name = "+5 Dexterity Vest";
        $sell_in = 10;
        $quality = 20;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($sell_in - 1, $items[0]->sell_in);
        $this->assertEquals($quality - 1, $items[0]->quality);
    }

    /**
     * @test
     */
    public function given_sellin_item_when_update_quaylity_then_decrease_double()
    {
        $name = "+5 Dexterity Vest";
        $sell_in = 0;
        $quality = 20;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($quality - 2, $items[0]->quality);
    }

    /**
     * @test
     */
    public function given_zero_quality_item_when_update_quality_then_no_decrease()
    {
        $name = "+5 Dexterity Vest";
        $sell_in = 0;
        $quality = 0;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals(0, $items[0]->quality);
    }

    /**
     * @test
     */
    public function given_agedbrie_item_when_update_quality_then_increment()
    {
        $name = "Aged Brie";
        $sell_in = 10;
        $quality = 10;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($quality + 1, $items[0]->quality);
    }

//    /**
//     * @test
//     */
//    public function given_more_than_50_quality_item_when_update_quality_then_set_50_quality()
//    {
//        $name = "Aged Brie";
//        $sell_in = 10;
//        $quality = 60;
//        $items = $this->updateQuality($name, $sell_in, $quality);
//        $this->assertEquals(50, $items[0]->quality);
//    }

    /**
     * @test
     */
    public function given_legendary_item_when_update_quality_then_none()
    {
        $name = "Sulfuras, Hand of Ragnaros";
        $sell_in = 10;
        $quality = 50;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($quality, $items[0]->quality);
        $this->assertEquals($sell_in, $items[0]->sell_in);
    }

    /** @test */
    public function given_more_than_10_days_backstage_passes_when_update_then_increase()
    {
        $name = "Backstage passes to a TAFKAL80ETC concert";
        $sell_in = 20;
        $quality = 30;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($quality + 1, $items[0]->quality);
    }

    /** @test */
    public function given_less_than_10_days_backstage_passes_when_update_then_increase_double()
    {
        $name = "Backstage passes to a TAFKAL80ETC concert";
        $sell_in = 10;
        $quality = 30;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($quality + 2, $items[0]->quality);
    }

    /** @test */
    public function given_less_than_5_days_backstage_passes_when_update_then_increase_triple()
    {
        $name = "Backstage passes to a TAFKAL80ETC concert";
        $sell_in = 5;
        $quality = 30;
        $items = $this->updateQuality($name, $sell_in, $quality);
        $this->assertEquals($quality + 3, $items[0]->quality);
    }

    /**
     * @param $name
     * @param $sell_in
     * @param $quality
     *
     * @return array
     */
    private function updateQuality($name, $sell_in, $quality)
    {
        $items = array(new \Kata\Item\Item($name, $sell_in, $quality));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();

        return $items;
    }
}
