<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class IsLeverage implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}