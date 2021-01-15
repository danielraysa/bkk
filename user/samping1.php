<?php
	include "../conn-db.php";
	$sql = "select lowongan.id, perusahaan.nama from lowongan, perusahaan WHERE perusahaan.id = lowongan.id_per order by id DESC";
	$res = mysql_query($sql) or die (mysql_error());
	while ($data = mysql_fetch_array($res)) {
		echo '<li><a href=".?menu=hasil&id='.$data[0].'">'.$data[1].'</a></li>';
	}
?>