<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LeavesQty implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $leavesQty;

    public function __construct(string $leavesQty)
    {
        $this->leavesQty = $leavesQty;
    }

    public function value(): string
    {
        return $this->leavesQty;
    }
}