<script>
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>


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
		<th width='5%'>No</th>
		<th>Nama Pelamar</th>
		<th>Lowongan</th>
        <th>Perusahaan</th>
		<th>Berkas</th>
		<th width='10%'>Aksi</th>
	</tr>
	
<?php
	$sqlLimit2 = "select l.id, p.nama_lengkap, lo.judul, pe.nama, l.nama_file from lamaran l join pendaftar p on p.id = l.id_pendaftar join lowongan lo on lo.id = l.id_lowongan join perusahaan pe on pe.id = l.id_perusahaan order by l.id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td align='center'>".$i."</td>
				<td>".$data2[1]."</td>
                <td>".$data2[2]."</td>
                <td>".$data2[3]."</td>
                <td>".$data2[4]."</td>
				<td align='center'><b><a href='../file/" . $data2[4] . "' download>Download</a>
			</tr>";
		$i++;
	}
?>
	
</table>