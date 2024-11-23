<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TpLimitPrice implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $tpLimitPrice;

    public function __construct(string $tpLimitPrice)
    {
        $this->tpLimitPrice = $tpLimitPrice;
    }

    public function value(): string
    {
        return $this->tpLimitPrice;
    }
}