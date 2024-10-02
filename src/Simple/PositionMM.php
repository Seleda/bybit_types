<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionMM implements SimpleInterface
{
    private string $positionMM;

    public function __construct(string $positionMM)
    {
        $this->positionMM = $positionMM;
    }

    public function value(): string
    {
        return $this->positionMM;
    }
}