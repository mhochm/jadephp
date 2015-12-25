<?php

namespace mhochm\JadePhp\Filter;

use mhochm\JadePhp\Compiler;
use mhochm\JadePhp\Nodes\Filter;

/**
 * Class Php
 * @package Jade\Filter
 */
class Php implements FilterInterface
{

    /**
     * @param Filter $node
     * @param Compiler $compiler
     * @return string
     */
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $data = '';

        foreach ($node->block->nodes as $n) {
            if (preg_match('/^[[:space:]]*\|(.*)/', $n->value, $m)) {
                $data = $m[1];
            } else {
                $data .= $n->value . "\n";
            }
        }

        return $data ? '<?php ' . $data . ' ?>' : $data;
    }
}