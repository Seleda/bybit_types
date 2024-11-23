<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class FeeCurrency implements SimpleInterface
{
    use TraitSimple;
    
    private string $feeCurrency;

    public function __construct(string $feeCurrency)
    {
        $this->feeCurrency = $feeCurrency;
    }

    public function value(): string
    {
        return $this->feeCurrency;
    }
}