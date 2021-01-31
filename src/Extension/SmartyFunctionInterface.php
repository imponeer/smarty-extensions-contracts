<?php

namespace Imponeer\Contracts\Smarty\Extension;

use Smarty_Internal_Template;

/**
 * Interface that lets to define smarty function extension
 *
 * @package Imponeer\Contracts\Smarty\Extension
 */
interface SmartyFunctionInterface extends SmartyExtensionInterface
{

    /**
     * Execute function
     *
     * @param array $params Parameters used to call function
     * @param Smarty_Internal_Template $template Current smarty object instance
     * @return string|void
     */
    public function execute($params, Smarty_Internal_Template &$template);

}