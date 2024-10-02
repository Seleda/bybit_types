<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class ClosedPnl implements SimpleInterface
{
    private string $closedPnl;

    public function __construct(string $closedPnl)
    {
        $this->closedPnl = $closedPnl;
    }

    public function value(): string
    {
        return $this->closedPnl;
    }
}