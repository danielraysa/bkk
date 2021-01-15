<?php
	error_reporting(0);
	
		$a = $_POST['a'];

if( isset($_POST['submit'])) {
	
	if ($a!='') {
		$q = "INSERT INTO bkk VALUES (null, '$a')";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil ditambahkan !';
		}
		else {
			$konfirmasi = 'Data gagal ditambahkan !';
		}
	  
	} else $konfirmasi = 'Nama sekolah harap diisi lengkap !';
}
?>
<html>
<head>
<title>Pembayaran Deposit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<div style="width:500px; hight:700px; background-color:#FFF; margin: 0 auto; margin-top: 10px; margin-bottom: 0px;">
<h2><b>TAMBAH BKK Mitra</B></H2><BR>
<form method='POST' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
        <table class="loginform" width="100%" border="0" cellpadding="4" cellspacing="4">
		  <tr> 
            <td>Nama Sekolah (BKK Mitra)</td>
            <td><input type='text' name='a' size=80></td>
          </tr>
		  <tr></tr>
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit name=submit value=Simpan>
				  <input type=button value=Reset>
                </p>
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
</div>
