<center><h2 class="art-postheader">LOWONGAN PEKERJAAN</h2><br><br></center>
<style>
table.bottomBorder { 
  border-collapse: collapse; 
}
table.bottomBorder td, 
table.bottomBorder th { 
  border-bottom: 1px solid yellowgreen; 
  padding: 10px; 
  text-align: center;
}
</style>

<table class='bottomBorder' width='1000px'>
<tr bgcolor=#5cffdc>
  
	  <th>ID</th>
	  <th>Perusahaan</th>
	  <th>Posisi</th>
	  <th>Wilayah</th>
	  <th>Tanggal pembukaan</th>
	  <th>Tangga Penutupan</th>
	  <th width='15%'>Aksi</th>
  </tr>
<?php


if ($_SESSION['a_user'] != '') $ling = 'Daftar Lamaran';
	else  '&nbsp;';

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
$sqlLimit2 = "select a.id, b.nama,a.judul, a.isi, a.berlaku,a.tgl_mulai, a.isi, a.judul, a.wilayah FROM lowongan a join perusahaan b on a.id_per = b.id where a.berlaku >= curdate() order by a.id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#e6eded'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".nota($data2[0], 4, "")."</td>
				<td>".$data2[1]."</td>
				<td>".$data2[7]."</td>
				<td>".$data2[8]."</td>
				<td>".tgl_manusia($data2[4])."</td>
				<td align='center'>".tgl_manusia($data2[4])."</td>
				<td><b><a href='.?menu=lowongan_detail&id=".$data2[0]."'>Detail</a>
				<br><br><a href='.?menu=daftar&id=".$data2[0]."'> ".$ling."</a></td>
			";
	}
	
?>
<!-- <td><b><a href='.?menu=lowongan_detail&id=".$data2[0]."' href='javascript:void(0)' onClick=\"detail_form('$data2[0]')\">Detail</a> -->
</table>