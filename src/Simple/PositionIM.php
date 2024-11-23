<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionIM implements SimpleInterface
{
    use TraitSimple;
    
    private string $positionIM;

    public function __construct(string $positionIM)
    {
        $this->positionIM = $positionIM;
    }

    public function value(): string
    {
        return $this->positionIM;
    }
}