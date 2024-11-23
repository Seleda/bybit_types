<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class StopLoss implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $stopLoss;

    public function __construct(string $stopLoss)
    {
        $this->stopLoss = $stopLoss;
    }

    public function value(): string
    {
        return $this->stopLoss;
    }
}