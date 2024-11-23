<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SlTriggerBy implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $slTriggerBy;

    public function __construct(string $slTriggerBy)
    {
        $this->slTriggerBy = $slTriggerBy;
    }

    public function value(): string
    {
        return $this->slTriggerBy;
    }
}