<script>
	// ketika halaman pertama kali diload, maka akan memanggil file data_barang.php dan dimasukkan pada div id='data'
	$(document).ready(function(){
		$("#data1").load("user/data_panggilan.php?id="+<?=$_GET['id']?>);
	});
	
	// function untuk menampilkan form edit data dan dimasukkan pada div id='form'
	function edit_form(kode) {
		$.get('user/proses_panggilan.php?kode='+kode, null, function(data) {$('#form1').html(data);});
		$('#form1').show("slow");
	}

	// function untuk proses tambah atau edit data
	function submitForm(url) {
		$("#data1").load("user/data_panggilan.php?id="+<?=$_GET['id']?>);
		var thisPost = $('#forms').serialize();
		$.post(url, thisPost, function(data) {$('#form1').html(data);} );
		$("#data1").load("user/data_panggilan.php?id="+<?=$_GET['id']?>);
		return false;
	}
</script>
<div id="form1"></div>
<div id="data1"></div>