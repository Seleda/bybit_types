<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class AvgPrice implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $avgPrice;

    public function __construct(string $avgPrice)
    {
        $this->avgPrice = $avgPrice;
    }

    public function value(): string
    {
        return $this->avgPrice;
    }
}