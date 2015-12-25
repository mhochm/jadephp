<?php

namespace mhochm\JadePhp\Nodes;

use mhochm\JadePhp\Compiler;

class Mixin extends Attributes
{
    public $name;
    public $arguments;
    public $block;
    public $attributes;
    public $call;

    public function __construct($name, $arguments, $block, $call)
    {

        $this->name = $name;
        $this->arguments = (preg_match('/^' . Compiler::VARNAME . '$/', $arguments) ? '$' : '') . $arguments;
        $this->block = $block;
        $this->attributes = [];
        $this->call = $call;
    }
}
