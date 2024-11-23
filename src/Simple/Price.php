<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Price implements SimpleInterface
{
    use TraitSimple;
    
    private string $price;

    public function __construct(string $price)
    {
        $this->price = $price;
    }

    public function value(): string
    {
        return $this->price;
    }
}