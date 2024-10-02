<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;

class RiskId implements SimpleInterface
{
    private int $riskId;

    public function __construct(int $riskId)
    {
        $this->riskId = $riskId;
    }

    public function value(): int
    {
        return $this->riskId;
    }
}