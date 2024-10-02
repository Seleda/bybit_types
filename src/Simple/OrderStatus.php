<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class OrderStatus implements SimpleInterface
{
    private string $orderStatus;

    public function __construct(string $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function value(): string
    {
        return $this->orderStatus;
    }
}