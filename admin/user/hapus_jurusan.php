<?php
	error_reporting(0);
	
	$q = "DELETE from jurusan WHERE id = '".$_GET['id']."'";
	$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil dihapus !';
		}
		else {
			$konfirmasi = 'Data gagal dihapus !';
		}
		
		echo "<center><h2><b>".$konfirmasi."</b></h2></center><br>";
		// header('Location: .?menu=jurusan');
?>

<script>
$(document).ready(function(){
	window.location.replace(".?menu=jurusan");
})
</script>