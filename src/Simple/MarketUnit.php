<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class MarketUnit implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $marketUnit;

    public function __construct(string $marketUnit)
    {
        $this->marketUnit = $marketUnit;
    }

    public function value(): string
    {
        return $this->marketUnit;
    }
}