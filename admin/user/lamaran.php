<?php
	error_reporting(0);
	


	$q1 = "SELECT * FROM perusahaan WHERE id = '".$_GET['id']."'";
	$r1 = mysql_query($q1) or die ($q);
	$d1 = mysql_fetch_array ($r1);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/content.css" rel="stylesheet" type="text/css"/>
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<div style="width:500px; hight:700px; background-color:#FFF; margin: 0 auto; margin-top: 10px; margin-bottom: 0px;">
<h2><b>EDIT PERUSAHAAN</B></H2><BR>
<form method='POST' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
        <table class="loginform" width="100%" border="0" cellpadding="4" cellspacing="4">
		  <tr> 
            <td>Nama perusahan</td>
            <td><input type='text' name='a' size=40 value='<?php echo $d1[1];?>'></td>
          </tr>
		  <tr> 
            <td>Alamat</td>
            <td><input type='text' name='b' size=80 value='<?php echo $d1[2];?>'></td>
          </tr>
		  <tr> 
            <td>Bidang</td>
            <td><input type='text' name='c' size=80 value='<?php echo $d1[3];?>'></td>
          </tr>
		  <tr> 
            <td>Deskripsi</td>
            <td><textarea name="d" id="posting"><?php echo $d1[4];?></textarea></td>
				<script type="text/javascript">
					var editor = CKEDITOR.replace('posting');
				</script>
		  </tr>
		  <tr> 
            <td>Status</td>
            <td><input type='text' name='e' size=80 value='<?php echo $d1[5];?>'></td>
		  </tr>
		  <tr> 
            <td>Telepon</td>
            <td><input type='text' name='f' size=80 value='<?php echo $d1[6];?>'></td>
		  </tr>
		  <tr> 
            <td>Email</td>
            <td><input type='text' name='g' size=80 value='<?php echo $d1[7];?>'></td>
		  </tr>
		  <tr> 
            <td>Kode Pos</td>
            <td><input type='text' name='h' size=80 value='<?php echo $d1[8];?>'></td>
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
