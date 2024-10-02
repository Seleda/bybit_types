<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TriggerBy implements SimpleInterface
{
    private string $triggerBy;

    public function __construct(string $triggerBy)
    {
        $this->triggerBy = $triggerBy;
    }

    public function value(): string
    {
        return $this->triggerBy;
    }
}