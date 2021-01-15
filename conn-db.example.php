<?php
date_default_timezone_set('Asia/Jakarta');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set("log_errors", 1);
ini_set("error_log", __DIR__."/errors/php-error-".date('Y-m-d').".log");
error_reporting(E_ALL ^ E_DEPRECATED);
$dbhost		= "localhost";
$dbuser		= "root";
$dbpassword	= "";
$database	= "bkk";
$db = @mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . @mysql_error()); 
@mysql_select_db($database) or die("Error conecting to db."); 
?>