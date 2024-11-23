<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class OrderId implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $orderId;

    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function value(): string
    {
        return $this->orderId;
    }
}