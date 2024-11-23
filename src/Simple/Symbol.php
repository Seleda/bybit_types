<?php


namespace Seleda\BybitTypes\Simple;


use Seleda\BybitTypes\SimpleInterface;

class Symbol implements SimpleInterface
{
    use TraitSimple;
    
    private string $symbol;

    public function __construct(string $symbol)
    {
        $this->symbol = $symbol;
    }

    public function value(): string
    {
        return $this->symbol;
    }
}