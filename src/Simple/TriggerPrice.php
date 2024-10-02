<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TriggerPrice implements SimpleInterface
{
    private string $triggerPrice;

    public function __construct(string $triggerPrice)
    {
        $this->triggerPrice = $triggerPrice;
    }

    public function value(): string
    {
        return $this->triggerPrice;
    }
}