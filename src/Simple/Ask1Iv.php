<?php


namespace Seleda\BybitTypes\Simple;


class Ask1Iv implements \Seleda\BybitTypes\SimpleInterface
{
    use TraitSimple;

    public readonly string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}