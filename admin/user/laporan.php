
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<script>
function fungsi0() {
	var a = document.myform.parameter.value;
	if (a == '0') {$("#perusahaan").attr('disabled', false);
					$("#jurusan").attr('disabled', true);
					$("#bkk").attr('disabled', true);}
	if (a == '1') {$("#perusahaan").attr('disabled', true);
					$("#jurusan").attr('disabled', false);
					$("#bkk").attr('disabled', true);}
	if (a == '2') {$("#perusahaan").attr('disabled', true);
					$("#jurusan").attr('disabled', true);
					$("#bkk").attr('disabled', false);}
}

function fungsi1() {
	var a = document.myform.laporan.value;
	// if (a == '2') {$("#perusahaan").attr('disabled', true);
	// 				$("#jurusan").attr('disabled', true);
	// 				$("#bkk").attr('disabled', true);
	// 				$("#parameter").attr('disabled', true);}
	if (a == '1') {$("#parameter").attr('disabled', false);}
	if (a == '0') {$("#parameter").attr('disabled', false);}
}
</script>
<h4><b>LAPORAN</b></h4>
<h5><b>Halaman laporan adalah halaman untuk mencetak Laporan Data Alumni dan Laporan Lamaran. Laporan akan diexport berformat Excel. </br>Silahkan pilih jenis laporan yang anda inginkan, kemudian tekan tombol cetak. </br>Aplikasi akan secara automatis men-download laporan berformat excel</b></h5>
<br><br>
<form method='POST' target='_blank' name='myform' action='cetak/index.php'>
	<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form class="form-horizontal" method="post">
     <div class="form-group ">
      <label class="control-label col-sm-4" for="laporan">
       Jenis Laporan
      </label>
      <div class="col-sm-8">
       <select class="select form-control" id="laporan" name="laporan">
        <option value="0">
         Data Alumni
        </option>
        <option value="1">
         Data Lamaran
        </option>
		<option value="2">
         Data Perusahaan
        </option>
       </select>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-8 col-sm-offset-2">
<br>       <button class="btn btn-primary " name="submit" type="submit">
        Cetak Laporan
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