<?php


namespace Seleda\BybitTypes\Simple;


class BustPrice implements \Seleda\BybitTypes\SimpleInterface
{
    private string $bustPrice;

    public function __construct(string $bustPrice)
    {
        $this->bustPrice = $bustPrice;
    }

    public function value(): string
    {
        return $this->bustPrice;
    }
}