-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2020 pada 13.49
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `berlaku` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `tanggal`, `judul`, `isi`, `berlaku`) VALUES
(3, '2012-12-06', 'Kurikulum Baru Hanya Untungkan Penerbit Buku', '<p>\r\n	<strong>JAKARTA</strong>--Koalisi Pendidikan, praktisi pendidikan, Persekutuan Gereja-Gereja di Indonesia, Federasi Serikat Guru Indonesia, orangtua murid, dan Indonesia Corruption Watch (ICW) secara tegas menolak perubahan kurikulum pendidikan yang diatur dalam Kurikulum Tingkat Satuan Pendidikan (KTSP) 2006 menjadi Kurikulum 2013.<br />\r\n	<br />\r\n	Menurut Direktur Eksekutif Sekolah Tanpa Batas (STB), Bambang Wisudo, perubahan kurikulum tidak memiliki latar belakang yang kuat dan terkesan terburu-buru. Alih-alih menyempurnakan kurikulum yang ada, perubahan ini menuurtnya justru seperti membongkar secara keseluruhan kurikulum yang ada dan tidak dapat menjamin pendidikan di Indonesia menjadi lebih baik.<br />\r\n	<br />\r\n	&quot;Perubahan ini dilakukan secara reaktif tanpa ada visi yang jelas mengenai pendidikan. Perubahan ini hanya menguntungkan penerbit buku,&quot; kata Bambang dalam jumpa pers di kantor ICW, Jakarta Selatan, Rabu (5/12).<br />\r\n	<br />\r\n	Sementara itu praktisi pendidikan dan tokoh agama, Romo Benny Susetyo mengungkapkan sebaiknya anggaran negara untuk kurikulum 2013 ini dipakai untuk meningkatkan kualitas guru dan memperbaiki infrastruktur pendidikan.<br />\r\n	<br />\r\n	&quot;Kita sebaiknya menyelamatkan anggaran negara. Kalau disiapkan buku untuk ini, tapi lalu program kurikulumnya tidak berhasil, mau dikemanakan buku-buku ini? Padahal sudah menggunakan anggaran,&quot; terang Romo Benny.<br />\r\n	<br />\r\n	Hal serupa diungkapkan Jeirry Sumampow dari PGI. Ia mengatakan perubahan kurikulum yang bermasalah menjadi indikator kualitas masyarakat Indonesia pada lima hingga 10 tahun ke depan. Perubahan dinilai asal-asalan dan dipaksakan.<br />\r\n	<br />\r\n	&quot;Ini bukan masalah yang kecil, ini masalah masa depan bangsa. Capaiannya secara konkret itu gimana. Karena semuanya ngambang&nbsp; di kurikulum baru. Kurikulum ini penting karena menyangkut masa depan bangsa. Kami mengambil posisi menolak,&quot; tegas Jeirry.<br />\r\n	<br />\r\n	Mereka juga mengajak masyarakat bergerak untuk menolak perubahan kurikulum tidak didasari oleh paradigma yang jelas mengenai pendidikan. Para pemeharti pendidikan ini mengungkap, orientasi pendidikan harus mengacu pada konstitusi yaitu mencerdaskan kehidupan bangsa bukan pada selera kebutuhan pasar.</p>\r\n', '2013-01-26'),
(4, '2012-12-06', 'Gunakan Metode E-Learning di UAS', '<p>\r\n	<strong>TASIK</strong>- Menyesuaikan dengan berkembang pesatnya tekhnologi informasi saat ini. SMK TI Dadaha Imformatik Tasikmalaya terus berinovasi guna meningkatkan kompetensi para muridnya. Hal ini dibuktikan dengan diterapkannya metode pembelajaran berbasis komputerisasi.&nbsp; Salah satunya diterapkan saat ujian akhir sekolah (UAS) yang dilakukan dengan cara e-learning. <br />\r\n	<br />\r\n	Wakasek Kurikulum Andi Krisnandi SPd menjelaskan semua mata pelajaran kelas X dan XI diujikan menggunakan e-learning. Dengan tujuan untuk memperdalam keahlian di bidang tekhnologi infomasi. Terutama mengenai komputerisasi. <br />\r\n	<br />\r\n	&quot;Untuk menyesuaikan dengan perkembangan zaman juga. Dan nantinya mereka tidak canggung lagi untuk mengerjakan soal-soal tes yang memanfaatkan teknolgi informasi,&quot; ungkapnya saat diwawancara disela pelaksanaan UAS, Rabu (5/12).<br />\r\n	<br />\r\n	Menurutnya metode ujian e-learning dinilai efektif untuk meningkatkan komptensi siswanya. &quot;Setiap mata pelajaran diberi waktu 30 menit untuk mengerjakan. Setelah selesai ujiannya, hasil bisa langsung diketahui. Dan akan tahu juga siapa yang akan di-remidial.&nbsp; Sementara untuk kelas XII ujiannya kembali lagi ke ujian tertulis,&quot; tuturnya.<br />\r\n	<br />\r\n	&quot;Dengan metode ini menimalisasi budaya nyontek juga. Karena waktunya terbatas hanya 30 menit. Selain itu membuat para siswa bersungguh-sungguh untuk mengikuti ujian. Karena untuk di-remedial mereka harus mengikuti semester pendek seperti di perguruan tinggi,&quot; tambahnya<br />\r\n	<br />\r\n	Andi mengatakan setiap tahun aplikasi yang digunakan selalu diperbaharui. Lanjut dia, soal ujian yang dikerjakan berbentuk pilihan ganda dan listening.<br />\r\n	&quot;Metode e-learning ini sudah empat tahun diterapkan di sini dan terbukti sangat efektif,&quot; tandasnya.<br />\r\n	<br />\r\n	Kepala SMK TI Dadaha Informatik Tasikmalaya, Yusuf Supriadi SE MM menegaskan metode ujian dengan e-learning memang efektif dan efisien. Terlebih sesuai dengan konsep teknologi informasi yang menjadi keunggulan sekolahnya.<br />\r\n	<br />\r\n	&quot;Ini lebih efektif efisien, ujiannya tidak harus menggunakan kertas. Karena mereka memanfaatkan fasilitas dan sarana yang dimiliki sekolah. Sehingga mudah-mudahan bisa menjadi budaya karena memang kemajuan teknologi informasi ke depan akan meningkat,&quot; ujarnya.<br />\r\n	<br />\r\n	Dia menambahkan ke depannya sekolah akan terus meningkatkan sarana dan prasarana. Serta membangun gedung dan menambah fasilitas yang lebih representatif.&quot;Insya Allah akan terus ditingkatkan sarana dan prasarana. Rencananya kami juga akan membangun gedung baru,&quot; tutupnya.</p>\r\n', '2013-01-23'),
(5, '2019-12-13', 'waow', '<p>\r\n	asuss</p>\r\n', '2019-12-14'),
(6, '2019-12-17', 'KPK Tetapkan Tersangka Baru Kasus Pengadaan di Kemenag', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Helvetica, Arial, Tahoma; font-size: 18px;">KPK menetapkan tersangka baru terkait proyek pengadaan di Kemenag tahun 2011. Tersangka tersebut merupakan seorang pejabat di Direktorat Jenderal Pendidikan Islam Kemenag</span></p>\r\n', '2020-01-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id` smallint(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `singkatan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `singkatan`) VALUES
(1, 'multimedia', 'MM'),
(2, 'teknik komputer jaringan', 'TKJ'),
(3, 'rekayasa perangkat Lunak', 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE IF NOT EXISTS `lamaran` (
`id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `pernahkerja` varchar(30) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lamaran`
--

INSERT INTO `lamaran` (`id`, `id_pendaftar`, `id_lowongan`, `id_perusahaan`, `pernahkerja`, `nama_file`) VALUES
(1, 22, 35, 8, 'Pernah', 'Skeleton-2.0.4.zip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
`id` smallint(6) NOT NULL,
  `id_per` smallint(6) NOT NULL,
  `isi` text NOT NULL,
  `berlaku` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `wilayah` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `id_per`, `isi`, `berlaku`, `tgl_mulai`, `judul`, `wilayah`) VALUES
(5, 2, '<p>\r\n	-sma</p>\r\n<p>\r\n	-berpengalaman</p>\r\n<p>\r\n	-minimal 25 thn</p>\r\n', '2020-01-23', '2019-12-19', 'a', ''),
(6, 2, '<p>\r\n	-sma</p>\r\n<p>\r\n	-berpengalaman</p>\r\n<p>\r\n	-minimal 25 thn</p>\r\n', '2020-01-23', '2019-12-19', 'a', ''),
(9, 2, '<p>\r\n	l;mll</p>\r\n', '2019-12-21', '2019-12-23', 'maju mapan', ''),
(13, 4, '<p>\r\n	U17</p>\r\n', '2020-01-15', '2019-12-28', 'ADMINITRASI', ''),
(21, 4, '<div -webkit-box-align:="" align-items:="" class="serpvj-MessageContainer" color:="" display:="" font-size:="" helvetica="" margin-top:="" noto="" style="-webkit-font-smoothing: antialiased; box-sizing: border-box;">\r\n	<div class="serpvj-UrgentlyHiringMessage" style="display: flex; -webkit-box-align: center; align-items: center; -webkit-font-smoothing: antialiased; box-sizing: border-box;">\r\n		<div class="serpvj-UrgentlyHiringMessage-text" style="font-size: 0.875rem; line-height: 1.25rem; font-weight: bold; -webkit-font-smoothing: antialiased; box-sizing: border-box; text-align: justify;">\r\n			Dibutuhkan segera Karyawan</div>\r\n	</div>\r\n</div>\r\n<div class="jobMetadataHeader" color:="" font-size:="" helvetica="" noto="" style="margin-top: 1rem; -webkit-font-smoothing: antialiased; box-sizing: border-box;">\r\n	<div class="jobMetadataHeader-itemWithIcon icl-u-textColor--secondary" style="-webkit-font-smoothing: antialiased; box-sizing: border-box; margin-bottom: 0.75rem; margin-top: 0.25rem; text-align: justify;">\r\n		<span class="jobMetadataHeader-itemWithIcon-label" style="unicode-bidi: embed; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 1rem; letter-spacing: 0px; line-height: 1.38; vertical-align: bottom; margin-left: 1rem;">dengan gaji Rp. 2.200.000 - Rp. 2.500.000 per bulan</span></div>\r\n	<div class="jobMetadataHeader-itemWithIcon icl-u-textColor--secondary" style="-webkit-font-smoothing: antialiased; box-sizing: border-box; margin-bottom: 0.75rem; margin-top: 0.25rem; text-align: justify;">\r\n		&nbsp;</div>\r\n	<div class="jobMetadataHeader-itemWithIcon icl-u-textColor--secondary" style="-webkit-font-smoothing: antialiased; box-sizing: border-box; margin-bottom: 0.75rem; margin-top: 0.25rem;">\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			Syarat:</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- SMA/SMK Diterima</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Dapat berkomunikasi dengan baik dan sopan</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Dapat menggunakan komputer (Email, Microsoft)</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			Tugas General Admin:</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Melayani Customer untuk menerima order</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Melakukan pengecekan stok barang dan bahan</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Mengoperasikan logistik pengiriman untuk setiap order</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Melakukan penyetokan ulang (purchasing)</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Membuat laporan stok per hari</p>\r\n		<p style="margin: 0px 0px 1em; -webkit-font-smoothing: antialiased; box-sizing: border-box; font-size: 13.3333px; text-align: justify;">\r\n			- Membuat laporan penjualan per Minggu</p>\r\n	</div>\r\n</div>\r\n', '2020-01-04', '2019-12-28', 'ADMINITRASI', ''),
(22, 4, '<p>	persyaratan</p><ol>	<li>		SMA/SMK</li>	<li>		Usia 18 s/d 30 tahun</li>	<li>		tanggung jawab dan tangguh</li>	<li>		kratif</li>	<li>		Jujur</li></ol><p>	Lokasi</p><ul>	<li>		Surabaya</li>	<li>		Mojokerto</li></ul>', '2020-01-13', '2020-01-12', 'Adminitrasi', 'Surabaya'),
(33, 6, '<p>\r\n	Kriteria:</p>\r\n<p>\r\n	- Domisili di Surabaya</p>\r\n<p>\r\n	- Jujur</p>\r\n<p>\r\n	- Ulet</p>\r\n<p>\r\n	- Tekun</p>\r\n<p>\r\n	Persyaratan</p>\r\n<p>\r\n	- Ijasah SMA/SMK</p>\r\n<p>\r\n	- Surat Keterangan kelakuan baik</p>\r\n<p>\r\n	- Daftar Riwayat Hidup</p>\r\n', '2020-01-15', '2020-01-14', 'Perternakan', 'Surabaya'),
(34, 8, '<p>\r\n	ulet</p>\r\n<p>\r\n	jujur</p>\r\n<p>\r\n	rajin</p>\r\n', '2020-01-16', '2020-01-14', 'Sekertaris', 'surabaya'),
(35, 8, '<p>\r\n	ulet</p>\r\n<p>\r\n	jujur</p>\r\n<p>\r\n	rajin</p>\r\n', '2020-01-18', '2020-01-16', 'Sekertaris', 'surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
`id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `telp` varchar(32) NOT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kuliah` varchar(70) DEFAULT NULL,
  `tahun_kelulusan` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_rumah`, `kab_kota`, `provinsi`, `kodepos`, `telp`, `pendidikan`, `jurusan`, `kuliah`, `tahun_kelulusan`, `level`, `pekerjaan`) VALUES
(17, 'imaaad', 'prass', 'Mayang Sari', 'perempuan', 'surabaya', '2019-12-20', 'islam', 'surabaya', 'surabaya', 'jatim', '8779', '8080', 'sma', '1', '-', '2016', 0, 'marketing'),
(20, 'admin', 'admin', 'Siti Chasanah', 'laki-laki', 'kediri kali', '2012-12-09', 'islam', 'pare', 'kediri', 'jatim', '9890', '989', 'sma', '2', '-', '2019', 1, 'marketing'),
(22, 'adminimad', 'e4a7fe5e3609225d21f06ea1a104581d', 'Imaddudin Al Asfahani', 'laki-laki ', 'Lamongan', '1997-03-21', 'Islam', 'Lamongan', 'Lamongan', 'Jawa Timur', '61253', '', '', '3', '-', '', 1, 'sales'),
(28, 'pras12', '827ccb0eea8a706c4c34a16891f84e7b', 'Edy Prasetyo', ' laki-laki', 'kediri', '0000-00-00', 'islam', 'kediri', 'kediri', 'jawa timur', '64293', '081233939641', 'SMA', '1', '-', '2019', 0, 'sembarang'),
(29, 'imadadmin', '827ccb0eea8a706c4c34a16891f84e7b', 'Wahyu Aji Purwanto', ' laki - laki', 'kediri', '0000-00-00', 'islam', 'lamongan', 'jmp', 'jawa timur', '56565', '081233939641', 'smk', '2', '-', '2018', 0, 'mandor'),
(31, 'qwerty', '827ccb0eea8a706c4c34a16891f84e7b', 'Arif Susanto', 'laki-laki', 'pare', '2019-12-31', 'kongquan', 'kediri', 'kediri', 'jawa timur', '64293', '081233939641', 'SMA', '3', '-', '2015', 1, 'marketing'),
(33, 'dayyat', '827ccb0eea8a706c4c34a16891f84e7b', 'Nur Hidayat', 'laki-laki ', 'sidoarjo', '2010-11-30', 'Islam', 'Buncitan', 'Benjeng', 'Jawa Barat', '', '', '', '0', '-', '', 0, 'marketing'),
(37, 'beli', '827ccb0eea8a706c4c34a16891f84e7b', 'Bellya Alya', 'perempuan ', 'situbondo', '1999-08-27', 'Islam', 'kebraon selatan', 'surabaya', 'jawa timur', '87937', '0823339173', 'SMK', '1', '-', '2017', 0, '-'),
(39, 'zahro', 'c2ef37b8f44fb2633aca41e2d09c1522', 'Zahra', 'perempuan ', 'kebraon', '2018-11-29', 'Islam', 'mojosari kulon dewe', 'sidoarjo', 'jawa timur', '10002', '8798', 'sma', '1', '-', '2015', 1, 'marketing'),
(44, 'riski', '827ccb0eea8a706c4c34a16891f84e7b', 'Risky Febriansyah', 'Laki-Laki ', '2015', '1997-06-18', 'islam', 'surabaya', 'malang', 'jawa barat', '87687', '0837465926', 'SMA', 'Teknik Komputer Jaringan', '-', '2016', 1, '-'),
(45, 'azammm', '827ccb0eea8a706c4c34a16891f84e7b', 'Azam Putra Siregar', 'Laki-Laki ', 'Sidoarjo', '2020-01-11', 'Islam', 'Jln. Semampir Tengah, Gang 3, No.11', 'Surabaya', 'Jawa timur', '64952', '081233939641', 'SMKi', 'Teknik komputer jaringan', 'universitas dinamika', '2016', 0, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
`id` smallint(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `bidang` varchar(120) NOT NULL,
  `status` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kodepos` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `alamat`, `bidang`, `status`, `telepon`, `email`, `kodepos`) VALUES
(1, 'PT. SINAR SOSRO', 'Jl. Boulevard Artha Gading Kav A1 Sentra Bisnis Artha Gading â€“ Kelapa Gading - Jakarta Utara, 14240 ', 'Produksi', 'BUMN', '083672891', 'Kedirilagi@kedirikab.go.id', '936489'),
(5, 'PT.Dayyat mapan', 'jl.Buncitan no11 Sidoarjo, Jawa Timur', 'Perternakan', 'Swasta', '0812228978541', 'Dayyyatnur@Mapan.com', '98329'),
(6, 'PT.Pokpan Tbk.', 'Jln.Semampir Tengah, Gang 3 no 11, Surabaya', 'Perternakan', 'Swasta', '081233938642', 'pokpan@jaya.ac.id', '647890'),
(8, 'PT. Menanggal Jaya Tbk.', 'Jln.Semampir Tengah, Gang 3 no 11, Surabaya', 'Manufaktur', 'Swasta', '09374688', 'menanggal@jaya.go.id', '89469');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` tinyint(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `bagian` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama`, `alamat`, `bagian`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'Edy Prasetyo', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
