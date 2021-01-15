<h2 class="art-postheader">HASIL TES</h2><br><br>
<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>ID</th>
		<th>Pendaftar</th>
		<th>Sekolah Asal</th>
		<th>Tes 1</th>
		<th>Tes 2</th>
		<th>Tes 3</th>
		<th>Tes 4</th>
		<th>Absensi 1</th>
		<th>Absensi 2</th>
		<th>Absensi 3</th>
		<th>Absensi 4</th>
	</tr>
<?php

function pendaftar($angka){
	$sql = "SELECT nama_lengkap FROM pendaftar WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}

function sekolah($angka){
	$sql = "SELECT nama_sekolah FROM pendaftar WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}

function nota($urut, $digit, $pre) {
	$max=$digit-strlen($urut);
	$no = $pre;
	for ($i=1; $i<=$max; $i++) {
		$no .= "0";
	}
	$no .= $urut;
	return $no;
}

	include "../../conn-db.php";
	$sql = "select * from lamaran WHERE id_lowongan =".$_GET['id'];
	$res = mysql_query($sql) or die (mysql_error());
	while ($data2 = mysql_fetch_array($res)) {
		echo 
			"<tr>
				<td>".nota($data2[0], 4, '')."</td>
				<td>".pendaftar($data2[1])."</td>
				<td>".sekolah($data2[1])."</td>
				<td align=center>".$data2[6]."</td>
				<td align=center>".$data2[7]."</td>
				<td align=center>".$data2[8]."</td>
				<td align=center>".$data2[9]."</td>
				<td align=center>".$data2[10]."</td>
				<td align=center>".$data2[11]."</td>
				<td align=center>".$data2[12]."</td>
				<td align=center>".$data2[13]."</td>
			</tr>";
	}
?>
</table>