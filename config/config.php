<?php
$configDB = array();
$configDB["host"] 		= "localhost";
$configDB["database"]	= "myshop";
$configDB["username"] 	= "root";
$configDB["password"] 	= "";
define("HOST", "localhost");
define("DB_NAME", "myshop");
define("DB_USER", "root");
define("DB_PASS", "");
define('ROOT', dirname(dirname(__FILE__) ) );

//Thu muc tu-yet doi truoc cua config; c:/wamp/www/lab/

define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/DOAN-WEB/");//dia chi website

