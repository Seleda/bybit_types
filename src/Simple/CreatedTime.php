<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CreatedTime implements SimpleInterface
{
    use TraitSimple;
    
    private string $createdTime;

    public function __construct(string $createdTime)
    {
        $this->createdTime = $createdTime;
    }

    public function value(): string
    {
        return $this->createdTime;
    }
}