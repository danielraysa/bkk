<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>


<?php
	error_reporting(0);
	
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$f = $_POST['f'];
		$g = $_POST['g'];
		$h = $_POST['h'];

if( isset($_POST['submit'])) {
	
	if ($a!='' and $b!='' and $c!='') {
		$q = "UPDATE perusahaan SET nama = '".$a."', alamat = '".$b."', bidang = '".$c."', telepon = '".$f."', email = '".$g."', kodepos = '".$h."' WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil dirubah !';
		}
		else {
			$konfirmasi = 'Data gagal dirubah !';
		}
	  
	} else $konfirmasi = 'Data tidak boleh kosong !';
}

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
<h2><b>EDIT PERUSAHAAN</B></H2><BR>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-10 col-sm-10 col-xs-12">
    <form class="form-horizontal" method="post" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
     <div class="form-group ">
      <label class="control-label col-sm-4" for="a">
       Nama Perusahaan
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="a" name="a" type="text"  value='<?php echo $d1[1];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="b">
       Alamat
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="b" name="b" type="text"value='<?php echo $d1[2];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="c">
       Bidang
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="c" name="c" placeholder="Bidang" type="text" value='<?php echo $d1[3];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="f">
       Telepon
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="f" name="f" type="text" value='<?php echo $d1[5];?>' />
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="g">
       Email
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="g" name="g" type="text" value='<?php echo $d1[6];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-4" for="h">
       Kode Pos
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="h" name="h" type="text" value='<?php echo $d1[7];?>'/>
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

<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
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