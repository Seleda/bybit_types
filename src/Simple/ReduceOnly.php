<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class ReduceOnly implements SimpleInterface
{
    use TraitSimple;
    
    public readonly bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }
}