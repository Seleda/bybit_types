<?php


namespace Seleda\BybitTypes\Simple;


trait TraitSimple
{
    public function __toString(): string
    {
        if (is_bool($this->value)) {
            return $this->value ? 'true' : 'false';
        }
        return $this->value;
    }
}