<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class LeavesValue implements SimpleInterface
{
    use TraitSimple;
    
    private string $leavesValue;

    public function __construct(string $leavesValue)
    {
        $this->leavesValue = $leavesValue;
    }

    public function value(): string
    {
        return $this->leavesValue;
    }
}