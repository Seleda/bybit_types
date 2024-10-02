<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class OcoTriggerBy implements SimpleInterface
{
    private string $ocoTriggerBy;

    public function __construct(string $ocoTriggerBy)
    {
        $this->ocoTriggerBy = $ocoTriggerBy;
    }

    public function value(): string
    {
        return $this->ocoTriggerBy;
    }
}