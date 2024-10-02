<?php


use Seleda\BybitTypes\PositionIdx;
use PHPUnit\Framework\TestCase;

class PositionIdxTest extends TestCase
{
    public function test1()
    {
        $positionIdx = new PositionIdx(2);
        $this->assertEquals(2, $positionIdx->ghj);
    }
}
