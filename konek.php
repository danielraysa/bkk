<?php
//host database
$dbhost = "localhost";
//User Database
$dbuser = "root";
//Password Database
$dbpswd = "root";
//Nama Database
$dbname = "combose";
mysql_connect($dbhost, $dbuser, $dbpswd);
mysql_select_db($dbname);
?>