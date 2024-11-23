<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TpslMode implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $tpslMode;

    public function __construct(string $tpslMode)
    {
        $this->tpslMode = $tpslMode;
    }

    public function value(): string
    {
        return $this->tpslMode;
    }
}