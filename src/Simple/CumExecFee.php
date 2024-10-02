<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CumExecFee implements SimpleInterface
{
    private string $cumExecFee;

    public function __construct(string $cumExecFee)
    {
        $this->cumExecFee = $cumExecFee;
    }

    public function value(): string
    {
        return $this->cumExecFee;
    }
}