<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Topic implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $topic;

    public function __construct(string $topic)
    {
        $this->topic = $topic;
    }

    public function value(): string
    {
        return $this->topic;
    }
}