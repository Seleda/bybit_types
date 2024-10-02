<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class UnrealisedPnl implements SimpleInterface
{
    private string $unrealisedPnl;

    public function __construct(string $unrealisedPnl)
    {
        $this->unrealisedPnl = $unrealisedPnl;
    }

    public function value(): string
    {
        return $this->unrealisedPnl;
    }
}