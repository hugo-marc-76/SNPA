<?php

class Autoload {

    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoloader'));
    }

    static function autoloader($class) 
    {
        $class = str_replace('Hugo\\', '', $class);
        $class = str_replace('\\', '', $class);
        require 'class/' . $class . '.php';
    }


}