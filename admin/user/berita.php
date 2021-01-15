<script>
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>

<br><h2><b><a href=".?menu=tambah_berita">+ tambah berita</a></b></h2>
<br>
<table border='1' width='1000px' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>No</th>
		<th width='15%'>Judul</th>
		<th>Isi</th>
		<th width='10%'>Masa Berlaku</th>
		<th width='10%'>Aksi</th>
	</tr>
	
<?php
function tgl_manusia($value){
	$r = explode("-", $value);
	return $r[2] . "-" . $r[1] . "-" . $r[0];
}

	$sqlLimit2 = "select * from berita order by id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".$i."</td>
				<td>".$data2[2]."</td>
				<td>".$data2[3]."</td>
				<td>".tgl_manusia($data2[4])."</td>
				<td align='center'><a href='.?menu=ubah_berita&id=".$data2[0]."'>Edit</a><BR><BR><BR><a href='.?menu=hapus_berita&id=".$data2[0]."' onClick='return warning();'>Hapus</a></td>
			</tr>";
		$i++;
	}
?>
	
</table>