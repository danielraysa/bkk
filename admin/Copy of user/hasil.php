<h2 class="art-postheader">PANGGILAN TES</h2><br><br>
<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>ID</th>
		<th>Pendaftar</th>
		<th>Pernah Kerja Disini</th>
		<th>Status</th>
		<th>Administrasi 1</th>
		<th>Tes 1</th>
		<th>Tes 2</th>
		<th>Tes 3</th>
		<th>Tes 4</th>
		<th>Administrasi 2</th>
	</tr>
<?php
	include "../conn-db.php";
	$sql = "select * from lamaran";
	$res = mysql_query($sql) or die (mysql_error());
	while ($data2 = mysql_fetch_array($res)) {
		echo 
			"<tr>
				<td>".$data2[0]."</td>
				<td>".$data2[1]."</td>
				<td>".$data2[4]."</td>
				<td>".$data2[14]."</td>
				<td>".$data2[5]."</td>
				<td>".$data2[6]."</td>
				<td>".$data2[7]."</td>
				<td>".$data2[8]."</td>
				<td>".$data2[9]."</td>
				<td>".$data2[15]."</td>
			</tr>";
	}
?>
</table>