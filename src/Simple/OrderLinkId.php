<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class OrderLinkId implements SimpleInterface
{
    private string $orderLinkId;

    public function __construct(string $orderLinkId)
    {
        $this->orderLinkId = $orderLinkId;
    }

    public function value(): string
    {
        return $this->orderLinkId;
    }
}