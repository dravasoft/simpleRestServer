<?php

require_once __DIR__ . '/../source/Jacwright/RestServer/RestServer.php';

require_once __DIR__ . '/../config/config.php';

require_once __DIR__ . '/../mvc/controller/UserController.php';

$server = new \Jacwright\RestServer\RestServer('debug');
//$server->addClass('UserController', '/users');$server->refreshCache();
$server->refreshCache(); 
$server->addClass('UserController'); 
$server->handle();
