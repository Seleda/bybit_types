<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class AdlRankIndicator implements SimpleInterface
{
    private int $adlRankIndicator;

    public function __construct(int $adlRankIndicator)
    {
        $this->adlRankIndicator = $adlRankIndicator;
    }

    public function value(): int
    {
        return $this->adlRankIndicator;
    }
}