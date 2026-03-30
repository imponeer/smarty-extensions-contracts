[![License](https://img.shields.io/github/license/imponeer/smarty-extensions-contracts.svg)](LICENSE)
[![GitHub release](https://img.shields.io/github/release/imponeer/smarty-extensions-contracts.svg)](https://github.com/imponeer/smarty-extensions-contracts/releases) [![Maintainability](https://api.codeclimate.com/v1/badges/79f89e2fe21c0076c29a/maintainability)](https://codeclimate.com/github/imponeer/smarty-extensions-contracts/maintainability) [![PHP](https://img.shields.io/packagist/php-v/imponeer/smarty-extensions-contracts.svg)](http://php.net) 
[![Packagist](https://img.shields.io/packagist/dm/imponeer/smarty-extensions-contracts.svg)](https://packagist.org/packages/imponeer/smarty-extensions-contracts)

# Smarty Extensions Contracts

**Archived**: Smarty 5 includes its own [extension system](https://smarty-php.github.io/smarty/stable/api/extending/extensions/), so this library is no longer maintained. For new projects, rely on the native Smarty 5 approach instead of this package.

[Smarty 3](https://github.com/smarty-php/smarty) still doesn't use classes for define most of the possible extensions types. This library tries to fix that - it provides all needed interfaces to define extensions in object way. Defining smarty extensions in object way also can be useful when working with containers. Smarty extensions that could be registered with tags and then loaded when needed.

## Installation

This package is archived and kept for existing consumers. New projects should not depend on it because Smarty 5 already provides the needed extension system.

To install and use this package in legacy setups, we recommend to use [Composer](https://getcomposer.org):

```bash
composer require imponeer/smarty-extensions-contracts
```

Otherwise, you need to include manually files from `src/` directory. 

## Mapping

| Extension type | Interface name | What it for? |
|----------------|----------------|--------------|
| [Template Function](https://www.smarty.net/docs/en/plugins.functions.tpl) | [\Imponeer\Contracts\Smarty\Extension\SmartyFunctionInterface](src/Extension/SmartyFunctionInterface.php) | Interface that lets to define smarty function extension |
| [Modifier](https://www.smarty.net/docs/en/plugins.modifiers.tpl) | [\Imponeer\Contracts\Smarty\Extension\SmartyModifierInterface](src/Extension/SmartyModifierInterface.php) | Interface that lets to define smarty function extension |
| [Block Function](https://www.smarty.net/docs/en/plugins.block.functions.tpl) | [\Imponeer\Contracts\Smarty\Extension\SmartyBlockInterface](src/Extension/SmartyBlockInterface.php) | Extension interface for smarty block functions |
| [Compiler Function](https://www.smarty.net/docs/en/plugins.compiler.functions.tpl) | [\Imponeer\Contracts\Smarty\Extension\SmartyCompilerInterface](src/Extension/SmartyCompilerInterface.php) | Interface that lets to define smarty compiler extension (that is not internal function based) |
| [Prefilter](https://www.smarty.net/docs/en/plugins.prefilters.postfilters.tpl) | [\Imponeer\Contracts\Smarty\Filter\SmartyPreFilterInterface](src/Filter/SmartyPreFilterInterface.php) | Defines filter that is executed to process template source before compilation |
| [Postfilter](https://www.smarty.net/docs/en/plugins.prefilters.postfilters.tpl) | [\Imponeer\Contracts\Smarty\Filter\SmartyPostFilterInterface](src/Filter/SmartyPostFilterInterface.php) | Defines filter that is executed to process template source after compilation |
| [Output filter](https://www.smarty.net/docs/en/plugins.outputfilters.tpl) | [\Imponeer\Contracts\Smarty\Filter\SmartyOutputFilterInterface](src/Filter/SmartyOutputFilterInterface.php) | Defines filter that is executed before template is loaded and executed but before displayed |
| [Resource](https://www.smarty.net/docs/en/plugins.resources.tpl) | [\Imponeer\Contracts\Smarty\Extension\SmartyResourceInterface](src/Extension/SmartyResourceInterface.php) | Defines custom smarty resource type |

## How to contribute?

This project is archived, so we don't accept new issues or pull requests. If you need updates, fork the repository and use your fork as the main project.
