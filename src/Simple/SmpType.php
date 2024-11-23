<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class SmpType implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $smpType;

    public function __construct(string $smpType)
    {
        $this->smpType = $smpType;
    }

    public function value(): string
    {
        return $this->smpType;
    }
}