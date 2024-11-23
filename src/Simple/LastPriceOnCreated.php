<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LastPriceOnCreated implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $lastPriceOnCreated;

    public function __construct(string $lastPriceOnCreated)
    {
        $this->lastPriceOnCreated = $lastPriceOnCreated;
    }

    public function value(): string
    {
        return $this->lastPriceOnCreated;
    }
}