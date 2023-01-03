<?php

namespace Imponeer\Contracts\Smarty\Extension;

use Smarty_Internal_Template;
use Smarty_Template_Source;
use SmartyException;

/**
 * Defines custom smarty resource type
 *
 * @package Imponeer\Contracts\Smarty\Extension
 */
interface SmartyResourceInterface extends SmartyExtensionInterface
{
    /**
     * Populate source with metadata from resource
     *
     * @param Smarty_Template_Source $source source
     * @param Smarty_Internal_Template|null $template template
     */
    public function populate(Smarty_Template_Source $source, ?Smarty_Internal_Template $template = null);

    /**
     * Load template's source into current template
     *
     * @param Smarty_Template_Source $source source
     *
     * @return string                 template source
     * @throws SmartyException        if source cannot be loaded
     */
    public function getContent(Smarty_Template_Source $source);

    /**
     * Gets basename for compiled filename
     *
     * @param Smarty_Template_Source $source source object
     *
     * @return string                 resource's basename
     */
    public function getBasename(Smarty_Template_Source $source);
}