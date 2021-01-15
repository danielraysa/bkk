<center><h2 class="art-postheader">LOWONGAN PEKERJAAN</h2><br><br></center>
<style>
table.bottomBorder { 
  border-collapse: collapse; 
}
table.bottomBorder td, 
table.bottomBorder th { 
  border-bottom: 1px solid yellowgreen; 
  padding: 10px; 
  text-align: center;
}

</style>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
<table class='bottomBorder' width='150%'>

<tr bgcolor=#44aacc>
  
	  <th>ID</th>
	  <th>Perusahaan</th>
	  <th>Lowongan</th>
	  <th>Tanggal pembukaan</th>
	  <th>Tangga Penutupan</th>
	  <th width='15%'>Aksi</th>
  </tr>
<?php


if ($_SESSION['a_user'] != '') $ling = 'Daftar Lamaran';
	else $ling = '&nbsp;';

function tgl_manusia($value){
	$r = explode("-", $value);
	return $r[2] . "-" . $r[1] . "-" . $r[0];
}

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
$sqlLimit2 = "select a.id, b.nama,a.judul, a.isi, a.berlaku,a.tgl_mulai, a.isi, a.judul FROM lowongan a, perusahaan b WHERE a.id_per = b.id order by a.id DESC"; 
	$resLimit2 = mysql_query($sqlLimit2) or die (mysql_error());
	$i = 1;
	while ($data2 = mysql_fetch_array($resLimit2)){
		if($i%2==0) $bg = '#e6eded'; else $bg = '#ffffff';
		echo "<tr bgcolor = '".$bg."'>";
		echo "<td align='center'>".nota($data2[0], 4, "")."</td>";		
		echo "<td>".$data2[1]."</td>";
		echo "<td>".$data2[7]."</td>";
		echo "<td>".tgl_manusia($data2[4])."</td>";
		echo "<td align='center'>".tgl_manusia($data2[4])."</td>";
		echo "<td><b><a href='.?menu=lowongan_detail&id=".$data2[0]."'>Detail</a>";
		echo "<br><br><a href='.?menu=daftar&id=".$data2[0]."'> ".$ling."</a>";
		// echo "<br><br>"<button id='myBtn'> Coba button"</td>";	
		;		
	}
	
	
?>

<button id='myBtn'> Coba button</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <p>Some text in the Modal..</p>



  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- <td><b><a href='.?menu=lowongan_detail&id=".$data2[0]."' href='javascript:void(0)' onClick=\"detail_form('$data2[0]')\">Detail</a> -->
</table>

</html>

