<h2 class="art-postheader">PANGGILAN TES</h2><br><br>
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

function perusahaan($angka){
	$sql = "SELECT nama FROM perusahaan WHERE id = '".$angka."'"; 
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

function tgl_manusia($value){
	$r = explode("-", $value);
	return $r[2] . "-" . $r[1] . "-" . $r[0];
}

$sql1 = "select * from lowongan WHERE id =".$_GET['id'];
	$res1 = mysql_query($sql1) or die (mysql_error());	
	while ($data1 = mysql_fetch_array($res1)) {
echo '<h3>Pengumuman peserta tes perusahaan '.perusahaan($data1[1]).' dengan kode '.nota($data1[0], 4, '').'<br>
	<br>
	Memasuki tahap '.$data1[4].'<br>
	akan dilaksanakan pada tanggal '.tgl_manusia($data1[5]).'</h3>';
}
?>
<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>ID</th>
		<th>Pendaftar</th>
		<th>Sekolah Asal</th>
		<th>Administrasi I</th>
		<th>Bayar Tes</th>
		<th>Administrasi II</th>
		<th>Bayar Bantuan BKK</th>
		<th>Pemberangkatan</th>
	</tr>
<?php

	$sql = "select * from lamaran WHERE id_lowongan =".$_GET['id'];
	$res = mysql_query($sql) or die (mysql_error());	
	while ($data2 = mysql_fetch_array($res)) {
		echo 
			"<tr>
				<td>".nota($data2[0], 4, '')."</td>
				<td>".pendaftar($data2[1])."</td>
				<td>".sekolah($data2[1])."</td>
				<td align=center>".$data2[14]."</td>
				<td align=center>".$data2[16]."</td>
				<td align=center>".$data2[15]."</td>
				<td align=center>".$data2[17]."</td>
				<td align=center>".$data2[18]."</td>
			</tr>";
	}
?>
</table>