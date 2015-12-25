<?php

namespace mhochm\JadePhp\Filter;

use mhochm\JadePhp\Compiler;
use mhochm\JadePhp\Nodes\Filter;

class Cdata Extends AbstractFilter
{

    public function __invoke(Filter $node, Compiler $compiler)
    {
        return "<!CDATA[\n" . $this->getNodeString($node, $compiler) . "\n]]>";
    }

}