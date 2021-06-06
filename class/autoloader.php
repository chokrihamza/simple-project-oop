<?php

namespace Tutoriel;



class Autoloader
{

  static function register()
  {
    spl_autoload_register(array(__CLASS__, 'autoloader'));
  }
  static function autoloader($class)
  {

    $class = str_replace(__NAMESPACE__ . '\\', '', $class);
   
    $class = str_replace('\\', '/', $class);
    

    require 'class/' . $class . '.php';
    
  }
}