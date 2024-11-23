<?php


namespace Seleda\BybitTypes\Simple;


use Seleda\BybitTypes\SimpleInterface;

class NextPageCursor implements SimpleInterface
{
    use TraitSimple;
    
    public readonly string $nextPageCursor;

    public function __construct(string $nextPageCursor)
    {
        $this->nextPageCursor = $nextPageCursor;
    }

    public function value(): string
    {
        return $this->nextPageCursor;
    }
}