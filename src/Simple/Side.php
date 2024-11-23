<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Side implements SimpleInterface
{
    use TraitSimple;
    
    public string $side;

    public function __construct(string $side)
    {
        $this->side = $side;
    }

    public function value(): string
    {
        return $this->side;
    }
}