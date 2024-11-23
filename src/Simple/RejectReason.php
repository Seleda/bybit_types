<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class RejectReason implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $rejectReason;

    public function __construct(string $rejectReason)
    {
        $this->rejectReason = $rejectReason;
    }

    public function value(): string
    {
        return $this->rejectReason;
    }
}