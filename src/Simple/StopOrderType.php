<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class StopOrderType implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $stopOrderType;

    public function __construct(string $stopOrderType)
    {
        $this->stopOrderType = $stopOrderType;
    }

    public function value(): string
    {
        return $this->stopOrderType;
    }
}