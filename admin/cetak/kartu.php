<?php
include "../../conn-db.php";
$q = @mysql_query("SELECT id, nama_lengkap, jurusan, nama_sekolah FROM pendaftar WHERE id = '".$_GET['id']."'");
$id = @mysql_result($q,0,0);
$nama = @mysql_result($q,0,1);
$jurusan = @mysql_result($q,0,2);
$sekolah = @mysql_result($q,0,3);

function nota($urut, $digit, $pre) {
	$max=$digit-strlen($urut);
	$no = $pre;
	for ($i=1; $i<=$max; $i++) {
		$no .= "0";
	}
	$no .= $urut;
	return $no;
}

function jurusan($angka){
	$sql = "SELECT nama FROM jurusan WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="547" height="357" border="2">
  <tr>
    <td width="535" height="84" background="Capture.PNG" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="178" bgcolor="#CCFFCC"><p>No Peserta : '.nota($id, 4, "").'</p>
    <p>NAMA : '.$nama.'</p>
    <p>JURUSAN : '.jurusan($jurusan).'</p>
    <p>ASAL SEKOLAH : '.$sekolah.'</p>
  </tr>
  <tr>
    <td height="55" bgcolor="#CCFFCC">&nbsp;</td>
  </tr>
</table>
</body>
</html>';
?>