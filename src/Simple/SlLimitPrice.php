<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SlLimitPrice implements SimpleInterface
{
    use TraitSimple;
    
    private string $slLimitPrice;

    public function __construct(string $slLimitPrice)
    {
        $this->slLimitPrice = $slLimitPrice;
    }

    public function value(): string
    {
        return $this->slLimitPrice;
    }
}