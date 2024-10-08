<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TimeInForce implements SimpleInterface
{
    private string $timeInForce;

    public function __construct(string $timeInForce)
    {
        $this->timeInForce = $timeInForce;
    }

    public function value(): string
    {
        return $this->timeInForce;
    }
}