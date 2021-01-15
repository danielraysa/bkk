<?php
	error_reporting(0);
	session_start();
	include "conn-db.php";
?>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 1;
  overflow: hidden;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: left;
  padding: 15px 25px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #15cce8;
}


</style>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>BKK SMK KETINTANG SURABAYA</title>


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
	
	<style>
#loading {
position:absolute;
bottom:0;
width:100%; 
height:100%;
color:#FFFFFF;
text-align:center;
padding:8px 0px 8px 0px;
margin:0px auto;
background-color:#000000;
}
</style>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
	
	
</script>
</head>
<body>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-clip">
        <div class="art-header-center">
            <div class="art-header-png"></div>
        </div>
        </div>
    <div class="art-header-wrapper">
    <div class="art-header-inner">
        <div class="art-headerobject"></div>
        <script type="text/javascript" src="swfobject.js"></script>
        <div id="art-flash-area">
        <div id="art-flash-container">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="384" id="art-flash-object">
            <param name="movie" value="images/flash.swf" />
            <param name="quality" value="high" />
        	<param name="scale" value="exactfit" />
        	<param name="wmode" value="transparent" />
        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
            <param name="swfliveconnect" value="true" />
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="images/flash.swf" width="100%" height="384">
                <param name="quality" value="high" />
        	    <param name="scale" value="exactfit" />
        	    <param name="wmode" value="transparent" />
        	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                <param name="swfliveconnect" value="true" />
            <!--<![endif]-->
            <div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
            <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object>
        </div>
        </div>
        <div class="art-logo">
                 <h1 class="art-logo-name"><a href="./index.html">Bursa Kerja Khusus</a></h1>
                         <h2 class="art-logo-text">SMK KETINTANG SURABAYA</h2>
                </div>
    </div>
    </div>
    </div>
    <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
<?php
   if ($_SESSION['a_nama']!='') 
	echo '<ul>	
		<li>
			<a href="?menu=lowongan" class="active">LOWONGAN</a>
			
		</li>		
		<li>
			<a href="?menu=perusahaan">DAFTAR MITRA</a>
		</li>		
		<li>
			<a href="?menu=pencarian">LIHAT ALUMNI</a>
        </li>	
        <li>
			<a href="logout.php">KELUAR</a>
        </li>		
    </ul>' ;
    else echo '<ul>
    	
    <li>
        <a href="?menu=lowongan" class="active">LOWONGAN</a>
        
    </li>		
    <li>
        <a href="?menu=perusahaan">DAFTAR MITRA</a>
    </li>		
    <li>
        <a href="?menu=pencarian">LIHAT ALUMNI</a>
    </li>	
    <li>
        <a href="login.php">LOGIN</a>
    </li>
    <li>
        <a href="?menu=pendaftaran">DAFTAR AKUN</a>
    </li>		
</ul>' ;

    ?>

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
                    <div class="art-layout-cell art-sidebar1">
                     <div class="art-layout-bg"></div>
<div class="art-vmenublock">
    <div class="art-vmenublock-body">
                <div class="art-vmenublockcontent">
                    <div class="art-vmenublockcontent-body">
                <ul class="art-vmenu">
	
	
</ul>
                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-body">
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                
<div class="cleared"></div>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-body">
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">
                
	<title>BKK SMK KETINTANG SURABAYA</title>
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
     <h1>
					<?php
						if ($_SESSION['a_nama']!='') echo $_SESSION['a_nama'];
							else echo " ";
					?>
					</h1><center>
               </center>
<?php
$menu = $_GET['menu'] ? $_GET['menu'] : 'lowongan';
$link = "user/".$menu.".php";
include $link;
?>
	</div>
					<br>
            </div>
          </div>

                
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
    <div class="art-footer">
        <div class="art-footer-t"></div>
        <div class="art-footer-body">
            <div class="art-footer-center">
                <div class="art-footer-wrapper">
                    <div class="art-footer-text">
                        <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        
<p>Copyright © 2019.<br /> All Rights Reserved.</p>


                        <div class="cleared"></div>
                 
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

</body>
</html>
