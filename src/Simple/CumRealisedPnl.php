<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CumRealisedPnl implements SimpleInterface
{
    private string $cumRealisedPnl;

    public function __construct(string $cumRealisedPnl)
    {
        $this->cumRealisedPnl = $cumRealisedPnl;
    }

    public function value(): string
    {
        return $this->cumRealisedPnl;
    }
}