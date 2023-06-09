<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'ECommerce');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("config.php");
require_once("function.php");
require_once("session.php");
require_once("accounts.php");
require_once("autonumbers.php");
require_once("products.php");
require_once("stockin.php");
require_once("categories.php");
require_once("sidebarFunction.php"); 
require_once("promos.php");
require_once("customers.php");
require_once("orders.php");
require_once("summary.php");
require_once("settings.php");




require_once("database.php");
?>