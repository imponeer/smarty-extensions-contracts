<?php


namespace Imponeer\Contracts\Smarty\Extension;

/**
 * Interface that must be implement all function based smarty extensions
 *
 * @package Imponeer\Contracts\Smarty\Extension
 */
interface SmartyExtensionInterface
{

    /**
     * Gets name how to register this extension
     *
     * @return string
     */
    public function getName(): string;

}