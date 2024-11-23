<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TakeProfit implements SimpleInterface
{
    use TraitSimple;
    
    private string $takeProfit;

    public function __construct(string $takeProfit)
    {
        $this->takeProfit = $takeProfit;
    }

    public function value(): string
    {
        return $this->takeProfit;
    }
}