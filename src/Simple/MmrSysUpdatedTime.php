<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class MmrSysUpdatedTime implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $mmrSysUpdatedTime;

    public function __construct(string $mmrSysUpdatedTime)
    {
        $this->mmrSysUpdatedTime = $mmrSysUpdatedTime;
    }

    public function value(): string
    {
        return $this->mmrSysUpdatedTime;
    }
}