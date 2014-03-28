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

// example route for 'hello world' using request and response services
$request  = Request::all();
$response = Response::all();

Router::add('hello', '/')
    ->addValues(array(
        'controller' => function () {
            Response::all()->content->set('Hello World!');
        }
    ));

// add routes below
