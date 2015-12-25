<?php

namespace mhochm\JadePhp\Filter;

use mhochm\JadePhp\Compiler;
use mhochm\JadePhp\Nodes\Filter;

class Escaped extends AbstractFilter
{

    public function __invoke(Filter $node, Compiler $compiler)
    {
        return htmlentities($this->getNodeString($node, $compiler));
    }
}