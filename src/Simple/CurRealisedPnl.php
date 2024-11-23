<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CurRealisedPnl implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $curRealisedPnl;

    public function __construct(string $curRealisedPnl)
    {
        $this->curRealisedPnl = $curRealisedPnl;
    }

    public function value(): string
    {
        return $this->curRealisedPnl;
    }
}