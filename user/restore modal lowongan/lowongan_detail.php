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
		$q = "SELECT * from lowongan WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
        
        if($r) {$konfirmasi = 'Data berhasil dirubah !';}
		else {$konfirmasi = 'Data gagal dirubah !';}
		} else {
		$q = "DELETE FROM pendaftar WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {$konfirmasi = 'Data berhasil dihapus !';}
		else {$konfirmasi = 'Data gagal dihapus !';}
		}
		
		echo '<center><h2><b>'.$konfirmasi.'</b></h2></center>';
	}
	else {
	
$q = @mysql_query("select * from lowongan WHERE id = ".$_GET['id']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Detail Lowongan </title>
</head>

<body>
<form id="forms" method="POST" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>?id=<?=$_GET['id'];?>')">
<fieldset>
<legend> Detail Lowongan </legend>
	<table>
		<tr><td>ID</td>
            <td> : </td>
            <td><b><?=nota(@mysql_result($q,0,0), 4, "");?></b></td>
        </tr>
		<tr>
            <td>Nama Perusahaan</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,1);?></b></td>
        </tr>
		<tr>
            <td>Detail Lowongan</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,2);?></b></td>
        </tr>
		<tr>
			<td>Berlaku Hingga</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,3);?></b></td>
		</tr>
        <tr>
			<td>Status</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,4);?></b></td>
		</tr>
        <tr>
			<td>Tanggal Pembukaan</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,5);?></b></td>
		</tr>
		<tr>
			<td>Wilayah</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,6);?></b></td>
		</tr>
        <tr>
			<td>Penempatan / Posisi</td>
            <td> : </td>
            <td><b><?=@mysql_result($q,0,7);?></b></td>
		</tr>
	</table>
</form>
</fieldset>
</body>
</html>
<?php } ?>
