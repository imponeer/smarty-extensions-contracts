<?php

namespace Imponeer\Contracts\Smarty\Filter;

use Smarty_Internal_Template;

/**
 * Defines filter that is executed to process template source before compilation
 *
 * @package Imponeer\Contracts\Smarty\Filter
 */
interface SmartyPreFilterInterface extends SmartyFilterInterface
{

    /**
     * Executes filter
     *
     * @param string $source Template source code that is now processed
     * @param Smarty_Internal_Template $template Current smarty instance
     *
     * @return string
     */
    public function execute(string $source, Smarty_Internal_Template $template): string;

}