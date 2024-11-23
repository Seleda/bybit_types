<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LeverageSysUpdatedTime implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $leverageSysUpdatedTime;

    public function __construct(string $leverageSysUpdatedTime)
    {
        $this->leverageSysUpdatedTime = $leverageSysUpdatedTime;
    }

    public function value(): string
    {
        return $this->leverageSysUpdatedTime;
    }
}