<h2 class="art-postheader">BANTUAN</h2><br><br>
<?php
	$sqlLimit2 = "SELECT * FROM isi";
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	while ($data2 = mysql_fetch_array($resLimit2)){
		echo $data2[1];
	}
?>