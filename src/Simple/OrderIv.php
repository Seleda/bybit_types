<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class OrderIv implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $orderIv;

    public function __construct(string $orderIv)
    {
        $this->orderIv = $orderIv;
    }

    public function value(): string
    {
        return $this->orderIv;
    }
}