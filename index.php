<?php

session_start();
require_once 'Routes/Routes.php';

// echo __DIR__;
// echo $_SERVER['REQUEST_URI'];
// die();

function __autoload($classname)
{
    if (file_exists("autoload/" . $classname . '.php')) {
        require "autoload/" . $classname . '.php';
    }
    if (file_exists("Controller/" . $classname . '.php')) {
        require "Controller/" . $classname . '.php';
    }
    if (file_exists("db/" . $classname . '.php')) {
        require "db/" . $classname . '.php';
    }
}
