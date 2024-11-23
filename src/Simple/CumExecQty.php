<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CumExecQty implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $cumExecQty;

    public function __construct(string $cumExecQty)
    {
        $this->cumExecQty = $cumExecQty;
    }

    public function value(): string
    {
        return $this->cumExecQty;
    }
}