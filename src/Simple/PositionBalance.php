<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class PositionBalance implements SimpleInterface
{
    private string $positionBalance;

    public function __construct(string $positionBalance)
    {
        $this->positionBalance = $positionBalance;
    }

    public function value(): string
    {
        return $this->positionBalance;
    }
}