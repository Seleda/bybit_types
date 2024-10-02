<?php


namespace Seleda\BybitTypes\Simple;


use Seleda\BybitTypes\SimpleInterface;

class Category implements SimpleInterface
{
    private string $category;

    public function __construct(string $category)
    {
        $this->category = $category;
    }

    public function value(): string
    {
        return $this->category;
    }
}