<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CumExecFee implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $cumExecFee;

    public function __construct(string $cumExecFee)
    {
        $this->cumExecFee = $cumExecFee;
    }

    public function value(): string
    {
        return $this->cumExecFee;
    }
}