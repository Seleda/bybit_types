<?php


namespace Seleda\BybitTypes\Simple;


use Seleda\BybitTypes\SimpleInterface;

class PositionIdx implements SimpleInterface
{
    private int $positionIdx;

    public function __construct(int $positionIdx)
    {
        $this->positionIdx = $positionIdx;
    }

    public function value(): int
    {
        return $this->positionIdx;
    }
}