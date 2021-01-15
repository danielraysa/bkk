<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header , .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

</style>

<?php

if( isset($_POST['submit'])) {

$nama_lengkap  = $_POST['nama_lengkap'];//
$tempat_lahir= $_POST['tempat_lahir'];//
$tanggal_lahir= $_POST['tanggal_lahir'];//
$agama= $_POST['agama'];//
$alamat_rumah = $_POST['alamat'];//
$kab_kota = $_POST['kab'];//
$provinsi = $_POST['provinsi'];
$kodepos= $_POST['kodepos'];
$telp = $_POST['telp'];
$kuliah = $_POST['kuliah'];
$pendidikan = $_POST['pendidikan'];
$jurusan= $_POST['jurusan'];
$tahun_kelulusan = $_POST['tahun_kelulusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$username  = $_POST['username'];//
$password  = $_POST['password'];//
$password1 = $_POST['password1'];

	if($username!=' ' and $password!='' and $password == $password1) {
		$password = md5($password);
		$q = "INSERT INTO `pendaftar`
        (`id`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_rumah`, `kab_kota`, `provinsi`, `kodepos`, `telp`, `pendidikan`, `jurusan`, `kuliah`, `tahun_kelulusan`, `level`, `pekerjaan`) VALUES 
        (null, '$username', '$password', '$nama_lengkap', '$jenis_kelamin ', '$tempat_lahir', '$tanggal_lahir', '$agama', '$alamat_rumah', '$kab_kota', '$provinsi', '$kodepos', '$telp', '$pendidikan', '$jurusan', '$kuliah', '$tahun_kelulusan',  null, '$pekerjaan')";
		$r = mysql_query($q) or die ('USERNAME SUDAH TERDAFTAR !<br>SILAHKAN ULANGI LAGI PENDAFTARAN ANDA DENGAN USERNAME YANG LAIN');
			if($r) {
				$konfirmasi = 'PENDAFTARAN SUKSES ! <BR> HUBUNGI ADMIN UNTUK MENGAKTIFKAN AKUN ANDA';
				unset($_POST['submit']);
			}
			else {
				$konfirmasi = 'PENDAFTARAN GAGAL !';
			}
	} else $konfirmasi = "Mohon diisi lengkap !<br> dan <br>PASSWORD HARUS SAMA";

}
?>
<script>
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form").hide("slow");
		});
	});
	

</script>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<center><h1>PENDAFTARAN AKUN</h1><center>
	<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-10 col-sm-10 col-xs-10">
       <form class="form-horizontal" method="post" name='myform' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
	 <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="nama_lengkap">
       Nama Lengkap
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="tanggal_lahir">
       Tanggal Lahir
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date"/>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="alamat">
       Alamat
	   <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="alamat" name="alamat" placeholder="Alamat" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="jenis_kelamin">
       Jenis Kelamin
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <select class="select form-control" id="jenis_kelamin" name="jenis_kelamin">
        <option value="Laki-Laki">
         Laki-Laki
        </option>
        <option value="Perempuan">
         Perempuan
        </option>
       </select>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="kab">
       Kabupaten / Kota
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="kab" name="kab" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="provinsi">
       Provinsi
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="provinsi" name="provinsi" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="select1">
       Agama
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <select class="select form-control" id="agama" name="agama">
        <option value="Islam">
         Islam
        </option>
        <option value="Kristen">
         Kristen
        </option>
        <option value="Katolik">
         Katolik
        </option>
        <option value="Hindu">
         Hindu
        </option>
        <option value="Budha">
         Budha
        </option>
       </select>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="kodepos">
       Kode Pos
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="kodepos" name="kodepos" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="tempat_lahir">
       Tempat Lahir
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="tahun_kelulusan">
       Tahun Lulus
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="tahun_kelulusan" name="tahun_kelulusan" placeholder="Tahun Luluis" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="telp">
       Telepon
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="telp" name="telp" type="number"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="pendidikan">
       Pendidikan
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="pendidikan" name="pendidikan" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="jurusan">
       Jurusan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <select class="select form-control" id="jurusan" name="jurusan">
        <option value="Adminitrasi Perkantoran">
         Adminitrasi Perkantoran
        </option>
        <option value="Akuntansi">
         Akuntansi
        </option>
        <option value="Teknik Komputer dan Jaringan">
         Teknik Komputer dan Jaringan
        </option>
        <option value="Pemasaran">
         Pemasaran
        </option>
        <option value="Multimedia">
         Multimedia
        </option>
       </select>
      </div>
     </div>

     <div class="form-group ">
      <label class="control-label col-sm-3" for="kuliah">
       Kuliah
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="kuliah" name="kuliah" type="text" placeholder="Nama kampus anda kuliah"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3" for="pekerjaan">
       Pekerjaan
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="pekerjaan" name="pekerjaan" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="username">
       Username
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-user">
         </i>
        </div>
        <input class="form-control" id="username" name="username" type="text"/>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="password">
       Password
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="password" name="password" type="password"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label col-sm-3 requiredField" for="password1">
       Ulangi Password
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <input class="form-control" id="password1" name="password1" type="password"/>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-1">
       <button class="btn btn-primary " name="submit" type="submit">
        DAFTAR
       </button>
      </div>
     </div>
    </form>
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

<div class="cleared"></div>
