<h2 class="art-postheader">FORM PENDATAAN ALUMNI</h2><br><br>
<?php

if( isset($_POST['submit'])) {

$nama  = $_POST['nama'];
$tinggi  = $_POST['tinggi'];
$berat  = $_POST['berat'];
$ortu  = $_POST['ortu'];
$penyakit  = $_POST['penyakit'];
$jurusan  = $_POST['jurusan'];
$tahun  = $_POST['tahun'];
$cita  = $_POST['cita'];
$status  = $_POST['status'];


	if($nama!='' and $tinggi!='' and $berat!='' and $ortu!='' and $penyakit!='' and $jurusan!='' and $tahun!='' and $cita!='' and $status!='') {
		$q = "INSERT INTO alumni VALUES (null, '$nama', '$tinggi', '$berat', '$ortu', '$penyakit', '$jurusan', '$tahun', '$cita', '$status')";
		$r = mysql_query($q) or die ('HARAP DIULANGI');
			if($r) {
				$konfirmasi = 'PENDAFTARAN SUKSES !';
				unset($_POST['submit']);
			}
			else {
				$konfirmasi = 'PENDAFTARAN GAGAL !';
			}
	} else $konfirmasi = "MOHON DIISI LENGKAP !";

}
?>
<center><h2><b><?php echo $konfirmasi;?></b></h2></center><br>
<form method='POST' name='myform' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
	<table>
		<tr><td>NAMA</td><td><input type='text' name='nama'></td></tr>
		<tr><td>TINGGI BADAN</td><td><input type='text' name='tinggi' size=3></td></tr>
		<tr><td>BERAT BADAN</td><td><input type='text' name='berat' size=2></td></tr>
		<tr><td>PEKERJAAN ORANG TUA</td><td><input type='text' name='ortu'></td></tr>
		<tr><td>RIWAYAT PENYAKIT</td><td><input type='text' name='penyakit' size=50></td></tr>
		<tr><td>JURUSAN</td><td><input type='text' name='jurusan'></td></tr>
		<tr><td>LULUS TAHUN</td><td><input type='text' name='tahun' size=4></td></tr>
		<tr>
			<td>CITA - CITA</td>
			<td><select name="cita">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
				
				<option value='KULIAH'>KULIAH</option>
				<option value='WIRAUSAHA'>WIRAUSAHA</option>
				<option value='BERKERJA'>BERKERJA</option>
			</select></td>
		</tr>
		<tr>
			<td>STATUS SETELAH LULUS</td>
			<td><select name="status">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
				
				<option value='KULIAH'>KULIAH</option>
				<option value='WIRAUSAHA'>WIRAUSAHA</option>
				<option value='BERKERJA'>BERKERJA</option>
			</select></td>
		</tr>
		 <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit value=DAFTAR name='submit'>
                </p>
              </div></td>
         </tr>
	</table>
</form>