<?php


namespace Seleda\BybitTypes\Simple;


class Leverage implements \Seleda\BybitTypes\SimpleInterface
{
    private string $leverage;

    public function __construct(string $leverage)
    {
        $this->leverage = $leverage;
    }

    public function value(): string
    {
        return $this->leverage;
    }
}