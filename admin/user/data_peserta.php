<center><h2 class="art-postheader">KONFIRMASI AKUN</h2><br><br></center>
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
<tr align= "center" bgcolor=#44aacc>
		<th width='5%'>ID</th>
		<th width='13%'>Nama Lengkap</th>
		<th width='12%'>Jenis Kelamin </th>
		<th>Jurusan</th>
		<th>Agama</th>
		<th>Kota</th>
		<th width ='25%'>Alamat</th>
		<th>Pekerjaan</th>
		<th width='12%'>Tahun Lulus</th>
		<th width='9%'>Kode Pos</th>
		<th width='15%'>Aksi</th>
	</tr>
<?php

function pendaftar($angka){
	$sql = "SELECT * FROM pendaftar WHERE id = '".$angka."'"; 
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
	$sql = "select * from pendaftar ORDER BY id DESC";
	$res = mysql_query($sql) or die (mysql_error());
	while ($data2 = mysql_fetch_array($res)) {
		echo 
			"<tr>
				<td>".nota($data2[0], 1, '')."</td>
				<td>".$data2[3]."</td>
				<td>".$data2[4]."</td>
				<td>".($data2[14])."</td>
				<td>".$data2[7]."</td>
				<td>".$data2[8]."</td>
				<td>".$data2[8]."</td>
				<td>".$data2[18]."</td>
				<td>".$data2[15]."</td>
				<td>".$data2[11]."</td>
				<td align='center'><a href='javascript:void(0)' onClick=\"edit_form('$data2[0]')\">Hak Akses</a><br>
				<br><a href='.?menu=ubah_alumni&id=".$data2[0]."'>Edit Profil</a></b> </td>
			</tr>";
	}
?>
</table>