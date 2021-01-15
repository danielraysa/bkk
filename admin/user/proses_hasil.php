<?php
	error_reporting(0);
	include ("../../conn-db.php");
	
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	$g = $_POST['g'];
	$h = $_POST['h'];
	
function nota($urut, $digit, $pre) {
	$max=$digit-strlen($urut);
	$no = $pre;
	for ($i=1; $i<=$max; $i++) {
		$no .= "0";
	}
	$no .= $urut;
	return $no;
}

function pendaftar($angka){
	$sql = "SELECT nama_lengkap FROM pendaftar WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}

function sekolah($angka){
	$sql = "SELECT nama_sekolah FROM pendaftar WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}
	if(''!=$a) {
		$q = "UPDATE lamaran SET nilai1 = '".$a."', nilai2 = '".$b."', nilai3 = '".$c."', nilai4 = '".$d."',
			hadir1 = '".$e."', hadir2 = '".$f."', hadir3 = '".$g."', hadir4 = '".$h."' 
			WHERE id = '".$_GET['kode']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {$konfirmasi = 'Data berhasil dirubah !';}
		else {$konfirmasi = 'Data gagal dirubah !';}
		
		echo '<center><h2><b>'.$konfirmasi.'</b></h2></center>';
	}
	else {
	
$q = @mysql_query("select * from lamaran WHERE id = ".$_GET['kode']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ubah Data </title>
</head>

<body>
<form id="forms" method="POST" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>?kode=<?=$_GET['kode'];?>')">
<fieldset>
<legend> PENILAIAN TES </legend>
	<table>
		<tr><td>ID Pendaftar</td><td> : </td><td><b><?=nota(@mysql_result($q,0,0), 4, "");?></b></td></tr>
		<tr><td>Nama Pendaftar</td><td> : </td><td><b><?=pendaftar(@mysql_result($q,0,1));?></b></td></tr>
		<tr><td>Asal Sekolah</td><td> : </td><td><b><?=sekolah(@mysql_result($q,0,1));?></b></td></tr>
		<tr><td>TES I</td><td> : </td><td><b><input type='text' name='a' size=1 value='<?=@mysql_result($q,0,6);?>'></b></td></tr>
		<tr><td>TES II</td><td> : </td><td><b><input type='text' name='b' size=1 value='<?=@mysql_result($q,0,7);?>'></b></td></tr>
		<tr><td>TES III</td><td> : </td><td><b><input type='text' name='c' size=1 value='<?=@mysql_result($q,0,8);?>'></b></td></tr>
		<tr><td>TES IV</td><td> : </td><td><b><input type='text' name='d' size=1 value='<?=@mysql_result($q,0,9);?>'></b></td></tr>
		<tr><td>ABSENSI I</td><td> : </td><td><b><input type='text' name='e' size=1 value='<?=@mysql_result($q,0,10);?>'></b> * 1 untuk HADIR 0 jika TIDAK HADIR</td></tr>
		<tr><td>ABSENSI II</td><td> : </td><td><b><input type='text' name='f' size=1 value='<?=@mysql_result($q,0,11);?>'></b> * 1 untuk HADIR 0 jika TIDAK HADIR</td></tr>
		<tr><td>ABSENSI III</td><td> : </td><td><b><input type='text' name='g' size=1 value='<?=@mysql_result($q,0,12);?>'></b> * 1 untuk HADIR 0 jika TIDAK HADIR</td></tr>
		<tr><td>ABSENSI IV</td><td> : </td><td><b><input type='text' name='h' size=1 value='<?=@mysql_result($q,0,13);?>'></b> * 1 untuk HADIR 0 jika TIDAK HADIR</td></tr>
		<tr>
			<td> </td>
			<td> </td>
			<td> 
				<input type='submit' name='submit' value='submit'>
			</td>
		</tr>
	</table>
</form>
</fieldset>
</body>
</html>
<?php } ?>
