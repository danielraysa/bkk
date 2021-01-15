<?php
	error_reporting(0);
	include ("../../conn-db.php");
	
	$a = $_POST['a'];
	
function nota($urut, $digit, $pre) {
	$max=$digit-strlen($urut);
	$no = $pre;
	for ($i=1; $i<=$max; $i++) {
		$no .= "0";
	}
	$no .= $urut;
	return $no;
}

	if(''!=$a) {
		if('3'!=$a) {
		$q = "UPDATE pendaftar SET level = '".$a."'	WHERE id = '".$_GET['kode']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {$konfirmasi = 'Data berhasil dirubah !';}
		else {$konfirmasi = 'Data gagal dirubah !';}
		} else {
		$q = "DELETE FROM pendaftar WHERE id = '".$_GET['kode']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {$konfirmasi = 'Data berhasil dihapus !';}
		else {$konfirmasi = 'Data gagal dihapus !';}
		}
		
		echo '<center><h2><b>'.$konfirmasi.'</b></h2></center>';
	}
	else {
	
$q = @mysql_query("select * from pendaftar WHERE id = ".$_GET['kode']);

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
<legend> Konfirmasi Akun </legend>
	<table>
		<tr><td>ID Alumni</td><td> : </td><td><b><?=nota(@mysql_result($q,0,0), 4, "");?></b></td></tr>
		<tr><td>Nama Alumni</td><td> : </td><td><b><?=@mysql_result($q,0,3);?></b></td></tr>
		<tr><td>Alamat</td><td> : </td><td><b><?=@mysql_result($q,0,8);?></b></td></tr>
		<tr>
			<td>Hak Akses</td><td> : </td>
			<td><select name="a">
      <option selected="selected" value="<?=@mysql_result($q,0,38);?>"><?=@mysql_result($q,0,38);?></option>
	  <option value="1">Aktif (1)</option>
	  <option value="2">Suspend (2)</option>
	  <option value="3">Hapus</option>
            </select></td>
		</tr>
		<tr>
		
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
