<?php

#set directory project
$projectName = dirname(__DIR__);
$directory = rtrim($projectName,'\\');
$directory = explode('\\',$directory);
define('NAME', $directory[count($directory)-1]);

date_default_timezone_set('Asia/Bangkok');
session_start();


require_once  $_SERVER['DOCUMENT_ROOT'].'/'.NAME.'/app/init.php';

$router = new App\Core\Router;
