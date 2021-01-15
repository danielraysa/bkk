<h2 class="art-postheader">DAFTAR ALUMNI</h2><br><br>

<form name="form1" method="get" action="">
Search : <input type="text" name="q" id="q"/> <input type="submit" value="Search"/>
</form>



<table border='1' width='120%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#000000>
		<th>No</th>
		<th>Nama</th>
		<th>Tinggi Badan</th>
		<th>Berat Badan</th>
		<th>Pekerjaan Orang Tua</th>
		<th>Riwayat Penyakit</th>
		<th>Jurusan</th>
		<th>Tahun Kelulusan</th>
		<th>No HP / Telp</th>
		<th>Cita-cita</th>
		<th>Status</th>
	</tr>
	
<?php
	$sqlLimit2 = "select * from alumni where nama like '%$q%' or
tinggi like '%$q%' or berat like '%$q%' or ortu like '%$q%' or tahun like '%$q%'";
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
				<td>".$data2[5]."</td>
				<td>".$data2[6]."</td>
				<td>".$data2[7]."</td>
				<td>".$data2[8]."</td>
				<td>".$data2[9]."</td>
				<td>".$data2[10]."</td>
			</tr>";
		$i++;
	}
?>
	
</table>