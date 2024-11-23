<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CreateType implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $createType;

    public function __construct(string $createType)
    {
        $this->createType = $createType;
    }

    public function value(): string
    {
        return $this->createType;
    }
}