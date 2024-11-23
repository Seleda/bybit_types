<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionIM implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $positionIM;

    public function __construct(string $positionIM)
    {
        $this->positionIM = $positionIM;
    }

    public function value(): string
    {
        return $this->positionIM;
    }
}