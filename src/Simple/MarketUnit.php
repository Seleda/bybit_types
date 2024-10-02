<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class MarketUnit implements SimpleInterface
{
    private string $marketUnit;

    public function __construct(string $marketUnit)
    {
        $this->marketUnit = $marketUnit;
    }

    public function value(): string
    {
        return $this->marketUnit;
    }
}