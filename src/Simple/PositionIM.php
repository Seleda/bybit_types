<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionIM implements SimpleInterface
{
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