<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class IsLeverage implements SimpleInterface
{
    private string $isLeverage;

    public function __construct(string $isLeverage)
    {
        $this->isLeverage = $isLeverage;
    }

    public function value(): string
    {
        return $this->isLeverage;
    }
}