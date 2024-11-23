<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TriggerPrice implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $triggerPrice;

    public function __construct(string $triggerPrice)
    {
        $this->triggerPrice = $triggerPrice;
    }

    public function value(): string
    {
        return $this->triggerPrice;
    }
}