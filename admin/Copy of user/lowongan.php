<h2 class="art-postheader">LOWONGAN PEKERJAAN</h2><br><br>
<?php
if ($_SESSION['user'] != '') $ling = '==DAFTAR==';
	else $ling = '&nbsp;';

function tgl_manusia($value){
	$r = explode("-", $value);
	return $r[2] . "-" . $r[1] . "-" . $r[0];
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

function perusahaan($angka){
	$sql = "SELECT nama FROM perusahaan WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}

	$sqlLimit2 = "SELECT * FROM lowongan WHERE berlaku >= CURDATE() order by id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo "<hr>
			  <table width='100%'>
				<tr><td><b>ID LOWONGAN = ".nota($data2[0], 4, "")."</b></td><td align=right><b> BATAS AKHIR : ".tgl_manusia($data2[3])."</b></td></tr>
				<tr><td><b>NAMA PERUSAHAAN : ".perusahaan($data2[1])."</b></td><td><center><b><a href='.?menu=daftar&id=".$data2[0]."'>".$ling."</a></b></center></td></tr>
				<tr><td colspan=2>".$data2[2]."</td></tr>
			  </table>
			<br>
			";
	}
?>