<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionValue implements SimpleInterface
{
    use TraitSimple;
    
    private string $positionValue;

    public function __construct(string $positionValue)
    {
        $this->positionValue = $positionValue;
    }

    public function value(): string
    {
        return $this->positionValue;
    }
}