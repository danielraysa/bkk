<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php
	error_reporting(0);
		$a = $_POST['a'];	/*judul lowongan*/
		$b = $_POST['b']; /*nama perusahaan*/
		$c = $_POST['c']; /* tanggal berakhir*/
		$c1 = $_POST['d']; /*tanggal mulai*/
		$e = $_POST['wilayah'];
		$d = $_POST['posting']; /*detail lowongan*/ 

if( isset($_POST['submit'])) {
	
	if ($b!='' and $c!='' and $d!='') {
		$q = "INSERT INTO lowongan VALUES (null, '$b', '$d', '$c', '$c1','$a','$e')";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$konfirmasi = 'Data berhasil ditambahkan !';
		}
		else {
			$konfirmasi = 'Data gagal ditambahkan !';
		}
	  
	} else $konfirmasi = 'Semua harap diisi lengkap !';
}
?>
<html>
<head>
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
	});
	
	$(function() {
		$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});
</script>
</head>
<br><br>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<center><h2><b>TAMBAH LOWONGAN</b></H2></center>
<form method='POST' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-10 col-sm-10 col-xs-10">
    <form class="form-horizontal" method="post">
	<div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="b">
       Nama Perusahaan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-9">
       <select class="select form-control" id="b" name="b">
       <?php 
					echo "<option selected='selected' value=''>Silahkan pilih perusahaan</option>";
				
					$q5 = "SELECT id, nama FROM perusahaan";
					$r5 = mysql_query($q5) or die ($q5);
					while ($data = mysql_fetch_array($r5)) {
						echo "<option value='".$data[0]."'>".$data[1]."</option>";
					}
				?>
       </select>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="a">
       Judul Lowongan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="a" name="a" placeholder="Lowongan Pekerjaan" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="textarea">
       Detail Lowongan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-9">
       <textarea class="form-control" cols="40" id="textarea" name="posting" rows="10"></textarea>
       <script type="text/javascript">
					var editor = CKEDITOR.replace('posting');
				</script>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="a">
       Wilayah Requirement
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="wilayah" name="wilayah" placeholder="Wilayah Requirement" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="d">
       Tanggal Pembukaan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="d" name="d" placeholder="MM/DD/YYYY" type="date"/>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="c">
       Tanggal Penutupan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-9">
       <input class="form-control" id="c" name="c" placeholder="MM/DD/YYYY" type="date"/>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
     <br>  <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

      </form>



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