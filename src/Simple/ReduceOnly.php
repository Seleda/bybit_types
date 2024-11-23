<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class ReduceOnly implements SimpleInterface
{
    use TraitSimple;
    
    public readonly bool $reduceOnly;

    public function __construct(bool $reduceOnly)
    {
        $this->reduceOnly = $reduceOnly;
    }

    public function value(): bool
    {
        return $this->reduceOnly;
    }
}