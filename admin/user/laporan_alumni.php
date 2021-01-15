<?php
include("../../conn-db.php");
require('../../fpdf17/fpdf.php');
/**
 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Hakko Bio Richard
 Blog   : www.hakkoblogs.com
 Web    : www.niqoweb.com
 Email  : hakkobiorichard@gmail.com
 
 Untuk tutorial yang lainnya silahkan berkunjung ke www.hakkoblogs.com
 
 Butuh jasa pembuatan website, aplikasi, pembuatan program TA dan Skripsi.? Hubungi NiqoWeb ==>> 085694984803
 
 **/
//Menampilkan data dari tabel di database

// $result=mysql_query("SELECT * FROM pendaftar ORDER BY id ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
//$column_id = "";
$column_id = "";
$column_nama_lengkap = "";
$column_jk = "";
$column_tempat_lahir = "";
$column_tanggal_lahir = "";
$column_agama = "";
$column_alamat_rumah = "";
$column_kab_kota = "";
$column_provinsi = "";
$column_kodepos = "";
$column_telp = "";
$column_pendidikan = "";
$column_jurusan = "";
$column_tahun_kelulusan = "";
$column_pekerjaan = "";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	//$id = $row["id"];
    $noid = $row["id"];
    $nama_lengkap = $row["nama_lengkap"];
    $jk = $row["jenis_kelamin"];
    $tempat_lahir = $row["tempat_lahir"];
	$tanggal_lahir = $row["tanggal_lahir"];
    $agama = $row["agama"];
    $alamat_rumah = $row["alamat_rumah"];
    $kab_kota = $row["kab_kota"];
    $provinsi = $row["provinsi"];
    $kodepos = $row["kodepos"];
    $telp = $row["telp"];
    $pendidikan = $row["pendidikan"];
    $jurusan = $row["jurusan"];
    $tahun_kelulusan = $row["tahun_kelulusan"];
    $pekerjaan = $row["pekerjaan"];
 
    

	//$column_id = $column_id.$id."\n";
    $column_id = $column_id.$noid."\n";
    $column_nama_lengkap = $column_nama_lengkap.$nama_lengkap."\n";
    $column_jk = $column_jk.$jk."\n";
    $column_tempat_lahir = $column_tempat_lahir.$tempat_lahir."\n";
    $column_tanggal_lahir = $column_tanggal_lahir.$tanggal_lahir."\n";
    $column_agama = $column_agama.$agama."\n";
    $column_alamat_rumah = $column_alamat_rumah.$alamat_rumah."\n";
    $column_kab_kota = $column_kab_kota.$kab_kota."\n";
    $column_provinsi = $column_provinsi.$provinsi."\n";
    $column_kodepos = $column_kodepos.$kodepos."\n";
    $column_telp = $column_telp.$telp."\n";
    $column_pendidikan = $column_pendidikan.$pendidikan."\n";
    $column_jurusan = $column_jurusan.$jurusan."\n";
    $column_tahun_kelulusan = $column_tahun_kelulusan.$tahun_kelulusan."\n";
    $column_pekerjaan = $column_pekerjaan.$pekerjaan."\n";
    

//Create a new PDF file
$pdf = new FPDF('L','mm',array(220,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('../../img/logo2.png',10,10,15,15);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'DATA ALUMNI',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'Bursa Kerja SMK Ketintang',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
// $pdf->Cell(20,8,'ID',1,0,'C',1); //
$pdf->SetX(25);
$pdf->Cell(55,8,'Nama Lengkap',1,0,'C',1);
$pdf->SetX(80);
$pdf->Cell(25,8,'Jenis Kelamin',1,0,'C',1);
$pdf->SetX(95);
$pdf->Cell(15,8,'Tempat Lahir',1,0,'C',1);
$pdf->SetX(110);
$pdf->Cell(50,8,'Tanggal Lahir',1,0,'C',1);
$pdf->SetX(160);
$pdf->Cell(55,8,'Agama',1,0,'C',1);
$pdf->SetX(160);
$pdf->Cell(50,8,'Alamat Rumah',1,0,'C',1);
$pdf->SetX(160);
$pdf->Cell(50,8,'Kab. Kota',1,0,'C',1);
//$pdf->SetX(160);
// $pdf->Cell(50,8,'Provinsi',1,0,'C',1); //
// $pdf->SetX(160);
// $pdf->Cell(50,8,'Kode Pos',1,0,'C',1); //
$pdf->SetX(160);
$pdf->Cell(50,8,'Telp',1,0,'C',1);
//$pdf->SetX(160);
// $pdf->Cell(50,8,'Pendidikan',1,0,'C',1); //
$pdf->SetX(160);
$pdf->Cell(50,8,'Jurusan',1,0,'C',1);
$pdf->SetX(160);
$pdf->Cell(50,8,'Tahun Kelulusan',1,0,'C',1);
$pdf->SetX(160);
// $pdf->Cell(50,8,'Pekerjaan',1,0,'C',1); //
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

// $pdf->SetY($Y_Table_Position);
// $pdf->SetX(5);
// $pdf->MultiCell(20,6,$column_id,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(25);
$pdf->MultiCell(55,6,$column_nama_lengkap,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(25,6,$column_jk,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(15,6,$column_tempat_lahir,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(50,6,$column_tanggal_lahir,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55,6,$column_agama,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55,6,$column_alamat_rumah,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55,6,$column_kab_kota,1,'C');

// $pdf->SetY($Y_Table_Position);
// $pdf->SetX(160);
// $pdf->MultiCell(55,6,$column_provinsi,1,'C');

// $pdf->SetY($Y_Table_Position);
// $pdf->SetX(160);
// $pdf->MultiCell(55,6,$column_kodepos,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55,6,$column_telp,1,'C');

// $pdf->SetY($Y_Table_Position);
// $pdf->SetX(160);
// $pdf->MultiCell(55,6,$column_pendidikan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55,6,$column_jurusan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55,6,$column_tahun_kelulusan,1,'C');

// $pdf->SetY($Y_Table_Position);
// $pdf->SetX(160);
// $pdf->MultiCell(55,6,$column_pekerjaan,1,'C');

$pdf->Output();
?>
