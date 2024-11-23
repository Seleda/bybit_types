<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class ClosedPnl implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $closedPnl;

    public function __construct(string $closedPnl)
    {
        $this->closedPnl = $closedPnl;
    }

    public function value(): string
    {
        return $this->closedPnl;
    }
}