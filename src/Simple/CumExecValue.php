<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CumExecValue implements SimpleInterface
{
    use TraitSimple;
    
    private string $cumExecValue;

    public function __construct(string $cumExecValue)
    {
        $this->cumExecValue = $cumExecValue;
    }

    public function value(): string
    {
        return $this->cumExecValue;
    }
}