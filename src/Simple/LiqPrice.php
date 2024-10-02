<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LiqPrice implements SimpleInterface
{
    private string $liqPrice;

    public function __construct(string $liqPrice)
    {
        $this->liqPrice = $liqPrice;
    }

    public function value(): string
    {
        return $this->liqPrice;
    }
}