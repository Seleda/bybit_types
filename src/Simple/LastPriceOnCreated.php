<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LastPriceOnCreated implements SimpleInterface
{
    private string $lastPriceOnCreated;

    public function __construct(string $lastPriceOnCreated)
    {
        $this->lastPriceOnCreated = $lastPriceOnCreated;
    }

    public function value(): string
    {
        return $this->lastPriceOnCreated;
    }
}