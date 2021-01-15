<h2 class="art-postheader">BERITA</h2><br><br>
<?php

function tgl_manusia($value, $var){
	$r = explode("-", $value);
	return $r[2]-$var . "-" . $r[1] . "-" . $r[0];
}

	$sqlLimit = "SELECT * FROM berita WHERE berlaku >= curdate() order by id DESC LIMIT 0, 10"; 
	$resLimit = mysql_query($sqlLimit) or die (mysql_error());
	while ($data = mysql_fetch_array($resLimit)) {
		echo "<h3><b>".$data[2]."</b></h3>";
		echo "<h4><i>".tgl_manusia($data[1], 0)."</i></h4>";
		echo $data[3];
		echo "<br><hr>";
	}
?>