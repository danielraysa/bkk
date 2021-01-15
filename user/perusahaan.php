<style>
table.bottomBorder { 
  border-collapse: collapse; 
}
table.bottomBorder td, 
table.bottomBorder th { 
  border-bottom: 1px solid yellowgreen; 
  padding: 10px; 
  text-align: justify;
}
</style>

<center><h2 class="art-postheader">DAFTAR MITRA</h2></center><br>

<table class='bottomBorder' width='1000px'>
<tr bgcolor=#5cffdc>
  
	  <th width='20%'>Nama Mitra</th>
	  <th width='30%'>Alamat</th>
	  <th>Bidang</th>
	  <th>Status</th>
	 

  </tr>
<?php
	$sqlLimit2 = "select * from perusahaan order by id ASC";  
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#ffffff';
		echo "<tr>
			  <td><b>".$data2[1]."</b></td>
			  <td><b> ".$data2[2]."</b></td>
				<td><b>".$data2[3]."</b></td>
				<td colspan=2>".$data2[4]."</td></tr>
			  </tr>
			";
	}
?>
</table>