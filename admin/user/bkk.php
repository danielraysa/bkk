<script>
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>

<br><h2><b><a href=".?menu=tambah_bkk">+ tambah BKK Mitra</a></b></h2>
<br>
<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>No</th>
		<th>Nama Sekolah (BKK)</th>
		<th width='10%'>Aksi</th>
	</tr>
	
<?php
	$sqlLimit2 = "select * from bkk order by id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".$i."</td>
				<td>".$data2[1]."</td>
				<td align='center'><b><a href='.?menu=ubah_bkk&id=".$data2[0]."'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='.?menu=hapus_bkk&id=".$data2[0]."' onClick='return warning();'>Hapus</a></b></td>
			</tr>";
		$i++;
	}
?>
	
</table>