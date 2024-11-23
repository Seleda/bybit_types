<?php


namespace Seleda\BybitTypes\Simple;


use Seleda\BybitTypes\SimpleInterface;

class Category implements SimpleInterface
{
    use TraitSimple;

    public readonly string $category;

    public function __construct(string $category)
    {
        $this->category = $category;
    }

    public function value(): string
    {
        return $this->category;
    }
}