<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LeavesQty implements SimpleInterface
{
    private string $leavesQty;

    public function __construct(string $leavesQty)
    {
        $this->leavesQty = $leavesQty;
    }

    public function value(): string
    {
        return $this->leavesQty;
    }
}