<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SmpGroup implements SimpleInterface
{
    use TraitSimple;
    
    public readonly int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}