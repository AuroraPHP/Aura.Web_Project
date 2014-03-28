<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @package Aura.Web_Project
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 * @var Aura\Di\Container $di The DI container.
 *
 */

// add a log handler for whatever the config mode is
$mode = Project::all()->getMode();
$file = Project::all()->getTmpPath("log/{$mode}.log");
Logger::all()->pushHandler(Facade::newInstance('Monolog\Handler\StreamHandler', array(
    'stream' => $file,
)));