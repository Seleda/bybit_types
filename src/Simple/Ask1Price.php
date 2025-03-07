<?php


namespace Seleda\BybitTypes\Simple;


class Ask1Price implements \Seleda\BybitTypes\SimpleInterface
{
    use TraitSimple;

    public readonly string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}