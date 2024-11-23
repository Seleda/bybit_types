<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class CreationTime implements SimpleInterface
{
    use TraitSimple;
    
    private int $creationTime;

    public function __construct(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }

    public function value(): int
    {
        return $this->creationTime;
    }
}