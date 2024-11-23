<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CloseOnTrigger implements SimpleInterface
{
    use TraitSimple;
    
    public readonly bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }
}