<?php

namespace mhochm\JadePhp\Filter;

use mhochm\JadePhp\Compiler;
use mhochm\JadePhp\Nodes\Filter;

class Css extends AbstractFilter
{

    public function __invoke(Filter $node, Compiler $compiler)
    {
        return '<style type="text/css">' . $this->getNodeString($node, $compiler) . '</style>';
    }
}