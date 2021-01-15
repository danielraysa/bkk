<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header , .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

</style>
<?php
	error_reporting(0);
	
		$a = $_POST['a'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$g = $_POST['g'];
        $h = $_POST['h'];
        $i = $_POST['i'];
        $j = $_POST['j'];
        $k = $_POST['k'];
        $l = $_POST['l'];
        $m = $_POST['m'];
        $p = $_POST['kerja'];
        $o = $_POST['o'];
        $n = $_POST['n'];
        $q = $_POST['q'];
        $r = $_POST['r'];

if( isset($_POST['submit'])) {
	
	if ($a!='' and $c!='' and $d!='') {
		$q = "UPDATE `pendaftar` SET 
        `username`='".$a."',
        `nama_lengkap`='".$c."',
        `jenis_kelamin`='".$d."',
        `tempat_lahir`='".$e."',
        `tanggal_lahir`='".$f."',
        `agama`='".$g."',
        `alamat_rumah`='".$h."',
        `kab_kota`='".$i."',
        `provinsi`='".$j."',
        `kodepos`='".$k."',
        `telp`='".$l."',
        `pendidikan`='".$m."',
        `jurusan`='".$n."',
        `kuliah`='".$q."',
        `tahun_kelulusan`='".$o."',
        `level`='".$r."',
        `pekerjaan`='".$p."'
        
        WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil dirubah !';
		}
		else {
			$konfirmasi = 'Data gagal dirubah !';
		}
	  
	} else $konfirmasi = 'Data tidak boleh kosong !';
}

$q1 = "SELECT * FROM pendaftar WHERE id = '".$_GET['id']."'";

	$r1 = mysql_query($q1) or die ($q);
	$d1 = mysql_fetch_array ($r1);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/content.css" rel="stylesheet" type="text/css"/>
</head>
<br>
<script>
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form").hide("slow");
		});
	});

	$(function() {
		$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});

</script>
<br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center>
<center><h2><b>Edit Alumni</b></h2></center>
	<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
    <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-10 col-sm-10 col-xs-12">
    <form class="form-horizontal" method="post" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
     <div class="form-group ">
      <label class="control-label col-sm-4" for="a">
       username
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="a" name="a" type="text"  value='<?php echo $d1[1];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="b">
       Password
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="b" name="b" type="text"value='<?php echo $d1[2];?>' disabled/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="c">
       Nama Lengkap
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="c" name="c" placeholder="Bidang" type="text" value='<?php echo $d1[3];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="d">
       Jenis Kelamin
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="d" name="d" type="text" value='<?php echo $d1[4];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="e">
       Tempat Lahir
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="e" name="e" type="text" value='<?php echo $d1[5];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="f">
       Tanggal Lahir
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="date" name="f" type="Date" value='<?php echo $d1[6];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="h">
       Agama
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="g" name="g" type="text" value='<?php echo $d1[7];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="e">
       Alamat Rumah
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="h" name="h" type="text" value='<?php echo $d1[8];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="e">
       Kabupaten/Kota
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="i" name="i" type="text" value='<?php echo $d1[9];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="j">
       Provinsi
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="j" name="j" type="text" value='<?php echo $d1[10];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="k">
       Kode Pos
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="k" name="k" type="text" value='<?php echo $d1[11];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="l">
       Telepon
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="l" name="l" type="text" value='<?php echo $d1[12];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="m">
       Pendidikan
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="m" name="m" type="text" value='<?php echo $d1[13];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="n">
       Jurusan
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="n" name="n" type="text" value='<?php echo $d1[14];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="e">
       Tahun Lulus
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="o" name="o" type="text" value='<?php echo $d1[16];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="q">
       Kuliah
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="q" name="q" type="text" value='<?php echo $d1[15];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="kerja">
       Pekerjaan
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="kerja" name="kerja" type="text" value='<?php echo $d1[18];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="r">
       Hak akses
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="r" name="r" type="text" value='<?php echo $d1[17];?>' disabled />
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
      <br> <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>