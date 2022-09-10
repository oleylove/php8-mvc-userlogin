<?php


$rootUrl = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$rootUrl .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

$rootUrl = htmlspecialchars($rootUrl);
$rootDir = htmlspecialchars($_SERVER['DOCUMENT_ROOT'].'/'.NAME.'/');

#URL
define('BASEURL', dirname($rootUrl));
define('ASSET', $rootUrl);
define('SCRIPT', dirname($rootUrl).'/app/views/javascript/');

#Directory
define('MODEL', $rootDir.'app/models/');
define('VIEW', $rootDir.'app/views/');
define('LAYOUT', $rootDir.'app/views/layouts/');
define('MODAL', $rootDir.'app/views/modals/');
define('STRORAGE', $rootDir.'public/');




