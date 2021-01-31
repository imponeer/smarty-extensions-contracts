<?php

namespace Imponeer\Contracts\Smarty\Extension;

/**
 * Interface that lets to define smarty function extension
 *
 * @package Imponeer\Contracts\Smarty\Extension
 */
interface SmartyModifierInterface extends SmartyExtensionInterface
{

    /**
     * Execute modifier (disabled because there is no way to define it with all possible different parameters)
     * Still function must exist
     */
    //public function execute();

}