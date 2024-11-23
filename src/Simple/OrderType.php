<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class OrderType implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $orderType;

    public function __construct(string $orderType)
    {
        $this->orderType = $orderType;
    }

    public function value(): string
    {
        return $this->orderType;
    }
}