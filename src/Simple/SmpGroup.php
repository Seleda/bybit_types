<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SmpGroup implements SimpleInterface
{
    use TraitSimple;
    
    public readonly int $smpGroup;

    public function __construct(int $smpGroup)
    {
        $this->smpGroup = $smpGroup;
    }

    public function value(): int
    {
        return $this->smpGroup;
    }
}