<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 500px; /* only for demonstration, should be removed */
  background: #d9d9d9;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>

<?php
	error_reporting(0);
	include ("../../conn-db.php");
	
	$a = $_POST['a'];
	
function nota($urut, $digit, $pre) {
	$max=$digit-strlen($urut);
	$no = $pre;
	for ($i=1; $i<=$max; $i++) {
		$no .= "0";
	}
	$no .= $urut;
	return $no;
}

	if(''!=$a) {
		if('3'!=$a) {
		$q = "SELECT * from lowongan WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
        
        if($r) {$konfirmasi = 'Data berhasil dirubah !';}
		else {$konfirmasi = 'Data gagal dirubah !';}
		} else {
		$q = "DELETE FROM pendaftar WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {$konfirmasi = 'Data berhasil dihapus !';}
		else {$konfirmasi = 'Data gagal dihapus !';}
		}
		
		echo '<center><h2><b>'.$konfirmasi.'</b></h2></center>';
	}
	else {
	
$q = @mysql_query("select a.id, b.nama, a.isi, a.berlaku, a.tgl_mulai, a.wilayah, a.judul from lowongan a join perusahaan b on a.id_per=b.id WHERE a.id = ".$_GET['id']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> </title>
</head>
<body>
<form id="forms" method="POST" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>?id=<?=$_GET['id'];?>')">
<header>
  <h1>Detail Lowongan</h1>
</header>

<section>
  <nav>
    <ul>
    	  <li>ID     :<?=nota(@mysql_result($q,0,0), 4, "");?></li>
        </ul>
  <ul>    <li>Posisi :<b><?=@mysql_result($q,0,6);?></b></li>
    </ul>
	<br>
	<ul>    <li>Wilayah Requirement :<b><?=@mysql_result($q,0,5);?></b></li>
    </ul>
	<br>
	<ul>    <li>Tanggal Pendaftaran :<b><?=(@mysql_result($q,0,4));?></b></li>
    </ul>
	<br>
	<ul>    <li>Tanggal Penutupan :<b><?=@mysql_result($q,0,3);?></b></li>
    </ul><br>
	<h4><a href="?menu=lowongan">Kembali</a></h4>


  </nav>
  
  <article>
    <center><h1> <b><?=@mysql_result($q,0,1);?></b></h1></center>
	<table width= '500px'>
	<tr><td >
	<?=@mysql_result($q,0,2);?></td> </tr> </table>

  </article>
</section>




</form>
</body>
</html>
<?php } ?>
