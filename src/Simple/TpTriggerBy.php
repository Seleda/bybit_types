<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TpTriggerBy implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $tpTriggerBy;

    public function __construct(string $tpTriggerBy)
    {
        $this->tpTriggerBy = $tpTriggerBy;
    }

    public function value(): string
    {
        return $this->tpTriggerBy;
    }
}