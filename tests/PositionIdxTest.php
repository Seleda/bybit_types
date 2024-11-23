<?php


use Seleda\BybitTypes\Simple\PositionIdx;
use PHPUnit\Framework\TestCase;

class PositionIdxTest extends TestCase
{
    public function test1()
    {
        $positionIdx = new PositionIdx(2);
        $this->assertTrue(2 === $positionIdx->value);
    }
}
