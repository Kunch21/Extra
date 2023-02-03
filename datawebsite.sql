-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2022 pada 05.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datawebsite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_kkr`
--

CREATE TABLE `event_kkr` (
  `id` int(3) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `isi` varchar(800) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event_kkr`
--

INSERT INTO `event_kkr` (`id`, `judul`, `isi`, `image`) VALUES
(1, 'Coming Soon!', 'Coming Soon!', '6272lg3ls1k040mhn0njh3ll3m.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_pks`
--

CREATE TABLE `event_pks` (
  `id` int(3) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `isi` varchar(800) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event_pks`
--

INSERT INTO `event_pks` (`id`, `judul`, `isi`, `image`) VALUES
(1, 'Pelantikan Anggota Baru 2022/2023', 'PKS sedang melakukan pelantikan anggota baru yang dilaksanakan tanggal 30 September 2022 hingga - 4 Oktober 2022. Sebagaimana yang sudah dilakukan pada tahun-tahun sebelumnya, hal ini sudah menjadi kewajiban untuk dilakukan pelantikan anggota baru setiap tahun. Dalam 1 kelas diwajibkan minimal 3 orang melakukan pendaftaran, tetapi syarat juga berlaku dalam pendaftaran PKS ini, syarat-syarat tersebut antara lain yang pertama Siswa/siswi kelas X, kedua memiliki tekad dan niat dalam berorganisasi, ketiga dapat menjalankan tugas dengan amanah, terakhir mengisi dan mengumpulkan formulir pendaftaran. Seleksi akan dilaksanakan tanggal 8 Oktober 2022.', 'pks2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_pramuka`
--

CREATE TABLE `event_pramuka` (
  `id` int(3) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `isi` varchar(800) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event_pramuka`
--

INSERT INTO `event_pramuka` (`id`, `judul`, `isi`, `image`) VALUES
(1, 'Kemah 2022/2023', 'Sudah menjadi tradisi dalam Pramuka untuk setiap tahun melakukan kemah, hal ini merupakan syarat untuk naiknya ke kelas 11. Kemah yang dilaksanakan untuk ajaran tahun 2022/2023 ini akan dilaksanakan pada tahun depan, dan bersifat wajib kepada seluruh kelas 10 untuk kenaikan kelas.', '2750a97b-965e-4ceb-a297-e770b36b9885.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_kkr`
--

CREATE TABLE `galeri_kkr` (
  `id_glri` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_kkr`
--

INSERT INTO `galeri_kkr` (`id_glri`, `image`) VALUES
(1, 'kkr1.JPG'),
(2, 'kkr2.JPG'),
(3, 'kkr3.JPG'),
(4, 'kkr4.jpeg'),
(5, 'kkr5.jpeg'),
(6, 'kkr6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_pks`
--

CREATE TABLE `galeri_pks` (
  `id_glri` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_pks`
--

INSERT INTO `galeri_pks` (`id_glri`, `image`) VALUES
(2, 'pks.jpeg'),
(5, 'pks1.png'),
(6, 'pks2.jpeg'),
(7, 'pks3.png'),
(8, 'pks4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_pramuka`
--

CREATE TABLE `galeri_pramuka` (
  `id_glri` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_pramuka`
--

INSERT INTO `galeri_pramuka` (`id_glri`, `image`) VALUES
(2, 'pramuka1.JPG'),
(3, 'pramuka3.JPG'),
(4, 'pramuka4.JPG'),
(5, 'pramuka2.JPG'),
(6, 'pramuka5.JPG'),
(7, 'pramuka6.JPG'),
(8, 'pramuka7.JPG'),
(9, 'pramuka8.jpg'),
(10, 'pramuka9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kkr`
--

CREATE TABLE `jadwal_kkr` (
  `id_keg` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `pembimbing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_kkr`
--

INSERT INTO `jadwal_kkr` (`id_keg`, `nama_kegiatan`, `hari`, `jam`, `tempat`, `pembimbing`) VALUES
(1, 'Extra PMR', 'Senin (Kelas XI) &amp; Selasa (Kelas X)', '00.00 - 00.00', 'Lingkungan Sekolah', 'Kak Gama (PMI Bantul)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pks`
--

CREATE TABLE `jadwal_pks` (
  `id_keg` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `pembimbing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_pks`
--

INSERT INTO `jadwal_pks` (`id_keg`, `nama_kegiatan`, `hari`, `jam`, `tempat`, `pembimbing`) VALUES
(1, 'Lalu Lintas', 'Senin-Jumat', '06.20 - 07.00', 'Area Lingkungan Sekolah', 'Widodo S.Pd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pramuka`
--

CREATE TABLE `jadwal_pramuka` (
  `id_keg` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `pembimbing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_pramuka`
--

INSERT INTO `jadwal_pramuka` (`id_keg`, `nama_kegiatan`, `hari`, `jam`, `tempat`, `pembimbing`) VALUES
(1, 'Pramuka', 'Jumat', '15.00 - 17.00', 'Lapangan Sekolah', 'Widodo S.Pd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing_kkr`
--

CREATE TABLE `pembimbing_kkr` (
  `id_pemb` int(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing_kkr`
--

INSERT INTO `pembimbing_kkr` (`id_pemb`, `nama`, `alamat`, `no_hp`, `image`) VALUES
(1, 'Yanu Iswantara', '-', '081264743537', 'pakyanu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing_pks`
--

CREATE TABLE `pembimbing_pks` (
  `id_pemb` int(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing_pks`
--

INSERT INTO `pembimbing_pks` (`id_pemb`, `nama`, `alamat`, `no_hp`, `image`) VALUES
(1, 'Widodo S.PD', 'Bantul', '081392570075', 'widodo.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing_pramuka`
--

CREATE TABLE `pembimbing_pramuka` (
  `id_pemb` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing_pramuka`
--

INSERT INTO `pembimbing_pramuka` (`id_pemb`, `nama`, `alamat`, `no_hp`, `image`) VALUES
(1, 'Mujari, S.Pd., M.Pd.', '-', '-', 'person.png'),
(2, 'Tatik Wardayati, S.Pd', '-', '-', 'person.png'),
(3, 'Sujar Hartono', '-', '-', 'person.png'),
(4, 'Widodo', '-', '081392570075', 'person.png'),
(5, 'Ajeng', '-', '-', 'person.png'),
(6, 'Tri Manunggal', '-', '-', 'person.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_kkr`
--

CREATE TABLE `pengurus_kkr` (
  `id_pgrs` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurus_kkr`
--

INSERT INTO `pengurus_kkr` (`id_pgrs`, `nama`, `jabatan`, `no_hp`, `alamat`, `image`) VALUES
(1, 'Candra Aptu Rendi', 'Ketua', '085600629684', 'Kajor Kulon, Selopamioro, Imogiri, Bantul.', 'person.png'),
(2, 'Marcha Faifilia', 'Wakil', '081319112208', 'Bakalan, Pendowoharjo, Sewon, Bantul', 'person.png'),
(3, 'Erni Mandasari', 'Sekretaris 1', '088806187853', 'Kweni, Panggungharjo, Sewon, Bantul', 'person.png'),
(4, 'Rommy Mutyaningsih', 'Sekretaris 2', '088232808960', 'Gondangan RT 01, Trimulyo, Kretek, Bantul', 'person.png'),
(5, 'Lalita Marcha', 'Bendahara 1', '082136008110', 'Panjang RT 03, Panjangrejo, Pundong, Bantul', 'person.png'),
(6, 'Anisa Puri Damayanti', 'Bendahara 2', '081904097977', 'Sragan, Pranti, Srihardono, Pundong, Bantul', 'person.png'),
(7, 'Rahma Fitria Ningrum', 'Koor PP-UKS', '0821139578247', 'Baros RT 03, Tirtohargo, Kretek, Bantul', 'person.png'),
(8, 'Dwi Utami', 'Koor PP-UKS', '083879773698', 'Ngaglik RT 31, Pendowoharjo, Sewon, Bantul', 'person.png'),
(9, 'Olifyano Fahrizal Al Firdaus', 'Koor PP-UKS', '082138950043', 'Kembanggede RT 02, Guwosari, Pajangan, Bantul', 'person.png'),
(10, 'Heni Erwanda Sari', 'Koor PP-UKS', '089668953490', 'Bakulan Kulon, Trirenggo, Bantul', 'person.png'),
(11, 'Celine Gabriel Sihaloho', 'Koor PIK-R', '083825962083', 'Glondong RT 01, Tirtonimolo, Kasihan, Bantul', 'person.png'),
(12, 'Aliffatuzzahra', 'Koor PIK-R', '087715450069', 'Tarudan Wetan RT 06, Bangunharjo, Sewon, Bantul', 'person.png'),
(13, 'Az-Zahra Bunga Amanda', 'Koor PIK-R', '081227562185', 'Gesikan 4 RT 02, Guwosari, Pajangan, Bantul', 'person.png'),
(15, 'Nabilah Astutiningtyas', 'Anggota', '085876049639', 'Cepor Kidul RT 07, Palbapang, Bantul', 'person.png'),
(16, 'Ratrisya Rahma Putri', 'Anggota', '085866160267', 'Karangasem, Seloharjo, Pundong, Bantul', 'person.png'),
(17, 'Nada Thirafi Rachman Putri', 'Anggota', '0895336747595', 'Miri RT 05, Sriharjo, Imogiri, Bantul', 'person.png'),
(18, 'Galuh Septiyani', 'Anggota', '081385727800', 'Potrobayan RT 05, Srihardono, Pundong, Bantul', 'person.png'),
(19, 'Rizki Retno Mawarti', 'Anggota', '081328696635', 'Translok, Karangrejek, Karangtengah, Imogiri, Bantul', 'person.png'),
(20, 'Aulia Putri Nugraheni', 'Anggota', '085693866948', 'Ngentak RT 01, Bangunjiwo, Kasihan, Bantul', 'person.png'),
(21, 'Fatikha Tictatiani', 'Anggota', '08972003208', 'Tanjung Karang RT 25, Patalan, Jetis, Bantul', 'person.png'),
(22, 'Asty Nur Liza ', 'Anggota', '087829986249', 'Jogodayoh RT 06, Sumbermulyo, Bambanglipuro, Bantul', 'person.png'),
(23, 'Revaleona Bondan Laily Ramadhani', 'Anggota', '0895631449145', 'Padokan Lor RT 05, Kasihan, Bantul', 'person.png'),
(24, 'Zhazcya Maharani', 'Anggota', '085848603158', 'Keyongan Lor RT 02, Sabdodadi, Bantul', 'person.png'),
(25, 'Nazilla Ayu Amelia', 'Anggota', '089513246977', 'Kalibatok RT 07, Bangunjiwo, Kasihan, Bantul', 'person.png'),
(26, 'Riska Noviana', 'Anggota', '08813759787', 'Dayu Gadingsari, Sanden, Bantul', 'person.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_pks`
--

CREATE TABLE `pengurus_pks` (
  `id_pgrs` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurus_pks`
--

INSERT INTO `pengurus_pks` (`id_pgrs`, `nama`, `jabatan`, `no_hp`, `alamat`, `image`) VALUES
(1, '', '', '', '', 'person.png'),
(2, 'Yahya Nur Wakhid', 'Ketua 2', '081411031814', 'Kauman RT 2, Wijirejo, Pandak, Bantul', 'person.png'),
(3, 'Anggi Regina Pramesti', 'Sekretaris 1', '085839592844', 'Dengkeng, Wukirsari, Imogiri, Bantul', 'person.png'),
(4, 'Selviyani Latifah', 'Sekretaris 2', '087813074791', 'Sentanan RT 05, Bangunjiwa, Kasihan, Bantul', 'person.png'),
(5, 'Anisa Wulandari', 'Bendahara 1', '081325316105', 'Srunggo 1 Selopamioro, Imogiri, Bantul', 'person.png'),
(6, 'Dian Meira Setiani', 'Bendahara 2', '089518096763', 'Jati Suharjo, Imogiri, Bantul', 'person.png'),
(7, 'Muhammad Nur Ardiansyah', 'Sie Dokumentasi 1', '082155392492', 'Jalan Bibis, Tamantirto, Kasihan, Bantul', 'person.png'),
(8, 'Dwi Utami', 'Sie Dokumentasi 2', '083879773698', 'Ngaglik RT 31, Pendowoharjo, Sewon, Bantul', 'person.png'),
(9, 'Devira Anggraeni', 'Sie Media 1', '085878504281', 'Gadungan Kepuh RT 02, Canden, Jetis, Bantul', 'person.png'),
(10, 'Nurcholis Majid Ibnu Pamungkas', 'Sie Media 2', '085712600252', 'Bobok Nambangan, Seloharjo, Pundong, Bantul', 'person.png'),
(11, 'Destiana Putri Amelia', 'Sie Napza 1', '08976635736', 'Bopongan Pandeyan, Bangunharjo, Sewon, Bantul', 'person.png'),
(12, 'Revani Alfiani Saputri', 'Sie Napza 2', '085601517264', 'Sidoharjo, Imogiri, Bantul', 'person.png'),
(13, 'Sahrul Indra Dwi Arya', 'Sie Napza 3', '08895112151', 'Kepuhan, Timbulharjo, Sewon, Bantul', 'person.png'),
(14, 'Ardika Ramadana', 'Sie Napza 4', '088221103442', 'Jaranan, Panggungharjo, Sewon, Bantul', 'person.png'),
(15, 'Luthfi Annisa', 'Sie Napza 5', '089612675848', 'Badegan, Bantul', 'person.png'),
(16, 'Radya Nabilla Putri', 'Sie Humas 1', '081328544117', 'Badan RT 02, Panjangrejo, Pundong, Bantul', 'person.png'),
(17, 'Zalfha Meila Quintadirla', 'Sie Humas 2', '087772054931', 'Salam, Patalan, Jetis, Bantul', 'person.png'),
(18, 'Luthfan Zakii', 'Sie Humas 3', '085712104859', 'Kentolan Kidul RT 04, Guwosari, Pajangan, Bantul', 'person.png'),
(19, 'Satria Ardi Pratama', 'Sie Lantas 1', '0831109155112', 'Tonayan, Kebonagung, Imogiri, Bantul', 'person.png'),
(20, 'Vericha Nabilla Indriyani', 'Sie Lantas 2', '083154569639', 'Desa Suruhan Gabusan RT 05, Timbulharjo, Sewon, Bantul', 'person.png'),
(21, 'Evita Nur Hikmah', 'Sie Lantas 3', '08995497918', 'Kembang Kadibeso, Sabdodadi, Bantul', 'person.png'),
(22, 'Pradipa Ardwiantara', 'Sie Lantas 4', '083863950073', 'Pandak RT 02, Wijirejo, Pandak, Bantul', 'person.png'),
(23, 'Terra Selvino', 'Sie Lantas 5', '08987402719', 'Jetak Mredo RT 01, Bangunharjo, Sewon, Bantul', 'person.png'),
(24, 'Yolanda Regita Rahma', 'Sie Lantas 6', '0895361901224', 'Plurugan, Tirtonirmolo, Kasihan, Bantul', 'person.png'),
(25, 'Muhammad Alvin Ramadhan', 'Sie Lantas 7', '08813823270', 'Pandak, Wijirejo, Pandak, Bantul', 'person.png'),
(26, 'Putri Isnaini ', 'Sie Lantas 8', '088221239913', 'Sungapan, Argodadi, Sedayu, Bantul', 'person.png'),
(27, 'Nayasti Srihaningsih', 'Sie Lantas 9', '088299359949', 'Gading, Giritirto, Purwosari, Gunungkidul', 'person.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_pramuka`
--

CREATE TABLE `pengurus_pramuka` (
  `id_pgrs` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurus_pramuka`
--

INSERT INTO `pengurus_pramuka` (`id_pgrs`, `nama`, `jabatan`, `no_hp`, `alamat`, `image`) VALUES
(1, 'Rukhan Nur Hidayat', 'Pradana 1', '0895359547855', 'Klegen, Gatak, Bangunharjo, Sewon, Bantul', 'person.png'),
(2, 'Zahra Rischa Putri', 'Pradana 2', '-', '-', 'person.png'),
(3, 'Ovic Febuana', 'Pemangku Adat 1', '-', '-', 'person.png'),
(4, 'Dita Dwi Pratiwi', 'Pemangku Adat 2', '083108835119', 'Mulekan 1, Tirtosari, Kretek, Bantul', 'person.png'),
(5, 'Tasya Bela Romadhoni', 'Kerani', '089649291622', 'Banaran, Sumberagung, Jetis, Bantul', 'person.png'),
(6, 'Shinta Nuril Ummah', 'Kerani', '081326656984', 'Sorogenen, Timbulharjo, Sewon, Bantul', 'person.png'),
(7, 'Iin Safani', 'Juru Uang', '085713879860', 'Klumprit Lor RT 05, Nogosari 2, Wukirsari, Imogiri, Bantul', 'person.png'),
(8, 'Davina Aurelia Chasanah', 'Juru Uang', '085848139845', 'Terong 1 RT 02, Terong, Dlingo, Bantul', 'person.png'),
(9, 'Winda Rizky Arivianti', 'Sie Giat', '0895392010056', 'Pajangan, Triwidadi, Pajangan, Bantul', 'person.png'),
(10, 'Mariah Alkibtiyah', 'Sie Giat', '-', '-', 'person.png'),
(11, 'Emia Nidha K', 'Sie Giat', '-', '-', 'person.png'),
(12, 'Anisa Beta Septiana', 'Sie Giat', '087839313490', 'Mayongan DK. XVI, Celan, Trimurti, Srandakan, Bantul', 'person.png'),
(13, 'Novi Fatika Fitrasari', 'Sie Perkap', '089612678740', 'Jejeran 1 RT 02, Wonokromo, Pleret, Bantul', 'person.png'),
(14, 'Nefa Kania Ardhani', 'Sie Perkap', '0895363170961', 'Ngabean RT 01, Triharjo, Pandak, Bantul', 'person.png'),
(15, 'Nastiti Sandra Rani', 'Sie Perkap', '081311448364', 'Mendiro RT 45/RW 21, Gulurejo, Lendah, Kulon Progo', 'person.png'),
(16, 'Alfino Galta', 'Sie Perkap', '-', '-', 'person.png'),
(17, 'Sabilla Ridhotul Afani', 'Sie Pubdok', '-', '-', 'person.png'),
(18, 'Meifa Wulandari', 'Sie Pubdok', '083109412828', 'Gunting, Gilangharjo, Pandak, Bantul', 'person.png'),
(19, 'Eriana Candra Ningrum', 'Sie Kewirausahaan', '085643705920', 'Gesikan RT 05, Panggungharjo, Sewon, Bantul', 'person.png'),
(20, 'Naya Kurniawati', 'Sie Kewirausahaan', '0895324104782', 'Brajan, Wonokromo, Pleret, Bantul', 'person.png'),
(21, 'Erika Cahyaningrum', 'Sie Humas', '083861084463', 'Bayuran DK. Sawahan, Sumberagung, Jetis, Bantul', 'person.png'),
(22, 'Brian Kurnia', 'Sie Humas', '088238248547', 'Bolon RT 02, Palbapang, Bantul', 'person.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_kkr`
--

CREATE TABLE `prestasi_kkr` (
  `id_pres` int(11) NOT NULL,
  `prestasi` varchar(60) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `juara` int(3) NOT NULL,
  `deskripsi` varchar(800) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi_kkr`
--

INSERT INTO `prestasi_kkr` (`id_pres`, `prestasi`, `tingkat`, `juara`, `deskripsi`, `tanggal`, `image`) VALUES
(1, 'Sekolah Sehat', 'Nasional', 1, 'SMK N 1 Bantul meraih Juara 1 Lomba Sekolah Sehat Berkarakter Tingkat Nasional. Penghargaan ini didapat dengan melewati Lomba Sekolah Sehat Berkarakter tingkat kabupaten dan tingkat provinsi yang harus mendapat juara 1. Atas kerjasama warga SMK N 1 Bantul, masyarakat dan instansi dinas terkait, SMK N 1 Bantul meraih Juara 1 tingkat Nasional kategori best achievement dengan Moto “My Scholl is beautifull, zero waste, green is life” dan program unggulan BILAS “Bijak Kelola Sampah”.', '2019', 'logo-kkr.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_pks`
--

CREATE TABLE `prestasi_pks` (
  `id_pres` int(11) NOT NULL,
  `prestasi` varchar(60) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `juara` int(3) NOT NULL,
  `deskripsi` varchar(800) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi_pks`
--

INSERT INTO `prestasi_pks` (`id_pres`, `prestasi`, `tingkat`, `juara`, `deskripsi`, `tanggal`, `image`) VALUES
(1, 'Coming Soon!', '-', 0, '-', '-', '6272lg3ls1k040mhn0njh3ll3m.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_pramuka`
--

CREATE TABLE `prestasi_pramuka` (
  `id_pres` int(11) NOT NULL,
  `prestasi` varchar(60) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `juara` int(3) NOT NULL,
  `deskripsi` varchar(800) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi_pramuka`
--

INSERT INTO `prestasi_pramuka` (`id_pres`, `prestasi`, `tingkat`, `juara`, `deskripsi`, `tanggal`, `image`) VALUES
(2, 'Coming Soon!', '-', 0, 'Coming Soon!', '-', 'logo-trophy.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$YWfqBA6rlseROO18TxU/mewY86GfU85u17bNfNCRVERzrU69BptNC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event_kkr`
--
ALTER TABLE `event_kkr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event_pks`
--
ALTER TABLE `event_pks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event_pramuka`
--
ALTER TABLE `event_pramuka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_kkr`
--
ALTER TABLE `galeri_kkr`
  ADD PRIMARY KEY (`id_glri`);

--
-- Indeks untuk tabel `galeri_pks`
--
ALTER TABLE `galeri_pks`
  ADD PRIMARY KEY (`id_glri`);

--
-- Indeks untuk tabel `galeri_pramuka`
--
ALTER TABLE `galeri_pramuka`
  ADD PRIMARY KEY (`id_glri`);

--
-- Indeks untuk tabel `jadwal_kkr`
--
ALTER TABLE `jadwal_kkr`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indeks untuk tabel `jadwal_pks`
--
ALTER TABLE `jadwal_pks`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indeks untuk tabel `jadwal_pramuka`
--
ALTER TABLE `jadwal_pramuka`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indeks untuk tabel `pembimbing_kkr`
--
ALTER TABLE `pembimbing_kkr`
  ADD PRIMARY KEY (`id_pemb`);

--
-- Indeks untuk tabel `pembimbing_pks`
--
ALTER TABLE `pembimbing_pks`
  ADD PRIMARY KEY (`id_pemb`);

--
-- Indeks untuk tabel `pembimbing_pramuka`
--
ALTER TABLE `pembimbing_pramuka`
  ADD PRIMARY KEY (`id_pemb`);

--
-- Indeks untuk tabel `pengurus_kkr`
--
ALTER TABLE `pengurus_kkr`
  ADD PRIMARY KEY (`id_pgrs`);

--
-- Indeks untuk tabel `pengurus_pks`
--
ALTER TABLE `pengurus_pks`
  ADD PRIMARY KEY (`id_pgrs`);

--
-- Indeks untuk tabel `pengurus_pramuka`
--
ALTER TABLE `pengurus_pramuka`
  ADD PRIMARY KEY (`id_pgrs`);

--
-- Indeks untuk tabel `prestasi_kkr`
--
ALTER TABLE `prestasi_kkr`
  ADD PRIMARY KEY (`id_pres`);

--
-- Indeks untuk tabel `prestasi_pks`
--
ALTER TABLE `prestasi_pks`
  ADD PRIMARY KEY (`id_pres`);

--
-- Indeks untuk tabel `prestasi_pramuka`
--
ALTER TABLE `prestasi_pramuka`
  ADD PRIMARY KEY (`id_pres`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event_kkr`
--
ALTER TABLE `event_kkr`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event_pks`
--
ALTER TABLE `event_pks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `event_pramuka`
--
ALTER TABLE `event_pramuka`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galeri_kkr`
--
ALTER TABLE `galeri_kkr`
  MODIFY `id_glri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri_pks`
--
ALTER TABLE `galeri_pks`
  MODIFY `id_glri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `galeri_pramuka`
--
ALTER TABLE `galeri_pramuka`
  MODIFY `id_glri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kkr`
--
ALTER TABLE `jadwal_kkr`
  MODIFY `id_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pks`
--
ALTER TABLE `jadwal_pks`
  MODIFY `id_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pramuka`
--
ALTER TABLE `jadwal_pramuka`
  MODIFY `id_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembimbing_kkr`
--
ALTER TABLE `pembimbing_kkr`
  MODIFY `id_pemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembimbing_pks`
--
ALTER TABLE `pembimbing_pks`
  MODIFY `id_pemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembimbing_pramuka`
--
ALTER TABLE `pembimbing_pramuka`
  MODIFY `id_pemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengurus_kkr`
--
ALTER TABLE `pengurus_kkr`
  MODIFY `id_pgrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `pengurus_pks`
--
ALTER TABLE `pengurus_pks`
  MODIFY `id_pgrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `pengurus_pramuka`
--
ALTER TABLE `pengurus_pramuka`
  MODIFY `id_pgrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `prestasi_kkr`
--
ALTER TABLE `prestasi_kkr`
  MODIFY `id_pres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prestasi_pks`
--
ALTER TABLE `prestasi_pks`
  MODIFY `id_pres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `prestasi_pramuka`
--
ALTER TABLE `prestasi_pramuka`
  MODIFY `id_pres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
