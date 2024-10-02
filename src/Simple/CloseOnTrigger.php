<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CloseOnTrigger implements SimpleInterface
{
    private bool $closeOnTrigger;

    public function __construct(bool $closeOnTrigger)
    {
        $this->closeOnTrigger = $closeOnTrigger;
    }

    public function value(): bool
    {
        return $this->closeOnTrigger;
    }
}