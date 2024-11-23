<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Side implements SimpleInterface
{
    use TraitSimple;
    
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}