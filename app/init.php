<?php


require_once $_SERVER['DOCUMENT_ROOT'].'/'.NAME.'/vendor/autoload.php';
require_once 'Core/Model.php';
require_once 'Config/Define.php';

spl_autoload_register(function($className) {
  $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
  include_once $className . '.php';
});
