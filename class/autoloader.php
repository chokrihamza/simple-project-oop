<?php

class Autoloader
{

  static function register()
  {
    spl_autoload_register(array(__CLASS__, 'autoloader'));
  }
  static function autoloader($class)
  {
    $class = str_replace('tutoriel\\', '', $class);
    $class = str_replace('\\', '/', $class);
    print_r($class);

    require 'class/' . $class . '.php';
  }
}