<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class MarkPrice implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $markPrice;

    public function __construct(string $markPrice)
    {
        $this->markPrice = $markPrice;
    }

    public function value(): string
    {
        return $this->markPrice;
    }
}