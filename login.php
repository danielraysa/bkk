<?php 
session_start();
error_reporting(0);

if( isset($_POST['submit'])) {
		include 'conn-db.php';
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		if($user!='' and $pass!='') {
			$q = @mysql_query("SELECT id, password, level, nama_lengkap
                 FROM pendaftar WHERE username = '".$user."'");
			$dpass = @mysql_result($q,0,1);
			$s_id  = @mysql_result($q,0,0);
			$level = @mysql_result($q,0,2);
			$nama = @mysql_result($q,0,3);
			
			if(md5($pass)==$dpass) {
			
				if ('1'==$level) {
			
				unset($_POST);
				$_SESSION['a_id']   = $s_id; 
				$_SESSION['a_user'] = $user;
				$_SESSION['a_level'] = $level;
				$_SESSION['a_pass'] = $dpass;
				$_SESSION['a_nama'] = $nama;
				header("location:.");
				break;
				} else {
						if ('2'==$level) $konfirmasi = 'Akun anda telah di suspend'; else $konfirmasi = 'Akun anda belum terverivikasi';}
			
			} else {$konfirmasi = 'User ID atau Password Anda Salah';}
			
		} else {$konfirmasi = 'User ID atau Password Tidak Boleh Kosong';}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.41778
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Main</title>


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	<ul class="art-hmenu">
		
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                 
                     <div class="art-layout-bg"></div>
<div class="art-block">
    <div class="art-block-body">
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                

	<tbody>
		<tr>
			<td style="padding:10px;">
				<div class="quoteOfDay">
	<b></b><br>
	<br>
	</div>

		
			</td>
		</tr>
	</tbody>
</table>

                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                    <div class="art-layout-cell art-content">
<div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner art-article">
                                <div class="art-postcontent">


<div id="header">
	<div class="inHeaderLogin"></div>
</div>

<div id="loginForm">
	<div class="headLoginForm">
	<?=$konfirmasi;?><br>
	Login Pengguna
	</div>
	<div class="fieldLogin">
	<form method="POST" action="login.php">
	<label>Username</label><br>
	<input type="text" class="login" name="username"><br><br>
	<label>Password</label><br>
	<input type="password" class="login" name="password"><br><br>
	<input type="submit" class="button" value="Login" name="submit">
	</form>
	</div>
</div>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>


                </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

</body>
</html>
