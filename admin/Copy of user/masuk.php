<?php 
session_start();
error_reporting(0);

if( isset($_POST['submit'])) {
		include 'conn-db.php';
		$user = strip_tags(trim($_POST['username']));
		$pass = strip_tags(trim($_POST['password']));
		
		if($user!='' and $pass!='') {
			$q = @mysql_query("SELECT password, status, id
                 FROM pendaftar WHERE username = '".$user."'");
			$dpass = @mysql_result($q,0,0);
			$dstatus = @mysql_result($q,0,1);
			$did = @mysql_result($q,0,2);
			
			if(md5($pass)==$dpass) {
				if ($dstatus=='1') { 
					unset($_POST);
					$_SESSION['user'] = $user;
					$_SESSION['id'] = $did;
					$_SESSION['pass'] = $dpass;
					header("location:.");
				} else {$konfirmasi = 'Akun anda belum aktif'; header("location:.?konfirmasi=".$konfirmasi);}
			
			} else {$konfirmasi = 'User ID atau<br>Password Anda Salah'; header("location:.?konfirmasi=".$konfirmasi);}
			
		} else {$konfirmasi = 'User ID atau Password<br>Tidak Boleh Kosong'; header("location:.?konfirmasi=".$konfirmasi);}
}
?>