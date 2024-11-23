<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Qty implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $qty;

    public function __construct(string $qty)
    {
        $this->qty = $qty;
    }

    public function value(): string
    {
        return $this->qty;
    }
}