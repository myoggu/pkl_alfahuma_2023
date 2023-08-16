-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Agu 2023 pada 00.52
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesarci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Isi` varchar(10000) NOT NULL,
  `Tanggal_dibuat` date NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `Judul`, `Isi`, `Tanggal_dibuat`, `foto`, `status`) VALUES
(1, 'Meeting Evaluasi Aplikasi Integrasi Portal Pelayanan Perizinan Pertanian Terintegrasi (P3T)', 'Bogor, 15 Mei 2023, Meeting Evaluasi Aplikasi Integrasi Portal Pelayanan Perizinan Pertanian Terintegrasi (P3T)', '2023-05-15', 'pnrbad.png', 0),
(2, 'Selamat memperingati hari kenaikan Isa Almasih.', 'Selamat memperingati hari kenaikan Isa Almasih.', '2023-05-18', '2.png', 0),
(3, 'Meeting Sinkronisasi Data Kepegawaian Aplikasi EPerjadin.\nKementerian Pertanian', 'Meeting Sinkronisasi Data Kepegawaian Aplikasi EPerjadin.\nKementerian Pertanian', '2023-05-23', '3.png', 1),
(16, 'Training Penggunaan Aplikasi E-Form Hari ke-1\nPT. Multi Nitrotama Kimia', 'Training Penggunaan Aplikasi E-Form Hari ke-1\nPT. Multi Nitrotama Kimia', '2023-05-24', '4.png', 1),
(17, 'Meeting Evaluasi dan Serah Terima Aplikasi Portal Pelayanan Perizinan Pertanian Terintegrasi (P3T).\n', 'Meeting Evaluasi dan Serah Terima Aplikasi Portal Pelayanan Perizinan Pertanian Terintegrasi (P3T).\nKementerian Pertanian', '2023-05-31', '5.png', 1),
(18, 'Selamat Hari Lahir Pancasila, 1 Juni 2023', 'Selamat Hari Lahir Pancasila, 1 Juni 2023', '2023-06-01', '6.png', 1),
(19, 'Selamat Hari Raya Waisak 2567, 4 Juni 2023', 'Selamat Hari Raya Waisak 2567, 4 Juni 2023', '2023-06-04', '7.png', 1),
(20, 'Anda membutuhkan jasa Konsultan IT untuk digitalisasi proses bisnis ? kami sediakan solusinya. Layan', 'Anda membutuhkan jasa Konsultan IT untuk digitalisasi proses bisnis ? kami sediakan solusinya. Layanan yang kami tawarkan meliputi :\n\n1. Custom Application Development\n2. Data Warehouse & Dashboard BI\n3. E-Goverment\n4. Mobile Apps Development\n5. System Integration\n6. Internet of Thing.\n\nInformasi lebih detail dapat menghubungi tim analyst ??? kami di nomor 0896-9493-3060 atau email ke info@alfahuma.tech', '2023-06-05', '8.png', 0),
(21, 'Perwakilan dari tim Smartsoft menghadiri Pertemuan  Sistem Informasi Pengelolaan Barang Milik Negara', 'Jakarta, 14 Juni 2023. Perwakilan dari tim Smartsoft menghadiri Pertemuan di Ruang Rapat 721 Gedung A Lantai 7. Saudari Aria selaku project asistant sedang melakukan diskusi dengan Biro Keuangan Barang Milik Negara (KBMN) terkait aplikasi Sistem Informasi Pengelolaan Barang Milik Negara (SIPABMN).', '2023-06-14', 'TTD1.png', 1),
(22, 'Perwakilan dari tim Smartsoft menghadiri Pertemuan terkait aplikasi Sistem Informasi Pengelolaan Bar', 'Jakarta, 14 Juni 2023. Perwakilan dari tim Smartsoft menghadiri Pertemuan di Ruang Rapat 721 Gedung A Lantai 7. Saudari Aria selaku project asistant sedang melakukan diskusi dengan Biro Keuangan Barang Milik Negara (KBMN) terkait aplikasi Sistem Informasi Pengelolaan Barang Milik Negara (SIPABMN).', '2023-06-14', '10.png', 1),
(23, ' Perwakilan tim Smartsoft menghadiri Pertemuan terkait progress Aplikasi Sistem Informasi Evaluasi d', 'Jakarta, 20 Juni 2023. Perwakilan tim Smartsoft menghadiri Pertemuan di Ruang Rapat Bidang Pusat Penyuluhan Pertanian. Pak Kasahana Indra selaku Project Manager sedang melakukan diskusi dengan Bidang Pusat Penyuluhan Pertanian terkait progress Aplikasi Sistem Informasi Evaluasi dan Pelaporan Penyuluh Pertanian (EPUSLUH).', '2023-06-20', '1.png', 1),
(24, 'Perwakilan tim Smartsoft menghadiri Pertemuan di Hotel Holiday Inn Bandung Pasteu  untuk demo aplika', 'Bandung, 22 Juni 2023. Perwakilan tim Smartsoft menghadiri Pertemuan di Hotel Holiday Inn Bandung Pasteur. Saudara Arby selaku Project Manager dan Saudari Aria selaku Project Asistant sedang melakukan pendampingan dengan Biro Keuangan dan Barang Milik Negara terkait Pendampingan untuk demo aplikasi Sistem Informasi Pengelolaan Barang Milik Negara (SIPABMN) dan aplikasi Elektronik Perjalanan Dinas (EPERJADIN).', '2023-06-22', '21.png', 1),
(25, 'Selamat Hari Raya Idul Adha 1444 H', 'Selamat Hari Raya Idul Adha 1444 H', '2023-06-29', '31.png', 0),
(26, 'Perwakilan tim Smartsoft menghadiri Pertemuan di Hotel Mercure Alam Sutera evaluasi Aplikasi Sistem ', 'Tangerang, 11 Juli 2023. Perwakilan tim Smartsoft menghadiri Pertemuan di Hotel Mercure Alam Sutera. Saudara Kasa Hana Indra selaku Project Manager sedang melakukan pendampingan dengan Bidang Pusat Penyuluhan Pertanian terkait evaluasi Aplikasi Sistem Informasi Evaluasi dan Pelaporan Penyuluh Pertanian (EPUSLUH).', '2023-07-11', '41.png', 1),
(27, 'Perwakilan tim Smartsoft menghadiri Pertemuan di ruang rapat Nusantara I Lt. 2 Gedung E, Badan Panga', 'Jakarta, 12 Juli 2023. Perwakilan tim Smartsoft menghadiri Pertemuan di ruang rapat Nusantara I Lt. 2 Gedung E, Badan Pangan Nasional. Saudari Aria selaku Project Asistant sedang melakukan pendampingan dengan Biro Organisasi Sumber Daya Manusia dan Hukum terkait pembahasan Aplikasi seleksi terbuka Jabatan Pimpinan Tinggi (JPT).', '2023-07-12', '51.png', 1),
(28, 'Selamat Tahun Baru Islam 1445 H kepada seluruh rekan kerja dan klien PT Alfahuma Rekayasa Teknologi ', 'Selamat Tahun Baru Islam 1445 H kepada seluruh rekan kerja dan klien PT Alfahuma Rekayasa Teknologi (Smartsoft).\nKami berharap tahun baru ini membawa kesuksesan dan kemajuan bagi kita semua. Mari kita terus bekerja sama dan mendorong pertumbuhan yang berkelanjutan. Selamat tahun baru, semoga penuh keberkahan dan kebahagiaan! ', '2023-07-19', '61.png', 0),
(29, 'Perwakilan tim Smartsoft menghadiri Pertemuan di Gedung Publik Lt. 2 PT Bio Farma (Persero)', 'Bandung, 17 Juli 2023. Perwakilan tim Smartsoft menghadiri Pertemuan di Gedung Publik Lt. 2 PT Bio Farma (Persero). Saudara Kasa Hana Indra Pratama selaku Project Manager sedang melakukan pendampingan dengan Divisi User (LSP) PT Bio Farma (Persero) terkait pembahasan Kick-Off Aplikasi Lembaga Sertifikasi Profesi (LSP).', '2023-07-17', '71.png', 0),
(30, 'Perwakilan tim Smartsoft menghadiri Pertemuan di Hotel Bumi Wiyata Depok. ', 'Depok, 18 Juli 2023. Perwakilan tim Smartsoft menghadiri Pertemuan di Hotel Bumi Wiyata Depok. Saudara Arby Sudewa selaku Project Manager sedang melakukan pendampingan dengan Biro Keuangan dan Barang Milik Negara terkait pembahasan Pengembangan Aplikasi BASTBANPEM Tahun 2023.', '2023-07-18', '81.png', 0),
(31, 'Perwakilan tim Smartsoft menghadiri pertemuan di ruang rapat Bidang Pusat Penyuluhan Pertanian. S', 'Jakarta, 25 Juli 2023. Perwakilan tim Smartsoft menghadiri pertemuan di ruang rapat Bidang Pusat Penyuluhan Pertanian. Saudara Kasa Hana Indra Pratama selaku Project Manager dan Saudari Aria selaku Project Asistant sedang melakukan pendampingan dengan Bidang Pusat Penyuluhan Pertanian terkait progress Aplikasi Sistem Informasi Evaluasi dan Pelaporan Penyuluhan Pertanian (EPUSLUH).', '2023-07-25', '101.png', 0),
(32, 'Perwakilan tim Smartsoft menghadiri pertemuan di ruang rapat Hotel Intercontinental Bali Resort. ', 'Bali, 8 - 10 Agustus 2023. Perwakilan tim Smartsoft menghadiri pertemuan di ruang rapat Hotel Intercontinental Bali Resort. Saudari Urratul Aqyuni selaku Project Lead sedang melakukan pendampingan dengan perwakilan Otoritas Jasa Keuangan terkait agenda User Acceptance Test Aplikasi Sistem Perizinan Terintegrasi (SPRINT) OJK.', '2023-08-10', 'TTD.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `jenis`) VALUES
(1, 'Backend Developer'),
(2, 'Frontend Developer'),
(3, 'Project Asisstant\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `level` varchar(11) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member'),
(4, 's', '03c7c0ace395d80182db07ae2c30f034', 'member'),
(5, 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'member'),
(6, 'd', '8277e0910d750195b448797616e091ad', 'member'),
(7, 'yoggy', '64091d9b2a52eaaef7bd07bbd87b2b7d', 'member'),
(8, 'zxc', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'member'),
(9, 'zxcw', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'member'),
(10, 'c', '4a8a08f09d37b73795649038408b5f33', 'member'),
(11, 'da', '5ca2aa845c8cd5ace6b016841f100d82', 'member'),
(12, 'a', '202cb962ac59075b964b07152d234b70', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
