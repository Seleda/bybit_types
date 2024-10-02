<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Delta implements SimpleInterface
{
    private string $delta;

    public function __construct(string $delta)
    {
        $this->delta = $delta;
    }

    public function value(): string
    {
        return $this->delta;
    }
}