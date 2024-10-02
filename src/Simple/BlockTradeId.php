<?php


namespace Seleda\BybitTypes\Simple;

use Seleda\BybitTypes\SimpleInterface;


class BlockTradeId implements SimpleInterface
{
    private string $blockTradeId;

    public function __construct(string $blockTradeId)
    {
        $this->blockTradeId = $blockTradeId;
    }

    public function value(): string
    {
        return $this->blockTradeId;
    }
}