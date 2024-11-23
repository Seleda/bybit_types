<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TrailingStop implements SimpleInterface
{
    use TraitSimple;
    
    private string $trailingStop;

    public function __construct(string $trailingStop)
    {
        $this->trailingStop = $trailingStop;
    }

    public function value(): string
    {
        return $this->trailingStop;
    }
}