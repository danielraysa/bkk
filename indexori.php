<?php
	error_reporting(0);
	session_start();
	include "conn-db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>BKK SMK NEGERI 2 PURWOKERTO</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link  href="sa_admin.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
<script>
	$(document).ready(function(){
		$("#data").load("user/atas.html");
	});
	
	$(document).ready(function(){
		$("#sub_menu0").load("user/samping0.php");
	});
	
	$(document).ready(function(){
		$("#sub_menu1").load("user/samping1.php");
	});
</script>
</head>
<body>
    <div id="main">
        <div id="header">
            <a href="#" class="logo"><img src="img/logo.gif" width="101" height="29" alt="" /></a>
            <div align="right"; style="margin-top:5px; margin-right:20px;"><font color=#fff000 size=6>BKK SMK KETINTANG SURABAYA</font>
			<BR><font color=#f1fff0 size=4>Jl........................</font>
			<BR><font color=#f1fff0 size=2>TELP / FAX : .............. </font>
			<BR><font color=#f1fff0 size=3>Jawa Tengah - Indonesia </font></div>
			<ul id="top-navigation">
			<div id='data'></div>
            </ul>
        </div>
        <div id="middle">
            <div id="left-column">
                <h3>PANGGILAN TES</h3>
                <ul class="nav">
					<div id="sub_menu0">
					</div>
                </ul>
				
				<h3>HASIL TES</h3>
                <ul class="nav">
					<div id="sub_menu1">
					</div>
                </ul>
            </div>
            <div id="center-column" >
                <div class="top-bar">
                    <h1>
					<?php
						if ($_SESSION['a_nama']!='') echo $_SESSION['a_nama'];
							else echo "SELAMAT DATANG";
					?>
					</h1>
                    <div class="breadcrumbs">&nbsp;</div>
                </div>
                <div class="select-bar"></div>
	<div id="content">
<?php
$menu = $_GET['menu'] ? $_GET['menu'] : 'berita';
$link = "user/".$menu.".php";
include $link;
?>
	</div>
					<br>
            </div>
            <div id="right-column">
				<?php
					if ($_SESSION['a_nama']!='') echo '<strong class="h"><a href="logout.php">LOG OUT</a></strong><br><br>';
							else echo '<strong class="h"><a href="login.php">LOG IN</a></strong><br><br>
								<strong class="h"><a href=".?menu=pendaftaran">DAFTAR</a></strong>';
				?>
			</div>
        </div>
        <div id="footer"><p>Develope by <a href="http://www.PutraGajahMadaIT.com">PGMIT</a> @ 2013.  Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></p></div>
    </div>
</body>
</html>