<?php


namespace Imponeer\Contracts\Smarty\Filter;

use Smarty_Internal_Template;

/**
 * Defines filter that is executed before template is loaded and executed but before displayed
 *
 * @package Imponeer\Contracts\Smarty\Filter
 */
interface SmartyOutputFilterInterface extends SmartyFilterInterface
{

    /**
     * Executes filter
     *
     * @param string $output Current processed template source
     * @param Smarty_Internal_Template $template Current smarty instance
     *
     * @return string
     */
    public function execute(string $output, Smarty_Internal_Template $template): string;

}