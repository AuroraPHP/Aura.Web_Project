<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @package Aura.Web_Project
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
use AuraFacades\Facade;

// invoke the project kernel script
require dirname(__DIR__) . '/vendor/aura/project-kernel/scripts/kernel.php';

// create and invoke a web kernel
$web_kernel = $di->newInstance('Aura\Web_Kernel\WebKernel');

// Initialize the facade locator service registry thingy
Facade::setFacadeApplication($web_kernel);

// Add aliases here if you want to override the default Aura aliases
// $aliases = array(
//     '' => '',
// );

Facade::registerAliases();

$web_kernel();
