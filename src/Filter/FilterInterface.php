<?php

namespace mhochm\JadePhp\Filter;

use mhochm\JadePhp\Compiler;
use mhochm\JadePhp\Nodes\Filter;

/**
 * Interface FilterInterface
 * @package Jade\Filter
 */
interface FilterInterface
{
    public function __invoke(Filter $filter, Compiler $compiler);
}