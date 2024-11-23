<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class AutoAddMargin implements SimpleInterface
{
    use TraitSimple;
    
    public readonly int $autoAddMargin;

    public function __construct(int $autoAddMargin)
    {
        $this->autoAddMargin = $autoAddMargin;
    }

    public function value(): int
    {
        return $this->autoAddMargin;
    }
}