<?php

namespace mhochm\JadePhp\Nodes;

class Comment extends Node
{
    public $value;
    public $buffer;

    public function __construct($value, $buffer)
    {
        $this->value = $value;
        $this->buffer = $buffer;
    }
}
