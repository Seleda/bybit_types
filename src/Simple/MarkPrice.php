<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class MarkPrice implements SimpleInterface
{
    private string $markPrice;

    public function __construct(string $markPrice)
    {
        $this->markPrice = $markPrice;
    }

    public function value(): string
    {
        return $this->markPrice;
    }
}