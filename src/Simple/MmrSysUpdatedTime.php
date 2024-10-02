<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class MmrSysUpdatedTime implements SimpleInterface
{
    private string $mmrSysUpdatedTime;

    public function __construct(string $mmrSysUpdatedTime)
    {
        $this->mmrSysUpdatedTime = $mmrSysUpdatedTime;
    }

    public function value(): string
    {
        return $this->mmrSysUpdatedTime;
    }
}