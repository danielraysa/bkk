<?php
	session_start();
	
	if($_SESSION['user']!='') {
		include "utama.php";
	} else {
		header("location:login.php");
	}
?>