<script>
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>

<br><h2><b><a href=".?menu=tambah_jurusan">Tambah Jurusan </a></b></h2>
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
<table class='bottomBorder' width='150%'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>No</th>
		<th>Nama Jurusan</th>
		<th>Singkatan</th>
		<th width='10%'>Aksi</th>
	</tr>
	
<?php
	$sqlLimit2 = "select * from jurusan order by id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".$i."</td>
				<td>".$data2[1]."</td>
				<td>".$data2[2]."</td>
				<td align='center'><b><a href='.?menu=ubah_jurusan&id=".$data2[0]."'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='.?menu=hapus_jurusan&id=".$data2[0]."' onClick='return warning();'>Hapus</a></b></td>
			</tr>";
		$i++;
	}
?>
	
</table>