<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PlaceType implements SimpleInterface
{
    use TraitSimple;

    private string $placeType;

    public function __construct(string $placeType)
    {
        $this->placeType = $placeType;
    }

    public function value(): string
    {
        return $this->placeType;
    }
}