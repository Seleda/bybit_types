<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Theta implements SimpleInterface
{
    private string $theta;

    public function __construct(string $theta)
    {
        $this->theta = $theta;
    }

    public function value(): string
    {
        return $this->theta;
    }
}