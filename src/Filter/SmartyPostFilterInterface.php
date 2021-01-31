<?php

namespace Imponeer\Contracts\Smarty\Filter;

use Smarty_Internal_Template;

/**
 * Defines filter that is executed to process template source after compilation
 *
 * @package Imponeer\Contracts\Smarty\Filter
 */
interface SmartyPostFilterInterface extends SmartyFilterInterface
{

    /**
     * Executes filter
     *
     * @param string $compiled Compiled template source
     * @param Smarty_Internal_Template $template Current smarty instance
     *
     * @return string
     */
    public function execute(string $compiled, Smarty_Internal_Template $template): string;

}