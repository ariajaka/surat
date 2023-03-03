-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 04:46 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat_2`
--
CREATE DATABASE IF NOT EXISTS `surat_2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `surat_2`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_disposisi_diteruskan_pada`
--

CREATE TABLE IF NOT EXISTS `detail_disposisi_diteruskan_pada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `diteruskan_pada` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_disposisi_keterangan_disposisi`
--

CREATE TABLE IF NOT EXISTS `detail_disposisi_keterangan_disposisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `keterangan_disposisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_disposisi_pegawai_penerima`
--

CREATE TABLE IF NOT EXISTS `detail_disposisi_pegawai_penerima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `nip_penerima` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st`
--

CREATE TABLE IF NOT EXISTS `detail_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st_sppd`
--

CREATE TABLE IF NOT EXISTS `detail_st_sppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip_sppd` varchar(25) NOT NULL,
  `no_sppd` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
  `id_disposisi` varchar(25) NOT NULL,
  `id_sm` varchar(25) NOT NULL,
  `tgl_disposisi` varchar(25) NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `disposisi_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_st`
--

CREATE TABLE IF NOT EXISTS `jenis_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_st` varchar(25) NOT NULL,
  `status_st` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenis_st`
--

INSERT INTO `jenis_st` (`id`, `jenis_st`, `status_st`) VALUES
(1, 'luar_kota_sppd', 'belum_sppd'),
(2, 'dalam_kota_tidak_sppd', 'tidak_sppd'),
(3, 'luar_kota_tidak_sppd', 'tidak_sppd');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=173 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `pangkat`, `jabatan`, `status`, `level`) VALUES
(2, 'Dra. Lenggo Vivirianty, Apt', '19670401 199803 2 001', 'Pembina/IV-a', 'Kasie Pemeriksaan', 1, 2),
(3, 'Armeiny Romita, S.Si, Apt', '19681014 199703 2 001', 'Pembina/IV-a', 'Kasi Pengujian . Kimia', 1, 2),
(6, 'Nurizati, SSi, Apt', '19730916 200003 2 001', 'Pembina/IV-a', 'PFM Madya', 1, 3),
(7, 'Ratnawita, S.Si, Apt', '19730703 200003 2 001', 'Pembina/IV-a', 'Fungsional Umum', 1, 3),
(8, 'Drs. Erhadi Adang M, Apt', '19640317 199603 1 001', 'Pembina/IV-a', 'PFM Muda', 1, 3),
(9, 'Marhamah, SE', '19680311 198902 2 001', 'Penata Tk.I/III-d', 'Kasi Infokom', 1, 2),
(11, 'Sarino,S.Farm,Apt', '19680504 199012 1 001', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(12, 'Febriany Martiana Nasel, S.Si, Apt', '19790223 200312 2 003', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(14, 'Agus Jayadi, S.Si', '19740811 200003 1 002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(15, 'Tutut Rospyanti Citra, S.Farm,Apt', '19810318 200604 2 003', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(16, 'Desmita Adriani Syamsu, S.Farm, Apt', '19811209 200501 2 002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(17, 'Fuani Farid, S.Farm, Apt', '19801027 200501 2 002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(18, 'Riyanti, S.Farm,Apt', '19821022 200604 2 002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(19, 'Rahmat Hidayat, S.Farm, Apt.,M.Pharm.S.ci', '19860507 200812 1 001', 'Penata Tk.I/III-d', 'Kasi Penindakan', 1, 2),
(20, 'Hj. Ayeni,SH', '19661015 198603 2 001', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(21, 'Novva Reddy Naldo, S.Farm,Apt', '19800907 200712 1 001', 'Penata/III-c', 'PFM Muda', 1, 3),
(22, 'Linda Prasetyawati, S.Farm,Apt', '19821013 200712 2 001', 'Penata/III-c', 'PFM Muda', 1, 3),
(23, 'Maria Lies Purbahabsari Viandana,S.Farm,Apt', '19791001 200912 2 002', 'Penata/III-c', 'PFM Muda', 1, 3),
(24, 'Adrafita Hanesty Hadi S.Farm, Apt', '19861231 201012 2 002', 'Penata/III-c', 'PFM Muda', 1, 3),
(25, 'Fauziah,SH', '19680428 199002 2 001', 'Penata/III-c', 'PFM Muda', 1, 3),
(26, 'Zuriati', '19700331 199103 2 001', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(27, 'Malhan Zaldi SH, ', '19750618 199503 1 001', 'Penata Tk.I/III-d', 'Fungsional Umum ( Layanan Umum)', 1, 3),
(28, 'Rahmad Anres D S.Farm, Apt', '19890318 201212 1 002', 'Penata/III-c', 'Analis Laboratorium', 1, 3),
(29, 'Lusiana Wijayanti,S.Farm,Apt', '19830409 201212 2 001', 'Penata/III-c', 'PFM Muda', 1, 3),
(30, 'Hertanti Trias Febriani, S.Farm, Apt', '19860222 201212 2 003', 'Penata/III-c', 'PFM Muda', 1, 3),
(31, 'Mega Ratnasari, S.Si', '19830503 200604 2 003', 'Penata/III-c', 'PFM Muda', 1, 3),
(32, 'Mursidah,SH', '19680611 199402 2 001', 'Penata/III-c', 'PFM Muda', 1, 3),
(33, 'Fransisca O.W. Nasution,STP', '19830812 200712 1 001', 'Penata Muda Tk. I/III-b', 'Perencana Pertama', 1, 3),
(34, 'Yuharidmi', '19700205 199303 2 001', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(35, 'Supriyadi SH', '19730201 199703 1 001', 'Penata Muda Tk. I/III-b', 'PFM Ahli Pertama', 1, 3),
(36, 'Aswita Br. Pinem SH', '19681016 199103 2 001', 'Penata/III-c', 'Fungsional Umum ( Analis pengelola BMN)', 1, 3),
(37, 'Denayu Aidha Nursanti,SH', '19730120 199303 2 002', 'Penata Muda Tk. I/III-b', 'PFM Muda', 1, 3),
(38, 'Rizal Effendi', '19630924 198602 1 001', 'Penata Muda Tk. I/III-b', 'Fungsional Umum(Asisten Pemeriksa sarana obat dan makanan)', 1, 3),
(39, 'Fitri Hariani, S.Farm, Apt', '19900426 201402 2 004', 'Penata Muda Tk. I/III-b', 'PFM Pertama', 1, 3),
(40, 'Mariana, S.Farm, Apt', '19831012 201502 2 001', 'Penata Muda Tk. I/III-b', 'PFM Pertama', 1, 3),
(41, 'Kurniati', '19630410 198403 2 001', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(42, 'Sumarsono', '19680529 199103 1 002', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(43, 'Inneke Koesumawaty,SH', '19720719 199603 2 002', 'Penata Muda Tk. I/III-b', 'PFM Pertama', 1, 3),
(44, 'Yostarita Muchtar', '19740608 199703 2 001', 'Penata Muda Tk. I/III-b', 'PFM Pelaksana lanjutan', 1, 3),
(45, 'Jenifirst Annisa Mujtahidah,S.Farm,Apt', '19930614 201801 2 002', 'Penata Muda Tk. I/III-b', 'Analis Laboratorium', 1, 3),
(46, 'Rasidi', '19751208 199903 1 001', 'Penata Muda/III-a', 'PFM Pelaksana Lanjutan', 1, 3),
(47, 'Madalena', '19721012 199903 2 001', 'Penata Muda/III-a', 'PFM Pelaksana Lanjutan', 1, 3),
(48, 'Ruhai Lanang Prasojo, S.Si', '19890427 201502 1 004', 'Penata Muda/III-a', 'PFM Pertama', 1, 3),
(49, 'Mardiah', '19751118 200003 2 001', 'Penata Muda/III-a', 'Arsiparis Pelaksana', 1, 3),
(50, 'Rina Yunita, A.Md', '19840617 200712 2 001', 'Penata Muda/III-a', 'PFM Pelaksana Lanjutan', 1, 3),
(51, 'Tri Murnila,SH', '19760407 200003 2 001', 'Penata Muda Tk. I/III-b', 'Analis Kepegawaian Pelaksana Lanjutan', 1, 3),
(52, 'M. Fahrul Rahman,A.Md', '19860825 200812 1 002', 'Penata Muda/III-a', 'Fungsional Umum(Pengelola Barang Persediaan dan Barang Milik Negara)', 1, 3),
(53, 'Delyuvin Nasution, S. Farm', '19840731 200712 1 001', 'Penata Muda/III-a', 'PFM Ahli Pertama', 1, 3),
(54, 'Aria Jaka,S.Kom', '19880331 200912 1 002', 'Penata Muda/III-a', 'Pranata Komputer Pertama', 1, 3),
(55, 'Nova Citra Rose S, AMF', '19911121 201502 2 001', 'Pengatur/II-c', 'PFM Pelaksana', 1, 3),
(56, 'Hana Azizah, A. Md', '19970412 201903 2 001', 'Pengatur/II-c', 'Pengadministrasi Umum', 1, 3),
(57, 'Eko Hari Sumarno, A. Md', '19950412 201903 1 001', 'Pengatur/II-c', 'Pengelola BMN', 1, 3),
(58, 'Bekti Kusuma Wijayanti, SKM', '19960316 201903 2 004', 'Penata Muda/III-a', 'Analis Komunikasi Resiko Obat dan Makanan', 1, 3),
(59, 'Ade Afrilia Ardinda, S. Sos', '19950418 201903 2 006', 'Penata Muda/III-a', 'Analis Pemeriksa Sarana dan Penyidik Obat dan Makanan', 1, 3),
(60, 'Annida Rani Chairunisah, S. TP', '19960304 201903 2 001', 'Penata Muda/III-a', 'Analis Laboraturium', 1, 3),
(61, 'Sinta Anggraini S, S.Si', '19950509 201903 2 006', 'Penata Muda/III-a', 'Analis Laboraturium', 1, 3),
(62, 'Arief Setiawan, SKM', '19950108 201903 1 003', 'Penata Muda/III-a', 'Analis Pemeriksa Sarana Obat dan Makanan', 1, 3),
(63, 'Siti Silvia Latifah, SE', '19960417 201903 2 002', 'Penata Muda/III-a', 'Analis SDM Aparatur', 1, 3),
(64, 'Triwinarni, S. Farm, Apt', '19910508 201903 2 004', 'Penata Muda Tk. I/III-b', 'Analis Laboraturium', 1, 3),
(65, 'Stevani Sitorus, S. Far.,  Apt', '19911129 201903 2 003', 'Penata Muda Tk. I/III-b', 'Analis Laboraturium', 1, 3),
(66, 'Novti Sucitra, S. TP', '19951123 201903 2 005', 'Penata Muda/III-a', 'Analis Laboraturium', 1, 3),
(67, 'Casuarina Rusmawati, S. Farm, Apt', '19931102 201903 2 005', 'Penata Muda Tk. I/III-b', 'Analis Laboraturium', 1, 3),
(68, 'Olga Saputra, A. Md', '19930306 201903 1 003', 'Pengatur/II-c', 'Pengadministrasi Umum', 1, 3),
(69, 'Bambang Kusnadi, S. Farm', '3001', '-', 'PPNPN', 1, 4),
(70, 'Ema Suryani', '3026', '-', 'PPNPN', 1, 4),
(71, 'Fadrianto, SE', '3022', '-', 'PPNPN', 1, 4),
(72, 'Febby Anggraini, Amd. Farm', '3012', '-', 'PPNPN', 1, 4),
(73, 'Fitri Aprita, S. Kom', '3011', '-', 'PPNPN', 1, 4),
(74, 'Indra Fernando', '3006', '-', 'PPNPN', 1, 4),
(75, 'Intan Idasari', '3007', '-', 'PPNPN', 1, 4),
(76, 'Junaidi ', '3008', '-', 'PPNPN', 1, 4),
(77, 'Nazarudin', '3009', '-', 'PPNPN', 1, 4),
(79, 'Mahfud Rais', '3005', '-', 'PPNPN', 1, 4),
(80, 'M. Halim Syahir', '3004', '-', 'PPNPN', 1, 4),
(81, 'Nurnadia Al Islamy, S. Kom', '3013', '-', 'PPNPN', 1, 4),
(82, 'Ranti Amelia, Amd. Farm', '3014', '-', 'PPNPN', 1, 4),
(83, 'Ririn Nofrianti, Amd. Farm', '3015', '-', 'PPNPN', 1, 4),
(84, 'Roy Sumardi, S. Kom', '3016', '-', 'PPNPN', 1, 4),
(85, 'Savitri, S. Farm, Apt', '3017', '-', 'PPNPN', 1, 4),
(86, 'Sigit Susanto', '3018', '-', 'PPNPN', 1, 4),
(87, 'Yanti Andriani, ST', '3019', '-', 'PPNPN', 1, 4),
(88, 'Yusmaini', '3020', '-', 'PPNPN', 1, 4),
(89, 'Esy Murvianti', '3021', '-', 'PPNPN', 1, 4),
(90, 'Hari damhuri', '3003', '-', 'PPNPN', 1, 4),
(91, 'Peri amri', '3023', '-', 'PPNPN', 1, 4),
(92, 'Denan', '3024', '-', 'PPNPN', 1, 4),
(93, 'Hartono', '3025', '-', 'PPNPN', 1, 4),
(94, 'Dedi Sukmana, SE', '3002', '-', 'PPNPN', 1, 4),
(95, 'Yunida Yesi, S.Si', '3027', '-', 'PPNPN', 1, 4),
(96, 'Bambang Firdaus, SH', '83090065', 'Aipda', 'PPNS', 1, 3),
(97, 'Romilson Silalahi', '93010647', 'Briptu', 'BA Korwas PPNS Ditreskrimsus Polda Jambi', 1, 3),
(98, 'Nur Hasanah Adnani, S.Si, Apt', '19780119 200501 2 001', 'IV/a', 'Pegawai Badan POM Pusat', 1, 3),
(99, 'Billian Sahiga Jaswatul Ikhsan', '19951121 201903 1 003', 'III/a', 'Analis Laboratorium', 1, 3),
(100, 'Novia Liza Rahmawaty, S.Si', '19941102 201903 2 006', 'III/a', 'Analis Laboratorium', 1, 3),
(101, 'Dio Ramodrana, S.Si, M.Sc', '0', 'Penata/IIIc', 'Ka. Sub Bag Tata Usaha', 1, 3),
(102, 'Prabawati, M.Sc', '0', 'Penata/IIIc', 'PFM Ahli Muda', 1, 3),
(103, 'Dra. Niza Nemara, Apt, M.Si', '0', 'i', 'Plt. Kepala PPPOMN', 1, 3),
(104, 'Desiyuning Fatimatuz Zuhroh, S.Si', '19911204 201502 2 004', 'Penata Muda / IIIa', 'PFM Ahli Pertama', 1, 3),
(105, 'Nurlaini, S.Pd, M.Sc', '19691125 199103 2 004', 'IV/a', 'Ka. Labkes Jambi', 1, 3),
(106, 'Magdalena, AMAK', '19660913 199103 2 004', 'III/d', 'Fungsional', 1, 3),
(107, 'Partini, AMAK', '19691123 198903 2 001', 'III/d', 'Fungsional', 1, 3),
(108, 'Maryanto', '-', '-', 'Driver', 1, 3),
(109, 'Choirunnisah Ambarwati, S.TP', '19940721 201903 2 008', 'III/a', 'Analis Laboratorium', 1, 3),
(110, 'Nurul Hidayah, S.TP', '19970128 201903 2 002', 'III/a', 'Analis Pemeriksa Sarana dan Penyidik Obat dan Makanan', 1, 3),
(111, 'Edy Syatria, S.Kom', '19700829 199303 1 002', 'III/b', 'PFM Pelaksana Lanjutan', 1, 3),
(112, 'Dra. Tessy Mulyani, Apt', '19651119 199503 2 001', 'IV/a', 'Kepala Loka POM Sungai Penuh', 1, 3),
(113, 'Misna Delli, SH', '19620909 198402 2 001', 'III/s', 'PFM Ahli Muda', 1, 3),
(114, 'thema', '-', '-', '-', 1, 3),
(115, 'Romilson', '-', '-', '-', 1, 3),
(116, 'Ayeni, SH', '19661015 198603 2 001', 'penata TK.I/III d', 'PFM Ahli Muda BPOM Jambi', 1, 3),
(117, 'Sri Yulianti, S.Farm, Apt', '19870715 201402 2 002', 'III/b', 'PFM Ahli Pertama', 1, 3),
(119, 'M. Rambe, SE', '86062102', 'Brigadir', 'BA Korwas PPNS Ditreskrimsus Polda Jambi', 1, 3),
(120, 'Andhika Putra, SH', '93080619', 'Briptu', 'BA BAG BINOPSNAL Ditreskrimsus Polda Jambi', 1, 3),
(121, 'Dr. Rosita Nababan, SH, MH', '19670325 199203 2 003', 'Jaksa Utama Pratama', 'Jaksa Fungsional Pidana Umum Kejati Jambi', 1, 3),
(122, 'Sunarto, SH', '19771127 200212 1 006', 'Muda Wira TU', 'Staf Pidana Umum Kejati Jambi', 1, 3),
(123, 'Rahel Rekalita Artasastra Marpaung', '19960903 202012 2 001', 'III/a', 'CPNS TA 2019', 1, 3),
(124, 'Tri Kulsum, S.Si', '19920613 202012 2 001', 'III/a', 'CPNS TA 2019', 1, 3),
(125, 'Dyni Ananda Putri, A.Md', '19960722 202012 2 001', 'II/c', 'CPNS TA 2019', 1, 3),
(126, 'Gery Esfinoza,S.Si', '-', '-', '-', 1, 3),
(128, 'Parno', '19690623 199303 1 002', 'Penata Tk. I/III-d', 'PFM Ahli Muda', 1, 3),
(129, 'Yasni Mutiari Ristianti', '19940216 201903 2 001', 'Penata Muda TK. I/III-b', 'PFM Ahli Pertama', 1, 3),
(130, 'Dwi Andiyani', '19940109 201903 2 001', 'Penata Muda/III-a', 'PFM Ahli Pertama', 1, 3),
(131, 'Mohamad Kashuri', '1111111', 'IV/b', 'Kepala P3OMN', 1, 3),
(133, 'Mohamad Kashuri, S.Si, Apt, M.Farm', '19800409 200804 2 001', 'IV/b', 'Kepala PPPOMN ', 1, 3),
(134, 'Sutirah, A.Md.Far', '-', '-', '-', 1, 3),
(135, 'Siti Aminah, A.Md.Kes', '-', '-', '-', 1, 3),
(136, 'Yes Isman, SKM M.KES', '-', '-', '-', 1, 3),
(139, 'M.Agung Pangestu', '3030', '-', 'PPNPN ', 1, 3),
(140, 'Dr.Ir.H.A.R.Sutan Adil Hendra, MM', '3031', '-', 'Komisi IX DPR RI', 1, 3),
(141, 'Ivan Royafni', '3032', '-', 'Tenaga Ahli', 1, 3),
(142, 'Drs.H.Zulfikar Achmad', '3033', '-', 'Komisi IX DPR RI', 1, 3),
(143, 'Nazarudin', '3034', '-', 'Tenaga Ahli', 1, 3),
(144, 'Hj.Saniatul Lativa, SE, MM', '3035', '-', 'Komisi IX DPR RI', 1, 3),
(145, 'Ryan hidayat', '3036', '-', 'Tenaga Ahli', 1, 3),
(146, 'Leny Julianty', '3036', '-', 'Tenaga Ahli', 1, 3),
(147, 'Dyni Ananda Putri, A.Md', '199607222020122001', 'pengatur/II C', 'pengadministrasi umum', 1, 3),
(148, 'depri', '3037', '-', 'driver', 1, 3),
(149, 'sigit dany', '-', '-', '-', 1, 3),
(150, 'aiptu agung', '-', '-', '-', 1, 3),
(151, 'dewa putu gede', '-', '-', '-', 1, 3),
(152, 'fadli R', '-', '-', '-', 1, 3),
(153, 'ricky ap ', '-', '-', '-', 1, 3),
(154, 'Indra Zulfiansyah', '-', '-', '-', 1, 3),
(155, 'gloria sinuarji', '-', '-', '-', 1, 3),
(156, 'Nofian Adi Putra', '-', '-', '-', 1, 3),
(157, 'mohamad santoso', '-', '-', '-', 1, 3),
(158, 'pratam ganda surya', '3067', '-', 'teknisi ahli laboratorium', 1, 3),
(159, 'Rahma Dewi H', '0000', 'bb', '-', 1, 3),
(160, 'eny dwi a', '---', '---', '---', 1, 3),
(161, 'ikhsan b', '--', '--', '---', 1, 3),
(162, 'Andi Saputra S.kom', '-', 'ppnpn', 'admin', 1, 3),
(163, 'Rizky Nur Qalby Defrin, S. Ikom', '0', 'PPNPN', 'PPNPN Balai POM di Jambi', 1, 3),
(164, 'Raden Imbang Dedi', '0', 'PPNPN', 'Satpam ', 1, 3),
(165, 'Apt. Hidayati Sukma, S.Farm', '199203092022032001', 'Penata Muda Tk.1', 'PFM Ahli Pertama', 1, 3),
(166, 'Apt. Hartika Guspayane, S.Farm', '199306092022032002', 'Penata Muda Tk.1', 'PFM Ahli Pertama', 1, 3),
(167, 'Apt. Donna Puspa Sari, S. Farm', '199610252022032001', 'Penata Muda Tk.1', 'PFM Ahli Pertama', 1, 3),
(168, 'Apt. Indah Gusmiwalti, S. Farm', '199308222022032001', 'Penata Muda Tk.1', 'PFM Ahli Pertama', 1, 3),
(169, 'Apt. Hairani, S.Farm', '199708222022032003', 'Penata Muda Tk1', 'PFM Ahli pertama', 1, 3),
(170, 'Apt. Arini Kurnia, S.Farm', '199204302022032002', 'Penata Muda Tk1', 'PFM Ahli pertama', 1, 3),
(171, 'Apt. Harry Utomo, S.Farm', '198910212022031001', 'Penata Muda Tk1', 'PFM Ahli pertama', 1, 3),
(172, 'Alex Sander, S.Farm, Apt., M.H', '197912122006041005', 'Pembina IV/a', 'Kepala Balai POM di Jambi', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_sk` varchar(25) NOT NULL,
  `kepala_sk` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `tujuan` varchar(256) NOT NULL,
  `tgl_sk` varchar(25) NOT NULL,
  `penandatangan_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id_sm` varchar(25) NOT NULL,
  `tgl_catat_sm` varchar(25) NOT NULL,
  `nomor_sm` varchar(100) NOT NULL,
  `alamat_sm` varchar(50) NOT NULL,
  `tgl_sm` varchar(25) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `sifat_surat` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE IF NOT EXISTS `surat_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `kepala_st` varchar(25) NOT NULL,
  `jenis_sk` varchar(25) NOT NULL,
  `jenis_st` varchar(25) NOT NULL,
  `tujuan_st` varchar(25) NOT NULL,
  `tempat_st` varchar(25) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `tgl_st` varchar(25) NOT NULL,
  `penandatangan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Cobaaja321', 1),
(2, 'ayuk', 'ayuk', '2e890e7fd9ae64e8c423289e937b8fa3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
