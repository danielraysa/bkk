<h2 class="art-postheader">PANGGILAN TES</h2><br><br>
<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center' bgcolor=#44aacc>
		<th width='5%'>ID</th>
		<th>Pendaftar</th>
		<th>Pernah Kerja Disini</th>
		<th>Status</th>
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
				<td>".$data2[5]."</td>
			</tr>";
	}
?>
</table>