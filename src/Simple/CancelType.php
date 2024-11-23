<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CancelType implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $cancelType;

    public function __construct(string $cancelType)
    {
        $this->cancelType = $cancelType;
    }

    public function value(): string
    {
        return $this->cancelType;
    }
}