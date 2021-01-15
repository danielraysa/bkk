<script>
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>

<br><h2><b><a href=".?menu=tambah_perusahaan">Tambah Perusahaan</a></b></h2>
<br>
<style>
  table.bottomBorder { 
    border-collapse: collapse; 
  }
  table.bottomBorder td, 
  table.bottomBorder th { 
    border-bottom: 1px solid yellowgreen; 
    padding: 10px; 
    text-align: left;
  }
</style>

<table class="bottomBorder" width='1000px'>
<tr align='center' bgcolor=#44aacc>
		<th width='5%'>No</th>
		<th width='10%'>Nama</th>
		<th width='25%'>Alamat</th>
		<th>Bidang</th>
		
		<th>Status</th>
		<th width='15%'>Telepon</th>
		<th>Email</th>
		<th width='10%'>Kode Pos</th>
		<th width='10%'>Aksi</th>
	</tr>
	
<?php
	$sqlLimit2 = "select * from perusahaan order by id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#e6eded'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".$i."</td>
				<td>".$data2[1]."</td>
				<td>".$data2[2]."</td>
				<td>".$data2[3]."</td>
			
				<td>".$data2[4]."</td>
				<td>".$data2[5]."</td>
				<td>".$data2[6]."</td>
				<td>".$data2[7]."</td>
				
				<td align='center'><b><a href='.?menu=ubah_perusahaan&id=".$data2[0]."'>Edit</a><BR><BR><BR><a href='.?menu=hapus_perusahaan&id=".$data2[0]."' onClick='return warning();'>Hapus</a></b></td>
			</tr>";
		$i++;
	}
?>
	
</table>