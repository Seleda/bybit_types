<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionStatus implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $positionStatus;

    public function __construct(string $positionStatus)
    {
        $this->positionStatus = $positionStatus;
    }

    public function value(): string
    {
        return $this->positionStatus;
    }
}