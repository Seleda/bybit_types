<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Size implements SimpleInterface
{
    private string $size;

    public function __construct(string $size)
    {
        $this->size = $size;
    }

    public function value(): string
    {
        return $this->size;
    }
}