<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CreateType implements SimpleInterface
{
    private string $createType;

    public function __construct(string $createType)
    {
        $this->createType = $createType;
    }

    public function value(): string
    {
        return $this->createType;
    }
}