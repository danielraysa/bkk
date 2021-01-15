<h2 class="art-postheader">PENDAFTARAN</h2>
<div class="cleared"></div>
<div class="art-postcontent">

<?php

if( isset($_POST['submit'])) {

$username  = $_POST['username'];
$password  = $_POST['password'];
$password1 = $_POST['password1'];

	if($username!='' and $password!='' and $password == $password1) {
		$password = md5($password);
		$q = "INSERT INTO pendaftar VALUES (null, '$username', '$password', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null)";
		$r = mysql_query($q) or die ('USERNAME SUDAH TERDAFTAR !<br>SILAHKAN ULANGI LAGI PENDAFTARAN ANDA DENGAN USERNAME YANG LAIN');
			if($r) {
				$konfirmasi = 'PENDAFTARAN SUKSES ! <BR> HUBUNGI ADMIN UNTUK MENGAKTIFKAN AKUN ANDA';
				unset($_POST['submit']);
			}
			else {
				$konfirmasi = 'PENDAFTARAN GAGAL !';
			}
	} else $konfirmasi = "Mohon diisi lengkap !<br> dan <br>PASSWORD HARUS SAMA";

}
?>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<form method='POST' name='myform' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
	<table>
		<tr><td>USERNAME</td><td><input type='text' name='username'></td></tr>
		<tr><td>PASSWORD</td><td><input type='password' name='password'></td></tr>
		<tr><td>Ulangi password</td><td><input type='password' name='password1'></td></tr>
		 <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit value=DAFTAR name=submit>
				  <input type=button value=Reset onclick=self.history.back()>
                </p>
              </div></td>
         </tr>
	</table>
</form>

</div>
<div class="cleared"></div>