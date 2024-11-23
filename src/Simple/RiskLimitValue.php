<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class RiskLimitValue implements SimpleInterface
{
    use TraitSimple;
    
    private string $riskLimitValue;

    public function __construct(string $riskLimitValue)
    {
        $this->riskLimitValue = $riskLimitValue;
    }

    public function value(): string
    {
        return $this->riskLimitValue;
    }
}