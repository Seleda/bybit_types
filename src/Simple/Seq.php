<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Seq implements SimpleInterface
{
    private string $seq;

    public function __construct(string $seq)
    {
        $this->seq = $seq;
    }

    public function value(): string
    {
        return $this->seq;
    }
}