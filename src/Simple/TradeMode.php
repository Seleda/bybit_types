<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;

class TradeMode implements SimpleInterface
{
    use TraitSimple;
    
    public readonly int $tradeMode;

    public function __construct(int $tradeMode)
    {
        $this->tradeMode = $tradeMode;
    }

    public function value(): int
    {
        return $this->tradeMode;
    }
}