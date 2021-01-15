<?php
	error_reporting(0);
	
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$g = $_POST['g'];
		$h = $_POST['h'];
		

if( isset($_POST['submit'])) {
	
	if ($a!='' and $b!='' and $c!='') {
		$q = "INSERT INTO perusahaan VALUES (null, '$a', '$b', '$c', '$e', '$f', '$g', '$h')";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil ditambahkan !';
		}
		else {
			$konfirmasi = 'Data gagal ditambahkan !';
		}
	  
	} else $konfirmasi = 'Semua harap diisi lengkap !';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/content.css" rel="stylesheet" type="text/css"/>
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<div style="width:500px; hight:500px; background-color:#FFF; margin: 0 auto; margin-top: 20px; margin-bottom: 0px;">
<h2><b>TAMBAH PERUSAHAAN</B></H2><BR>
<form method='POST' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
        <table class="loginform" width="125%" border="0" cellpadding="4" cellspacing="4">
		  <tr> 
            <td>perusahan </td>
            <td><input type='text' name='a' size=50></td>
          </tr>
		  <tr> 
            <td>Alamat </td>
            <td><input type='text' name='b' size=50></td>
          </tr>
		  <tr> 
            <td>Bidang </td>
            <td><input type='text' name='c' size=50></td>
          </tr>
		  <tr> 
            <td>Status </td>
            <td><input type='text' name='e' size=50 placeholder="BUMN, WIRASWASTA, STARTUP, UMKM"></td>
		  </tr>
		  <tr> 
            <td>telepon </td>
            <td><input type="text" name='f' size=50></td>
		  </tr>
		  <tr> 
            <td>Email </td>
            <td><input type='text' name='g' size=50></td>
		  </tr>
		  <tr> 
            <td>kodepos </td>
            <td><input type='text' name='h' size=50></td>
          </tr>
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
