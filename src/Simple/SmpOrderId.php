<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SmpOrderId implements SimpleInterface
{
    private string $smpOrderId;

    public function __construct(string $smpOrderId)
    {
        $this->smpOrderId = $smpOrderId;
    }

    public function value(): string
    {
        return $this->smpOrderId;
    }
}