<?php

namespace Imponeer\Contracts\Smarty\Extension;

use Smarty_Internal_Template;

/**
 * Extension interface for smarty block functions
 *
 * @package Imponeer\Contracts\Smarty\Extension
 */
interface SmartyBlockInterface extends SmartyExtensionInterface
{

    /**
     * Execute block function
     *
     * @param array $params Passed params to block
     * @param null|string $content Content of template
     * @param Smarty_Internal_Template $template Reference to current smarty internal
     * @param mixed $repeat Helps work with repeating block processing
     *
     * @return mixed
     */
    public function execute(array $params, ?string $content, Smarty_Internal_Template $template, &$repeat);

}