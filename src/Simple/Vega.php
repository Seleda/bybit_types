<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Vega implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $vega;

    public function __construct(string $vega)
    {
        $this->vega = $vega;
    }

    public function value(): string
    {
        return $this->vega;
    }
}