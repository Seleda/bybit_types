<?php


namespace Seleda\BybitTypes\Simple;


use Seleda\BybitTypes\SimpleInterface;

class NextPageCursor implements SimpleInterface
{
    private string $nextPageCursor;

    public function __construct(string $nextPageCursor)
    {
        $this->nextPageCursor = $nextPageCursor;
    }

    public function value(): string
    {
        return $this->nextPageCursor;
    }
}