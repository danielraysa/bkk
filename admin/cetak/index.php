<?php
error_reporting(0);
include("../../conn-db.php");

if ('0'==$_POST['laporan']) {
	$select = "SELECT id as 'ID', nama_lengkap as 'Nama Lengkap', jenis_kelamin as 'Jenis Kelamin', tempat_lahir as 'Tempat Lahir', tanggal_lahir as 'Tanggal Lahir', agama as 'Agama', alamat_rumah as 'Alamat', kab_kota as 'Kab/Kota', provinsi as 'Provinsi', kodepos as 'Kode Pos', telp as 'Telepon', pendidikan as 'Pendidikan', jurusan as 'Jurusan', tahun_kelulusan as 'Tahun Lulus', pekerjaan as 'Pekerjaan' from pendaftar";
	// if ('0'==$_POST['parameter']) {
	// 	$select = "SELECT * FROM pendaftar";

	// 	 if ('all'==$_POST['perusahaan']) $select = "SELECT a.id AS 'ID', b.nama AS 'NAMA PERUSAHAAN', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' FROM pendaftar a, perusahaan b, lamaran c WHERE b.id = c.id_perusahaan AND c.id_pendaftar = a.id";
	// 	// else $select = "SELECT a.id AS 'ID', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' FROM pendaftar a, lamaran b WHERE b.id_pendaftar = a.id AND b.id_perusahaan = '".$_POST['perusahaan']."'";
	// } //elseif ('1'==$_POST['parameter']) {
	// 	if ('all'==$_POST['jurusan']) $select = "SELECT a.id AS 'ID', b.nama AS 'JURUSAN', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' FROM pendaftar a, jurusan b WHERE a.jurusan = b.id";
	// 	else $select = "SELECT a.id AS 'ID', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' FROM pendaftar a WHERE a.jurusan = '".$_POST['jurusan']."'";
	// } elseif ('2'==$_POST['parameter']) {
	// 	if ('all'==$_POST['bkk']) $select = "SELECT a.id AS 'ID', b.nama AS 'BKK ASAL', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' FROM pendaftar a, bkk b WHERE a.bkk_asal = b.id";
	// 	else $select = "SELECT a.id AS 'ID', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' FROM pendaftar a WHERE a.bkk_asal = '".$_POST['bkk']."'";
	// } else $select = "select a.id AS 'ID', a.nama_lengkap AS 'NAMA LENGKAP', a.nama_panggilan AS 'NAMA PANGGILAN', a.jenis_kelamin AS 'JENIS KELAMIN', a.tempat_lahir AS 'TEMPAT LAHIR', a.tanggal_lahir AS 'TANGGAL LAHIR', a.agama AS 'AGAMA', a.status_pernikahan AS 'STATUS PERNIKAHAN', a.tinggi_badan AS 'TINGGI BADAN', a.berat_badan AS 'BERAT BADAN', a.no_ktp AS 'NO KTP', a.masa_ktp AS 'MASSA BERLAKU KTP', a.alamat_rumah AS 'ALAMAT RUMAH', a.kab_kota AS 'KAB ? KOTA', a.provinsi AS 'PROVINSI', a.kodepos AS 'KODE POS', a.telp AS 'TELP', a.ponsel AS 'SELULAR', a.alamat_saat_ini AS 'ALAMAT SAAT INI', a.kab_kota1 AS 'KAB / KOTA', a.provinsi AS 'provinsi' from pendaftar a";
	
} elseif ('1'==$_POST['laporan']) {
	$select = "SELECT a.id as 'ID', b.nama as 'Nama Perusahaan', c.judul as 'Judul Lowongan', d.nama_lengkap as 'Nama Lengkap'  
	FROM lamaran a 
		join perusahaan b 
	on a.id_perusahaan = b.id 
		join lowongan c 
	on a.id_lowongan= c.id
		join pendaftar d
	on a.id_pendaftar= d.id";

	// $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id";
	// if ('0'==$_POST['parameter']) {
	// 	if ('all'==$_POST['perusahaan']) $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id";
	// 	else $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id AND c.id_perusahaan = '".$_POST['perusahaan']."'";
	// } elseif ('1'==$_POST['parameter']) {
	// 	if ('all'==$_POST['jurusan']) $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id";
	// 	else $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id AND b.jurusan = '".$_POST['jurusan']."'";
	// } elseif ('2'==$_POST['parameter']) {
	// 	if ('all'==$_POST['bkk']) $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id";
	// 	else $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id AND b.bkk_asal = '".$_POST['bkk']."'";
	// } else $select = "select a.id AS 'ID', b.nama_lengkap AS 'NAMA', b.nama_sekolah AS 'SEKOLAH', a.status AS 'STATUS PENDAFTARAN', a.admin1 AS 'BIAYA PENDAFTARAN', a.admin2 AS 'BIAYA BANTUAN BKK', a.nilai1 AS 'NILAI TES I', a.nilai2 AS 'NILAI TES II', a.nilai3 AS 'NILAI TES III', a.nilai4 AS 'NILAI TES IV' from lamaran a, pendaftar b, perusahaan c WHERE a.id_pendaftar = b.id AND a.id_perusahaan = c.id";
	
} elseif ('2'==$_POST['laporan']) {
	$select = "SELECT id as 'ID Perusahaan', nama as 'Nama Perusahaan', bidang as 'Bidang', status as 'Status', alamat as 'Alamat', kodepos as 'Kode Pos', telepon as 'Telepon', email as 'Email' from perusahaan";
}

$export = mysql_query($select);
$fields = mysql_num_fields($export);
for ($i = 0; $i < $fields; $i++) {
$header .= mysql_field_name($export, $i) . "\t";
}
while($row = mysql_fetch_row($export)) {
$line = '';
foreach($row as $value) {
if ((!isset($value)) OR ($value == "")) {
$value = "\t";
} else {
$value = str_replace('"', '""', $value);
$value = '"' . $value . '"' . "\t";
}
$line .= $value;
}
$data .= trim($line)."\n";
}
$data = str_replace("\r","",$data);
if ($data == "") {
$data = "n(0) record found!\n";
}
$tanggal=date("Ymd");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan".$tanggal.".xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
?>