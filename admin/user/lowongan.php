<script>
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>

<br><h2><b><a href=".?menu=tambah_lowongan">Tambah Lowongan</a></b></h2>
<br>
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
<tr align='center' bgcolor=#44aacc>
	
		<th width='12%'>ID Lowongan</th>
		<th>Perusahaan</th>
		<th>Lowongan</th>
		<th>Tanggal pembukaan</th>
		<th>Tangga Penutupan</th>
		<th>Wilayah Requirement</th>
		<th>Aksi</th>
	</tr>
	
<?php
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

	$sqlLimit2 = "select a.id, b.nama,a.judul, a.isi, a.berlaku,a.tgl_mulai, a.judul, a.wilayah FROM lowongan a, perusahaan b WHERE a.id_per = b.id order by a.id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#e6eded'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".nota($data2[0], 4, "")."</td>
				<td>".$data2[1]."</td>
				<td>".$data2[2]."</td>
				<td>".tgl_manusia($data2[5])."</td>
				<td align='center'>".tgl_manusia($data2[4])."</td>
				<td align='center'>".$data2[7]."</td>
				
				<td align='center'><b><a href='.?menu=ubah_lowongan&id=".$data2[0]."'>Edit</a><br><br><br><a href='.?menu=hapus_lowongan&id=".$data2[0]."' onClick='return warning();'>Hapus</a></b></td>
			</tr>";
		$i++;
	}
?>
	
</table>