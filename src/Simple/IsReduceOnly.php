<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class IsReduceOnly implements SimpleInterface
{
    use TraitSimple;
    
    public readonly bool $isReduceOnly;

    public function __construct(bool $isReduceOnly)
    {
        $this->isReduceOnly = $isReduceOnly;
    }

    public function value(): bool
    {
        return $this->isReduceOnly;
    }
}