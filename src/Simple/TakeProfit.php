<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TakeProfit implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $takeProfit;

    public function __construct(string $takeProfit)
    {
        $this->takeProfit = $takeProfit;
    }

    public function value(): string
    {
        return $this->takeProfit;
    }
}