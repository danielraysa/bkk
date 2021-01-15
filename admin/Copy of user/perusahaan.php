<h2 class="art-postheader">DAFTAR PERUSAHAAN</h2><br><br>
<?php
	$sqlLimit2 = "select * from perusahaan order by id ASC";  
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo "<hr>
			  <table width='100%'>
				<tr><td><b>".$data2[1]."</b></td><td align=right rowspan=2><b> Bidang : ".$data2[3]."</b></td></tr>
				<tr><td><b>Alamat : ".$data2[2]."</b></td></tr>
				<tr><td colspan=2>".$data2[4]."</td></tr>
			  </table>
			<br>
			";
	}
?>