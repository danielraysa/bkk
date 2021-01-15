<h2 class="art-postheader">ISI DATA DENGAN BENAR</h2><br><br>
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

if( isset($_POST['submit'])) {

$pernah  = $_POST['pernah'];
$user = $_SESSION['a_id'];

	if($pernah!='') {
		$q = "INSERT INTO lamaran VALUES (null, '".$user."', '".$d1[0]."', '".$d1[1]."', '".$pernah."', null, null, null, null, null,  null, null, null, null, '0', '0', '0', '0', '0')";
		$r = mysql_query($q) or die ('kesalahan dalam database !');
			if($r) {
				$konfirmasi = 'PENDAFTARAN SUKSES !';
				unset($_POST['submit']);
			}
			else {
				$konfirmasi = 'PENDAFTARAN GAGAL !';
			}
	} else $konfirmasi = "Mohon diisi lengkap !";
	
unset($_POST['submit']);
echo '<br><center><h2><b>'.$konfirmasi.'</b></h2></center>';	
} else {
?>
<form method='POST' name='myform' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
	<table>
		<tr><td>NAMA PERUSAHAAN</td><td><?=perusahaan($d1[1]);?></td></tr>
		<tr><td>KODE LOWONGAN</td><td><?=nota($d1[0], 4, "");?></td></tr>
		<tr><td>Pernah bekerja disini</td><td><select name="pernah">
			<option selected="selected" value="">silahkan pilih</option>
			<option value="1">pernah</option>
			<option value="0">tidak pernah</option>
			</select></td></tr>
		 <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit value=DAFTAR name=submit>
				  <input type=button value=Reset onclick=self.history.back()>
                </p>
              </div></td>
         </tr>
	</table>
</form>
<?php } ?>