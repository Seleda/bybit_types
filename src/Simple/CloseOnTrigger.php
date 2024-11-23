<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CloseOnTrigger implements SimpleInterface
{
    use TraitSimple;
    
    public readonly bool $closeOnTrigger;

    public function __construct(bool $closeOnTrigger)
    {
        $this->closeOnTrigger = $closeOnTrigger;
    }

    public function value(): bool
    {
        return $this->closeOnTrigger;
    }
}