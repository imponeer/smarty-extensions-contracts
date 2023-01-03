<?php

namespace Imponeer\Contracts\Smarty\Extension;

use Smarty_Internal_SmartyTemplateCompiler;

/**
 * Interface that lets to define smarty compiler extension (that is not internal function based)
 *
 * @package Imponeer\Contracts\Smarty\Extension
 */
interface SmartyCompilerInterface extends SmartyExtensionInterface
{

    /**
     * Execute compiler
     *
     * @param array $args Arguments from compiled tag
     * @param Smarty_Internal_SmartyTemplateCompiler $compiler Current compiler object
     *
     * @return string|void
     */
    public function execute($args, Smarty_Internal_SmartyTemplateCompiler $compiler);

}