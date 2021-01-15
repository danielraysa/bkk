<?php

		$d = $_POST['posting'];

if( isset($_POST['submit'])) {
	
	if ($d!='') {
		$q = "UPDATE isi SET isi = '".$d."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil dirubah !';
		}
		else {
			$konfirmasi = 'Data gagal dirubah !';
		}
	  
	} else $konfirmasi = 'Data tidak boleh kosong !';
}

	$q1 = "SELECT * FROM isi";
	$r1 = mysql_query($q1) or die ($q);
	$d1 = mysql_fetch_array ($r1);
?>
<html>
<head>
<title>Pembayaran Deposit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/content.css" rel="stylesheet" type="text/css"/>
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<div style="width:500px; hight:700px; background-color:#FFF; margin: 0 auto; margin-top: 10px; margin-bottom: 0px;">
<h2><b>EDIT BANTUAN</B></H2><BR>
<form method='POST' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
        <table class="loginform" width="100%" border="0" cellpadding="4" cellspacing="4">
		  <tr> 
            <td><textarea id="posting" name="posting"><?php echo $d1[1];?></textarea>
				<script type="text/javascript">
					var editor = CKEDITOR.replace('posting');
				</script>
			</td>
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
