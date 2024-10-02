<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SessionAvgPrice implements SimpleInterface
{
    private string $sessionAvgPrice;

    public function __construct(string $sessionAvgPrice)
    {
        $this->sessionAvgPrice = $sessionAvgPrice;
    }

    public function value(): string
    {
        return $this->sessionAvgPrice;
    }
}