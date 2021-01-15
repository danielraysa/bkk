<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php
	error_reporting(0);

		$c = $_POST['c'];
		$c1 = $_POST['d'];
		$d = $_POST['posting'];
            $wil = $_POST['wil'];
            $pos = $_POST['pos'];
           

if( isset($_POST['submit'])) {
	
	if ($c!='' and $d!='') {
		$q = "UPDATE lowongan SET isi = '".$d."', berlaku = '".$c."', tgl_mulai = '".$c1."', wilayah = '".$wil."', judul = '".$pos."' WHERE id = '".$_GET['id']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil dirubah !';
		}
		else {
			$konfirmasi = 'Data gagal dirubah !';
		}
	  
	} else $konfirmasi = 'Data tidak boleh kosong !';
}

      $q1 = "SELECT a.nama, b.judul, b.isi, b.wilayah, b.tgl_mulai, b.berlaku FROM lowongan b join perusahaan a on b.id_per=a.id WHERE b.id = '".$_GET['id']."'";
	$r1 = mysql_query($q1) or die (mysql_error());
      $d1 = mysql_fetch_array($r1);
?>
<html>
<head>
<title>Pembayaran Deposit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/content.css" rel="stylesheet" type="text/css"/>
<script>
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form").hide("slow");
		});
	});

	$(function() {
		$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});0
	
	$(function() {
		$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});
</script>
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<h2><b>EDIT LOWONGAN</b></h2></br>

      <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-8 col-sm-10 col-xs-12">
    <form class="form-horizontal" method="post" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
     <div class="form-group ">
      <label class="control-label col-sm-3" for="name2" >
       Nama Perusahaan
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="name2" name="name2" type="text" value='<?php echo $d1[0];?>' disabled/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="a">
       Penempatan/ Posisi
           </label>
      <div class="col-sm-9">
       <input class="form-control" id="pos" name="pos" type="text" value='<?php echo $d1[1];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="textarea">
       Detail Lowongan
       </label>
      <div class="col-sm-9">
       <textarea class="form-control" cols="40" id="textarea" name="posting" rows="10"><?php echo $d1[2];?></textarea><script type="text/javascript">
					var editor = CKEDITOR.replace('posting');
				</script>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="wil">
       Wilayah
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="wil" name="wil" type="text" value='<?php echo $d1[3];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="d">
       Tanggal Pembukaan
       
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="datetimepicker2" name="d" placeholder="MM/DD/YYYY" type="date" value='<?php echo $d1[5];?>'/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="c">
       Tanggal Penutupan
       
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="datepicker" name="c" placeholder="MM/DD/YYYY" type="date" value='<?php echo $d1[6];?>'/>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <button class="btn btn-primary " name="submit" type="submit">
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