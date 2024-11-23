<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TriggerDirection implements SimpleInterface
{
    use TraitSimple;
    
    private int $triggerDirection;

    public function __construct(int $triggerDirection)
    {
        $this->triggerDirection = $triggerDirection;
    }

    public function value(): int
    {
        return $this->triggerDirection;
    }
}