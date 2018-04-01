<?php
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
require_once 'dbfunction.php';
require_once 'common.func.php';
require_once "config.php";
require_once 'user.inc.php';
require_once 'doAction.php';
require_once 'car.php'; 

connect();
?>