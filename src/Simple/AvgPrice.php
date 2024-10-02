<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class AvgPrice implements SimpleInterface
{
    private string $avgPrice;

    public function __construct(string $avgPrice)
    {
        $this->avgPrice = $avgPrice;
    }

    public function value(): string
    {
        return $this->avgPrice;
    }
}