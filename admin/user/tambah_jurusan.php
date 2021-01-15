<?php
	error_reporting(0);
	
    $a = $_POST['a'];
    $b = $_POST['b'];

if( isset($_POST['submit'])) {
	
	if ($a!='') {
		$q = "INSERT INTO jurusan VALUES (null, '$a', '$b')";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil ditambahkan !';
		}
		else {
			$konfirmasi = 'Data gagal ditambahkan !';
		}
	  
	} else $konfirmasi = 'Harap diisi dengan lengkap';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<div style="width:500px; hight:700px; background-color:#FFF; margin: 0 auto; margin-top: 10px; margin-bottom: 0px;">
<center><h2><b>Jurusan</b></h2><br><center>
<form method='POST' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
<style>
  table.bottomBorder { 
    border-collapse: collapse; 
  }
  table.bottomBorder td, 
  table.bottomBorder th { 
    text-align: center;
  }
</style>
<table class='bottomBorder' width='110%'>
		  <tr> 
            <td>Nama Jurusan</td>
            <td><input type='text' name='a' size=60></td>
          </tr>
          <tr> 
            <td>singkatan</td>
            <td><input type='text' name='b' size=60></td>
          </tr>
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit name=submit value=Simpan>
                </p>
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
</div>
