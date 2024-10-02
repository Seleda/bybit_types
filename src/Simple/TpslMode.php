<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class TpslMode implements SimpleInterface
{
    private string $tpslMode;

    public function __construct(string $tpslMode)
    {
        $this->tpslMode = $tpslMode;
    }

    public function value(): string
    {
        return $this->tpslMode;
    }
}