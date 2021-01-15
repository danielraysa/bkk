<center><h2 class="art-postheader">ISI DATA DENGAN BENAR</h2><br><br></center>
<?php
	$q1 = "SELECT * FROM lowongan WHERE id = '".$_GET['id']."'";
	$r1 = mysql_query($q1) or die ($q);
	$d1 = mysql_fetch_array ($r1);
	
function nota($urut, $digit, $pre) {
	$max=$digit-strlen($urut);
	$no = $pre;
	for ($i=1; $i<=$max; $i++) {
		$no .= "0";
	}
	$no .= $urut;
	return $no;
}

function perusahaan($angka){
	$sql = "SELECT nama FROM perusahaan WHERE id = '".$angka."'"; 
	$data = mysql_fetch_array(mysql_query($sql));
	return $data[0];
}

if(isset($_POST['submit'])) {
	$ekstensi_diperbolehkan	= array('png','jpg','zip','RAR');
	$nama_file = $_FILES['file']['name'];
	$x = explode('.', $nama_file);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$pernah  = $_POST['pernah'];
	$s_id = $_SESSION['a_id'];

	if($pernah!='') {
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 1044070){			
				$return = move_uploaded_file($file_tmp, 'file/'.$nama_file);
				$q = "INSERT INTO lamaran VALUES (null, '".$s_id."', '".$d1[0]."', '".$d1[1]."', '".$pernah."', '".$nama_file."')";
				$r = mysql_query($q) or die ('kesalahan dalam database !');
				if($r) {
					$konfirmasi = 'PENDAFTARAN SUKSES Harap Menghubungi BKK ';
					unset($_POST['submit']);
				}
				else {
					$konfirmasi = 'PENDAFTARAN GAGAL !';
				}
			} else{
				echo 'UKURAN FILE TERLALU BESAR';
			}
		} else{
			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		}
	} else $konfirmasi = "Mohon diisi lengkap !";
	
	unset($_POST['submit']);
	echo '<br><center><h2><b>'.$konfirmasi.'</b></h2></center>';	
} else {
?>
<form method='POST' name='myform' enctype="multipart/form-data" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
	<table>
		<tr>
			<td><b>Nama Perusahaan</td>
			<td> : </td>
			<td><?=perusahaan($d1[1]);?></td>
		</tr>
		
		<tr>
			<td><b>Kode Lowongan</td>
			<td> : </td>
			<td><?=nota($d1[0], 4, "");?></td>
		</tr>

		<tr>
			<td><b>Pernah bekerja pada perusahaan tersebut? </td>
			<td> : </td>
			<td><select name="pernah">
				<option selected="selected" value="">silahkan pilih</option>
				<option value="Pernah">pernah</option>
				<option value="Tidak Pernah">tidak pernah</option>
				</select></td>
		</tr>

		<tr>
			<td><b>Pilih berkas portfolio / CV Anda</td>
			<td> : </td>
			<td><input type="file" name="file">	</td>
			<td>*berkas yang dapat diunggah hanya berformat .zip, .rar, .jpg dan .png</td>
		</tr>
		
		 <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit value=Daftar name=submit>
				  <input type=button value=Kembali onclick=self.history.back()>
                </p>
              </div></td>
         </tr>
	</table>
</form>
<?php } ?>