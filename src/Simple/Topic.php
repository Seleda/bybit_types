<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class Topic implements SimpleInterface
{
    private string $topic;

    public function __construct(string $topic)
    {
        $this->topic = $topic;
    }

    public function value(): string
    {
        return $this->topic;
    }
}