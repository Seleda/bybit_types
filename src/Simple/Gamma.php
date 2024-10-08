<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Gamma implements SimpleInterface
{
    private string $gamma;

    public function __construct(string $gamma)
    {
        $this->gamma = $gamma;
    }

    public function value(): string
    {
        return $this->gamma;
    }
}