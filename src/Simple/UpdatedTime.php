<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class  UpdatedTime implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $updatedTime;

    public function __construct(string $updatedTime)
    {
        $this->updatedTime = $updatedTime;
    }

    public function value(): string
    {
        return $this->updatedTime;
    }
}