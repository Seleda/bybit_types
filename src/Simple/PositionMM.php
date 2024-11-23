<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionMM implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $positionMM;

    public function __construct(string $positionMM)
    {
        $this->positionMM = $positionMM;
    }

    public function value(): string
    {
        return $this->positionMM;
    }
}