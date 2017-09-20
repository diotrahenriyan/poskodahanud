-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 06:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poskodahanud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sheetid` varchar(255) NOT NULL,
  `columnid` int(11) NOT NULL,
  `rowid` int(11) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  `parsed` varchar(255) DEFAULT NULL,
  `calc` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sheetid`, `columnid`, `rowid`, `data`, `style`, `parsed`, `calc`) VALUES
('1', 1, 1, 'Coba', '0;0;000000;ffffff;left;none;0', 'Coba', 'Coba'),
('1', 1, 2, 'Coba', '0;0;000000;ffffff;left;none;0', 'Coba', 'Coba'),
('2', 1, 1, 'Latihan', '0;0;000000;ffffff;left;none;0', 'Latihan', 'Latihan'),
('2', 1, 2, 'Lagi', '0;0;000000;ffffff;left;none;0', 'Lagi', 'Lagi'),
('3', 1, 1, 'Coba', '0;0;000000;ffffff;left;none;0', 'Coba', 'Coba'),
('1', 1, 3, 'Lagi', '0;0;000000;ffffff;left;none;0', 'Lagi', 'Lagi'),
('3', 1, 2, 'Latihan', '0;0;000000;ffffff;left;none;0', 'Latihan', 'Latihan'),
('3', 1, 3, 'Lagi', '0;0;000000;ffffff;left;none;0', 'Lagi', 'Lagi');

-- --------------------------------------------------------

--
-- Table structure for table `dinas_apel`
--

CREATE TABLE `dinas_apel` (
  `id_apel` int(11) NOT NULL,
  `satuan` varchar(256) NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `krg` varchar(256) NOT NULL,
  `hdr` varchar(256) NOT NULL,
  `ket_apel` varchar(256) NOT NULL,
  `user_type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinas_apel`
--

INSERT INTO `dinas_apel` (`id_apel`, `satuan`, `jumlah`, `krg`, `hdr`, `ket_apel`, `user_type`) VALUES
(21, 'MAKO', '10', '10', '1', 'dk', ''),
(22, 'RAI A', '11', '20', '6', 'cuti', '');

-- --------------------------------------------------------

--
-- Table structure for table `dinas_pengumuman`
--

CREATE TABLE `dinas_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `tanggal` varchar(256) NOT NULL,
  `pengumuman` text NOT NULL,
  `ket_pengumuman` text NOT NULL,
  `user_type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinas_pengumuman`
--

INSERT INTO `dinas_pengumuman` (`id_pengumuman`, `tanggal`, `pengumuman`, `ket_pengumuman`, `user_type`) VALUES
(4, '2017-07-14 11:44:07', 'sdfsdfsdf', 'sdf', ''),
(5, '2017-07-14 11:44:58', 'zd', 'sdf', ''),
(9, '2017-07-05', 'dian anggraini', 'diandianallala', ''),
(10, '2017-07-22', 'sdf', 'DF', ''),
(11, '', 'zxcvbnm', 'asdfghjkl', '');

-- --------------------------------------------------------

--
-- Table structure for table `dinas_resume`
--

CREATE TABLE `dinas_resume` (
  `id_resume` int(11) NOT NULL,
  `tgl_resume` varchar(128) NOT NULL,
  `kegiatan` text NOT NULL,
  `ket_resume` text NOT NULL,
  `user_type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinas_resume`
--

INSERT INTO `dinas_resume` (`id_resume`, `tgl_resume`, `kegiatan`, `ket_resume`, `user_type`) VALUES
(2, '', 'lari pagi , lomba lari', 'pakai sepatu', ''),
(3, '2017-07-27', 'qwertyuiop', 'bubulalalaASas', ''),
(4, '', 'zxcvbnm,', '1234567890-', '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `sheetid` varchar(255) NOT NULL,
  `columnid` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `width` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kat_alhub`
--

CREATE TABLE `kat_alhub` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_alhub`
--

INSERT INTO `kat_alhub` (`id_kat`, `jenis`) VALUES
(1, 'Telepon Lapangan'),
(2, 'Telepon Kabel'),
(3, 'Telepon CUG'),
(4, 'Radio'),
(5, 'Repeater'),
(6, 'Soundsystem');

-- --------------------------------------------------------

--
-- Table structure for table `kat_alkapsat`
--

CREATE TABLE `kat_alkapsat` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_alkapsat`
--

INSERT INTO `kat_alkapsat` (`id_kat`, `jenis`) VALUES
(1, 'Alkapsat'),
(2, 'Kapsat');

-- --------------------------------------------------------

--
-- Table structure for table `kat_alsatri`
--

CREATE TABLE `kat_alsatri` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_alsatri`
--

INSERT INTO `kat_alsatri` (`id_kat`, `jenis`) VALUES
(1, 'Alat Kantor'),
(2, 'Alat Pergudangan'),
(3, 'Alat Satri'),
(4, 'Alat Makan dan Dapur');

-- --------------------------------------------------------

--
-- Table structure for table `kat_bmp`
--

CREATE TABLE `kat_bmp` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_bmp`
--

INSERT INTO `kat_bmp` (`id_kat`, `jenis`) VALUES
(1, 'Coba BMP'),
(2, 'Coba-coba BMP lagi'),
(3, 'Coba-Coba BMP lagi-lagi');

-- --------------------------------------------------------

--
-- Table structure for table `kat_dikbangspers`
--

CREATE TABLE `kat_dikbangspers` (
  `id_dikbang` int(11) NOT NULL,
  `jenis_dikbang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_dikbangspers`
--

INSERT INTO `kat_dikbangspers` (`id_dikbang`, `jenis_dikbang`) VALUES
(1, 'dokter'),
(2, 'tembak'),
(5, 'snipper'),
(6, 'd'),
(7, 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `kat_jabatan`
--

CREATE TABLE `kat_jabatan` (
  `id_kat_jabatan` int(11) NOT NULL,
  `tingkat` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_jabatan`
--

INSERT INTO `kat_jabatan` (`id_kat_jabatan`, `tingkat`, `pangkat`) VALUES
(1, '1', 'Yon1'),
(2, '2', 'Mako'),
(3, '3', 'Ton 1'),
(4, '4', 'cuk 1'),
(5, '4', 'cuk 2'),
(11, '4', 'cuk 3'),
(12, '4', 'cuk 4'),
(13, '3', 'Ton 2'),
(14, '2', 'Rai A'),
(15, '2', 'Rai B'),
(16, '4', 'cuk 5'),
(17, '4', 'gg'),
(18, '4', 'cuk 6');

-- --------------------------------------------------------

--
-- Table structure for table `kat_kendinas`
--

CREATE TABLE `kat_kendinas` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_kendinas`
--

INSERT INTO `kat_kendinas` (`id_kat`, `jenis`) VALUES
(1, 'SPM'),
(2, 'Truck Â¼ T');

-- --------------------------------------------------------

--
-- Table structure for table `kat_makanan`
--

CREATE TABLE `kat_makanan` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_makanan`
--

INSERT INTO `kat_makanan` (`id_kat`, `jenis`) VALUES
(1, 'Sayur'),
(2, 'Buah'),
(3, 'Roti'),
(4, 'Beras'),
(5, 'Kopi'),
(6, 'Teh'),
(7, 'Susu'),
(8, 'Air Galon'),
(9, 'Air Mineral'),
(10, 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `kat_matsus`
--

CREATE TABLE `kat_matsus` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_matsus`
--

INSERT INTO `kat_matsus` (`id_kat`, `jenis`) VALUES
(1, 'Kaporlap'),
(2, 'Kapsus'),
(3, 'Kaporsatlap');

-- --------------------------------------------------------

--
-- Table structure for table `kat_muhandak`
--

CREATE TABLE `kat_muhandak` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_muhandak`
--

INSERT INTO `kat_muhandak` (`id_kat`, `jenis`) VALUES
(1, 'Muhandak1'),
(2, 'Muhandak2'),
(3, 'Muhandak3');

-- --------------------------------------------------------

--
-- Table structure for table `kat_optik`
--

CREATE TABLE `kat_optik` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_optik`
--

INSERT INTO `kat_optik` (`id_kat`, `jenis`) VALUES
(1, 'Alutsista Meriam'),
(2, 'Alutsista Rudal'),
(3, 'Alutsista Radar/Dalbak');

-- --------------------------------------------------------

--
-- Table structure for table `kat_pang`
--

CREATE TABLE `kat_pang` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_pang`
--

INSERT INTO `kat_pang` (`id_kat`, `jenis`) VALUES
(1, 'Perkantoran'),
(2, 'Perumahan');

-- --------------------------------------------------------

--
-- Table structure for table `kat_teknisi`
--

CREATE TABLE `kat_teknisi` (
  `id_kat` int(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_teknisi`
--

INSERT INTO `kat_teknisi` (`id_kat`, `jenis`) VALUES
(1, 'Thermometer'),
(2, 'Hygrometer');

-- --------------------------------------------------------

--
-- Table structure for table `log_alhub`
--

CREATE TABLE `log_alhub` (
  `id_alhub` int(50) NOT NULL,
  `kat_alhub` varchar(200) NOT NULL,
  `nm_alhub` varchar(200) NOT NULL,
  `nama_alhub` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `senjata_alhub` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(300) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_alkapsat`
--

CREATE TABLE `log_alkapsat` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `persediaan` varchar(256) NOT NULL,
  `penerimaan` varchar(256) NOT NULL,
  `pengembalian` varchar(256) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `jumlah` int(64) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_alkapsus`
--

CREATE TABLE `log_alkapsus` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `persediaan` varchar(256) NOT NULL,
  `penerimaan` varchar(256) NOT NULL,
  `pengembalian` varchar(256) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `jumlah` varchar(64) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_alsatri`
--

CREATE TABLE `log_alsatri` (
  `id_alsatri` int(50) NOT NULL,
  `jm_alsatri` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `sat` varchar(200) NOT NULL,
  `dspp` varchar(200) NOT NULL,
  `jml_nyata` int(200) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `selisih` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_alutsista`
--

CREATE TABLE `log_alutsista` (
  `id` int(11) NOT NULL,
  `materil` varchar(200) NOT NULL,
  `top` varchar(200) NOT NULL,
  `nyata` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_bmp`
--

CREATE TABLE `log_bmp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jmlpersawal` varchar(200) NOT NULL,
  `digunakan` varchar(200) NOT NULL,
  `penambahan` varchar(200) NOT NULL,
  `jmlpersakhir` varchar(200) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_kaporlap`
--

CREATE TABLE `log_kaporlap` (
  `id_kaporlap` int(50) NOT NULL,
  `jm_kaporlap` varchar(200) NOT NULL,
  `nama_kaporlap` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `top` varchar(200) NOT NULL,
  `jml_nyata` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `selisih` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_kendaraan`
--

CREATE TABLE `log_kendaraan` (
  `id` int(11) NOT NULL,
  `materil` varchar(256) NOT NULL,
  `top` varchar(256) NOT NULL,
  `nyata` varchar(256) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `keterang` varchar(1000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_kendinas`
--

CREATE TABLE `log_kendinas` (
  `id_kendinas` int(50) NOT NULL,
  `kat_kendinas` varchar(200) NOT NULL,
  `nm_kendinas` varchar(200) NOT NULL,
  `nama_kendinas` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `no_rek` varchar(200) NOT NULL,
  `no_mesin` varchar(200) NOT NULL,
  `no_chasis` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_makanan`
--

CREATE TABLE `log_makanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jumlah` varchar(64) NOT NULL,
  `nyata` varchar(128) NOT NULL,
  `keadaan` varchar(8) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_matsus`
--

CREATE TABLE `log_matsus` (
  `id_matsus` int(50) NOT NULL,
  `jm_matsus` varchar(200) NOT NULL,
  `nama_matsus` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `top` varchar(200) NOT NULL,
  `jml_nyata` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `selisih` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_muhandak`
--

CREATE TABLE `log_muhandak` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `satuan` varchar(256) NOT NULL,
  `nyata` varchar(256) NOT NULL,
  `keadaan` varchar(64) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_munisi`
--

CREATE TABLE `log_munisi` (
  `id_munisi` int(50) NOT NULL,
  `jm_munisi` varchar(200) NOT NULL,
  `nama_munisi` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `jumlah_top` int(100) NOT NULL,
  `jumlah_pers_lalu` int(100) NOT NULL,
  `jumlah_tambah` int(100) NOT NULL,
  `jumlah_kurang` int(100) NOT NULL,
  `jumlah_pers_skr` int(100) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_optik`
--

CREATE TABLE `log_optik` (
  `id_optik` int(50) NOT NULL,
  `kat_optik` varchar(200) NOT NULL,
  `nm_optik` varchar(200) NOT NULL,
  `nama_optik` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `senjata_optik` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_pangkalan`
--

CREATE TABLE `log_pangkalan` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jml_awal` int(11) NOT NULL,
  `penambahan` varchar(256) NOT NULL,
  `pengurangan` varchar(256) NOT NULL,
  `jml_akhir` int(11) NOT NULL,
  `kondisi` varchar(256) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_pangkalan2`
--

CREATE TABLE `log_pangkalan2` (
  `id_pangkalan` int(50) NOT NULL,
  `jm_pangkalan` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `top` varchar(200) NOT NULL,
  `luas_bangunan` varchar(200) NOT NULL,
  `nyata` varchar(200) NOT NULL,
  `kurang` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_teknisi`
--

CREATE TABLE `log_teknisi` (
  `id_teknisi` int(50) NOT NULL,
  `kat_teknisi` varchar(200) NOT NULL,
  `nm_teknisi` varchar(200) NOT NULL,
  `nama_teknisi` varchar(200) NOT NULL,
  `jumlah` int(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `no_materiil` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tipe_sat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operasi_akademik`
--

CREATE TABLE `operasi_akademik` (
  `id` int(11) NOT NULL,
  `naskah` varchar(200) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operasi_akademik`
--

INSERT INTO `operasi_akademik` (`id`, `naskah`, `ket`, `tipe`) VALUES
(3, 'dian', 'dian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operasi_bujuk`
--

CREATE TABLE `operasi_bujuk` (
  `id` int(11) NOT NULL,
  `bujuk` varchar(200) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operasi_bujuk`
--

INSERT INTO `operasi_bujuk` (`id`, `bujuk`, `ket`, `tipe`) VALUES
(1, 'sd', 'sdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operasi_dspp`
--

CREATE TABLE `operasi_dspp` (
  `id` int(11) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `kode_jab` varchar(200) NOT NULL,
  `urai_jab` varchar(200) NOT NULL,
  `senjata` varchar(200) NOT NULL,
  `kendaraan` varchar(200) NOT NULL,
  `perlengkapan` varchar(200) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operasi_dspp`
--

INSERT INTO `operasi_dspp` (`id`, `unit`, `kode_jab`, `urai_jab`, `senjata`, `kendaraan`, `perlengkapan`, `tipe`) VALUES
(3, 'dian', 'asddian', 'dianasf', 'diansdf', 'diansfd', 'dianasdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operasi_omp`
--

CREATE TABLE `operasi_omp` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(300) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `dpp` varchar(200) NOT NULL,
  `ket` varchar(300) NOT NULL,
  `dokumentasi` varchar(1000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operasi_omsp`
--

CREATE TABLE `operasi_omsp` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `dpp` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `dokumentasi` varchar(2000) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operasi_protap`
--

CREATE TABLE `operasi_protap` (
  `id` int(11) NOT NULL,
  `protap` varchar(200) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operasi_protap`
--

INSERT INTO `operasi_protap` (`id`, `protap`, `ket`, `tipe`) VALUES
(1, 'd', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operasi_top`
--

CREATE TABLE `operasi_top` (
  `id` int(11) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `kode_jab` varchar(200) NOT NULL,
  `urai_jab` varchar(200) NOT NULL,
  `pangkat` varchar(200) NOT NULL,
  `korps` varchar(200) NOT NULL,
  `militer` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `tipe` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operasi_top`
--

INSERT INTO `operasi_top` (`id`, `unit`, `kode_jab`, `urai_jab`, `pangkat`, `korps`, `militer`, `jumlah`, `tipe`) VALUES
(3, 'll', 'll', 'll', 'll', 'll', 'll', 'll', 1),
(4, 'gg', 'g', 'sss', 'ggsss', 'ggss', 'ggsss', 'ggss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pers_bahasa`
--

CREATE TABLE `pers_bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `kategori_bahasa` varchar(100) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_bahasa`
--

INSERT INTO `pers_bahasa` (`id_bahasa`, `kategori_bahasa`, `bahasa`, `keterangan`, `nrp`) VALUES
(4, 'daerah', 'Minang', 'Aktif', '45678'),
(5, 'asing', 'Jerman', 'Aktif', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `pers_data_cuti`
--

CREATE TABLE `pers_data_cuti` (
  `id_cuti` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_berangkat` varchar(100) NOT NULL,
  `tgl_kembali` varchar(100) NOT NULL,
  `status_cuti` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_data_cuti`
--

INSERT INTO `pers_data_cuti` (`id_cuti`, `nrp`, `keperluan`, `alamat`, `tgl_berangkat`, `tgl_kembali`, `status_cuti`) VALUES
(8, '45678', 'd', 'd', '2017-06-28', '2017-06-21', '1'),
(9, 'asd', 'asd', 'asd', '2017-06-28', '2017-06-20', '1'),
(10, '56789', 'ad', 'as', '2017-06-13', '2017-06-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pers_data_kes`
--

CREATE TABLE `pers_data_kes` (
  `id_data_kes` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `macam_sakit` varchar(100) NOT NULL,
  `rawat` varchar(100) NOT NULL,
  `rumkit` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_data_kes`
--

INSERT INTO `pers_data_kes` (`id_data_kes`, `nrp`, `macam_sakit`, `rawat`, `rumkit`, `alamat`, `ket`) VALUES
(1, '45678', 'dbd', 'rawat inap', 'boromius', 'jln ir juanda', 'menengah');

-- --------------------------------------------------------

--
-- Table structure for table `pers_data_personil`
--

CREATE TABLE `pers_data_personil` (
  `id_data_personil` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tmt_jabatan` varchar(100) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `alamat` varchar(2000) NOT NULL,
  `tlp` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `tpt_lahir` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tmt_kategori` varchar(100) NOT NULL,
  `sumber_pa_ba` varchar(100) NOT NULL,
  `goldar` varchar(100) NOT NULL,
  `tmt_tni` varchar(100) NOT NULL,
  `suku_bangsa` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kual_psi` varchar(100) NOT NULL,
  `klas_psi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_data_personil`
--

INSERT INTO `pers_data_personil` (`id_data_personil`, `nama_lengkap`, `pangkat`, `nrp`, `jabatan`, `tmt_jabatan`, `golongan`, `alamat`, `tlp`, `email`, `tgl_lahir`, `tpt_lahir`, `kategori`, `tmt_kategori`, `sumber_pa_ba`, `goldar`, `tmt_tni`, `suku_bangsa`, `agama`, `kual_psi`, `klas_psi`, `status`, `foto`, `tipe`) VALUES
(29, 'dianÂ ', 'komandan', '45678', 'direktur', '20 mei 2010', '', '', '', '', '26 mei 1993', 'padang panjang', 'pd', '20', 'df', 'b', '20 mei', 'indonsesia', 'islam', 'hh', 'sja', 'single', '', 1),
(32, 'devi', 'komandan', '56789', 'komandan', 'kmd', '', '', '', '', '2017-03-18', 'b', 'bl', 'bl', 'darimana', 'o', 'hsd', 'indonesia', 'islam', 'j', 'kk', 'si', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pers_dik`
--

CREATE TABLE `pers_dik` (
  `id_dik` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pers_dik`
--

INSERT INTO `pers_dik` (`id_dik`, `kategori`, `nama`, `tahun`, `nrp`) VALUES
(1, 'umum', 'sd', '208', '56789'),
(3, 'umum', 'smp', '2009', '56789'),
(15, 'umum', 'SMA', '2s', '56789'),
(18, '', 'f', 'f', '45678'),
(19, '', 'f', 'f', '45678'),
(20, '', 's', 's', '45678'),
(75, 'umum', 'SMP', '2008', '45678'),
(76, 'bangum', 'Sesko TNI', '2019', '45678'),
(77, 'bangspes', 'sma', '2008', '45678'),
(78, 'bangspes', 'Kuliah', '2011', '45678'),
(79, 'umum', 'asd', 'asd', '1324124'),
(81, 'umum', 'S2', '232', '45678'),
(82, 'umum', 'SMP', '2001', '45678'),
(83, 'umum', 'SMP', '777', '45678'),
(84, 'umum', 'SD', '2012', 'asd'),
(86, 'bangum', 'Sesko TNI', '2010', 'asd'),
(87, 'bangum', 'Dikmaba PK', '6777', '45678'),
(88, 'bangspes', 'guru', '2015', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `pers_dik_lak`
--

CREATE TABLE `pers_dik_lak` (
  `id_dik_lak` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `macam_dik` varchar(100) NOT NULL,
  `waktu_dik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_dik_lak`
--

INSERT INTO `pers_dik_lak` (`id_dik_lak`, `nrp`, `macam_dik`, `waktu_dik`) VALUES
(1, '45678', 'S2 managemenÂ ', '2011'),
(2, '45678', 'pendidikan militer', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `pers_keahlian`
--

CREATE TABLE `pers_keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_keahlian`
--

INSERT INTO `pers_keahlian` (`id_keahlian`, `nrp`, `spesialisasi`) VALUES
(1, '45678', 'Penembak jitu'),
(2, '45678', 'Timnas Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `pers_mat_alkes`
--

CREATE TABLE `pers_mat_alkes` (
  `id_mat_alkes` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `nama_alkes` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_mat_alkes`
--

INSERT INTO `pers_mat_alkes` (`id_mat_alkes`, `nrp`, `nama_alkes`, `kondisi`, `jumlah`, `ket`) VALUES
(1, '45678', 'suntik', 'baik', '10', 'baik'),
(2, '45678', 'pisau', 'buruk', '11', 'buang');

-- --------------------------------------------------------

--
-- Table structure for table `pers_obat`
--

CREATE TABLE `pers_obat` (
  `id_obat` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `terima` varchar(100) NOT NULL,
  `keluar` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_obat`
--

INSERT INTO `pers_obat` (`id_obat`, `nrp`, `nama_obat`, `kondisi`, `jumlah`, `terima`, `keluar`, `waktu`, `ket`) VALUES
(1, '45678', 'panadol', 'baik', '20', 'dian', 'dn', '2', 'ndf'),
(2, '45678', 'bodrex', 'baik', '30', 'devi', 'dian', 'as10.00', 'habis');

-- --------------------------------------------------------

--
-- Table structure for table `pers_pelanggaran`
--

CREATE TABLE `pers_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nrp` varchar(200) NOT NULL,
  `jenis` varchar(800) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `ket_pelanggaran` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_pelanggaran`
--

INSERT INTO `pers_pelanggaran` (`id_pelanggaran`, `nrp`, `jenis`, `waktu`, `ket_pelanggaran`) VALUES
(1, '56789', 'tauran', '2017-06-27', 'tauran dengan pelajar'),
(3, '45678', 'tauransd', '2017-06-16', 'engan pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `pers_prestasi`
--

CREATE TABLE `pers_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `nama_prestasi` varchar(200) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tingkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_prestasi`
--

INSERT INTO `pers_prestasi` (`id_prestasi`, `nrp`, `prestasi`, `nama_prestasi`, `tahun`, `tingkat`) VALUES
(1, '45678', 'Juara 3', '10 m\nAir Pistol Putra Perorangan\nKejurda Perbakin\nCup AcehÂ ', '2012', 'Kabupaten'),
(2, '45678', 'Juara 2', '10 m\nAir Pistol Putra Perorangan\nKejurda Perbakin\nCup AcehÂ ', '2013', 'Internasional'),
(3, '45678', 'juara 1', 'dfaf', '2016', 'Kabupaten');

-- --------------------------------------------------------

--
-- Table structure for table `pers_rikes`
--

CREATE TABLE `pers_rikes` (
  `id_rikes` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_rikes`
--

INSERT INTO `pers_rikes` (`id_rikes`, `nrp`, `waktu`, `tempat`, `hasil`, `ket`) VALUES
(1, '45678', '10.20', 'aula', 'baik', 'minum obat'),
(2, '45678', '11.00', 'kelasÂ ', 'buruk', 'di rwat');

-- --------------------------------------------------------

--
-- Table structure for table `pers_rwt_jabatan`
--

CREATE TABLE `pers_rwt_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tmt` varchar(100) NOT NULL,
  `no_skep` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_rwt_jabatan`
--

INSERT INTO `pers_rwt_jabatan` (`id_jabatan`, `jabatan`, `tmt`, `no_skep`, `nrp`) VALUES
(1, 'PAMA DENARHANUD\nRUDAL 001 DAM IM', '22-06-2006', 'KEPPRES/56/TNI/2005', '45678'),
(2, 'DANTON 3 DENARHANUD RUDAL 001 DAM IM', '10-10-2006', 'KEP/49/III/2009', '45678'),
(3, 'DANTON 1 DENARHANUD RUDAL 001 DAM IM', '01-09-2007', 'KEP/85/III/2013', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `pers_rwt_ops`
--

CREATE TABLE `pers_rwt_ops` (
  `id_riwayat_ops` int(11) NOT NULL,
  `ops` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pers_rwt_ops`
--

INSERT INTO `pers_rwt_ops` (`id_riwayat_ops`, `ops`, `tahun`, `nrp`) VALUES
(1, 'Opslihkam\nNAD', '2006', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `pers_rwt_pangkat`
--

CREATE TABLE `pers_rwt_pangkat` (
  `id_rwt_pangkat` int(11) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `tmt` varchar(100) NOT NULL,
  `no_skep` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_rwt_pangkat`
--

INSERT INTO `pers_rwt_pangkat` (`id_rwt_pangkat`, `pangkat`, `tmt`, `no_skep`, `nrp`) VALUES
(1, 'LETDA', '01-12-2005', 'KEPPRES/56/TNI/2005', '45678'),
(2, 'LETTU', '01-04-2009', 'KEP/49/III/2009', '45678'),
(3, 'KAPTEN', '01-04-2013', 'KEP/85/III/2013', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `pers_samapta_gbl`
--

CREATE TABLE `pers_samapta_gbl` (
  `id_samapta_gbl` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `lulus` varchar(100) NOT NULL,
  `persen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_samapta_gbl`
--

INSERT INTO `pers_samapta_gbl` (`id_samapta_gbl`, `nrp`, `periode`, `lulus`, `persen`) VALUES
(1, '45678', 'Periode III', 'lulus', '80%'),
(2, '45678', 'Periode II', 'Lulus', '100 %');

-- --------------------------------------------------------

--
-- Table structure for table `pers_samapta_org`
--

CREATE TABLE `pers_samapta_org` (
  `id_samapta_org` int(11) NOT NULL,
  `nrp` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `tb` double NOT NULL,
  `bb` double NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `wkt_lari` int(11) NOT NULL,
  `nilai_lari` int(11) NOT NULL,
  `jml_pullup` int(11) NOT NULL,
  `nilai_pullup` int(11) NOT NULL,
  `jml_situp` int(11) NOT NULL,
  `nilai_situp` int(11) NOT NULL,
  `jml_pushup` int(11) NOT NULL,
  `nilai_pushup` int(11) NOT NULL,
  `jml_shuttlerun` int(11) NOT NULL,
  `nilai_shuttlerun` int(11) NOT NULL,
  `rata_b` varchar(100) NOT NULL,
  `rata_a_b` varchar(100) NOT NULL,
  `wktu_rng` varchar(100) NOT NULL,
  `nilai_rng` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_samapta_org`
--

INSERT INTO `pers_samapta_org` (`id_samapta_org`, `nrp`, `umur`, `tb`, `bb`, `klasifikasi`, `wkt_lari`, `nilai_lari`, `jml_pullup`, `nilai_pullup`, `jml_situp`, `nilai_situp`, `jml_pushup`, `nilai_pushup`, `jml_shuttlerun`, `nilai_shuttlerun`, `rata_b`, `rata_a_b`, `wktu_rng`, `nilai_rng`, `ket`) VALUES
(2, 45678, 40, 180, 65, 'dian', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '100', '100', '100', '100', 'Lulus'),
(3, 56789, 100, 100, 100, '100', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '100', '100', '100', '100', 'Lulus'),
(4, 2345678, 0, 0, 0, 'AS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'as', 'as', 'as', 's', 'AS'),
(5, 0, 20, 0, 0, 'S', 0, 23, 23, 213, 123, 123, 123, 3, 31, 2, '123', '123', '123', '123', 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `pers_suami_istri`
--

CREATE TABLE `pers_suami_istri` (
  `id_suami_istri` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pkt_gol` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pers_tanda_jasa`
--

CREATE TABLE `pers_tanda_jasa` (
  `id_tanda_jasa` int(11) NOT NULL,
  `tanda_jasa` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_tanda_jasa`
--

INSERT INTO `pers_tanda_jasa` (`id_tanda_jasa`, `tanda_jasa`, `nrp`) VALUES
(1, 'perang melawan irak', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `pers_tgs_ln`
--

CREATE TABLE `pers_tgs_ln` (
  `id_tgs_luarnegeri` int(11) NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `negara_tujuan` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pers_tgs_ln`
--

INSERT INTO `pers_tgs_ln` (`id_tgs_luarnegeri`, `tugas`, `tahun`, `negara_tujuan`, `nrp`) VALUES
(1, 'Perang', '2010', 'irak', '45678'),
(2, 'Perang suriak', '1999', 'suriah', '45678'),
(3, 'asd', 'asd', 'asd', '56789');

-- --------------------------------------------------------

--
-- Table structure for table `pers_tpt_tinggal`
--

CREATE TABLE `pers_tpt_tinggal` (
  `id_tpt_tinggal` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `kat_rmh` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sheet`
--

CREATE TABLE `sheet` (
  `sheetid` varchar(255) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `cfg` varchar(512) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet`
--

INSERT INTO `sheet` (`sheetid`, `userid`, `name`, `key`, `cfg`) VALUES
('demo_sheet', NULL, NULL, 'any_key', NULL),
('1', NULL, NULL, NULL, NULL),
('2', NULL, NULL, NULL, NULL),
('4', NULL, NULL, NULL, NULL),
('3', NULL, NULL, NULL, NULL),
('5', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(10, 'paops', 'paops', 'paops'),
(11, 'paintel', 'paintel', 'paintel'),
(13, 'danda', 'danda', 'dandahanud'),
(14, 'papers', 'papers', 'papers'),
(15, 'palog', 'palog', 'palog'),
(16, 'padin', 'padin', 'padin'),
(17, 'bahub', 'bahub', 'bahub'),
(18, 'batitih', 'batitih', 'batitih'),
(19, 'ploter', 'ploter', 'ploter');

-- --------------------------------------------------------

--
-- Table structure for table `triggers`
--

CREATE TABLE `triggers` (
  `id` int(11) NOT NULL,
  `sheetid` varchar(255) DEFAULT NULL,
  `trigger` varchar(10) DEFAULT NULL,
  `source` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `apikey` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `secret` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sheetid`,`columnid`,`rowid`);

--
-- Indexes for table `dinas_apel`
--
ALTER TABLE `dinas_apel`
  ADD PRIMARY KEY (`id_apel`);

--
-- Indexes for table `dinas_pengumuman`
--
ALTER TABLE `dinas_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `dinas_resume`
--
ALTER TABLE `dinas_resume`
  ADD PRIMARY KEY (`id_resume`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`sheetid`,`columnid`);

--
-- Indexes for table `kat_alhub`
--
ALTER TABLE `kat_alhub`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_alkapsat`
--
ALTER TABLE `kat_alkapsat`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_alsatri`
--
ALTER TABLE `kat_alsatri`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_bmp`
--
ALTER TABLE `kat_bmp`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_dikbangspers`
--
ALTER TABLE `kat_dikbangspers`
  ADD PRIMARY KEY (`id_dikbang`);

--
-- Indexes for table `kat_jabatan`
--
ALTER TABLE `kat_jabatan`
  ADD PRIMARY KEY (`id_kat_jabatan`);

--
-- Indexes for table `kat_kendinas`
--
ALTER TABLE `kat_kendinas`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_makanan`
--
ALTER TABLE `kat_makanan`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_matsus`
--
ALTER TABLE `kat_matsus`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_muhandak`
--
ALTER TABLE `kat_muhandak`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_optik`
--
ALTER TABLE `kat_optik`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_pang`
--
ALTER TABLE `kat_pang`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kat_teknisi`
--
ALTER TABLE `kat_teknisi`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `log_alhub`
--
ALTER TABLE `log_alhub`
  ADD PRIMARY KEY (`id_alhub`);

--
-- Indexes for table `log_alkapsat`
--
ALTER TABLE `log_alkapsat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_alkapsus`
--
ALTER TABLE `log_alkapsus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_alsatri`
--
ALTER TABLE `log_alsatri`
  ADD PRIMARY KEY (`id_alsatri`);

--
-- Indexes for table `log_alutsista`
--
ALTER TABLE `log_alutsista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_bmp`
--
ALTER TABLE `log_bmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_kaporlap`
--
ALTER TABLE `log_kaporlap`
  ADD PRIMARY KEY (`id_kaporlap`);

--
-- Indexes for table `log_kendaraan`
--
ALTER TABLE `log_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_kendinas`
--
ALTER TABLE `log_kendinas`
  ADD PRIMARY KEY (`id_kendinas`);

--
-- Indexes for table `log_makanan`
--
ALTER TABLE `log_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_muhandak`
--
ALTER TABLE `log_muhandak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_munisi`
--
ALTER TABLE `log_munisi`
  ADD PRIMARY KEY (`id_munisi`);

--
-- Indexes for table `log_optik`
--
ALTER TABLE `log_optik`
  ADD PRIMARY KEY (`id_optik`);

--
-- Indexes for table `log_pangkalan`
--
ALTER TABLE `log_pangkalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_pangkalan2`
--
ALTER TABLE `log_pangkalan2`
  ADD PRIMARY KEY (`id_pangkalan`);

--
-- Indexes for table `log_teknisi`
--
ALTER TABLE `log_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `operasi_akademik`
--
ALTER TABLE `operasi_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasi_bujuk`
--
ALTER TABLE `operasi_bujuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasi_dspp`
--
ALTER TABLE `operasi_dspp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasi_omp`
--
ALTER TABLE `operasi_omp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasi_omsp`
--
ALTER TABLE `operasi_omsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasi_protap`
--
ALTER TABLE `operasi_protap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasi_top`
--
ALTER TABLE `operasi_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pers_bahasa`
--
ALTER TABLE `pers_bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `pers_data_cuti`
--
ALTER TABLE `pers_data_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `pers_data_kes`
--
ALTER TABLE `pers_data_kes`
  ADD PRIMARY KEY (`id_data_kes`);

--
-- Indexes for table `pers_data_personil`
--
ALTER TABLE `pers_data_personil`
  ADD PRIMARY KEY (`id_data_personil`),
  ADD UNIQUE KEY `nrp` (`nrp`);

--
-- Indexes for table `pers_dik`
--
ALTER TABLE `pers_dik`
  ADD PRIMARY KEY (`id_dik`);

--
-- Indexes for table `pers_dik_lak`
--
ALTER TABLE `pers_dik_lak`
  ADD PRIMARY KEY (`id_dik_lak`);

--
-- Indexes for table `pers_keahlian`
--
ALTER TABLE `pers_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `pers_mat_alkes`
--
ALTER TABLE `pers_mat_alkes`
  ADD PRIMARY KEY (`id_mat_alkes`);

--
-- Indexes for table `pers_obat`
--
ALTER TABLE `pers_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pers_pelanggaran`
--
ALTER TABLE `pers_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `pers_prestasi`
--
ALTER TABLE `pers_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `pers_rikes`
--
ALTER TABLE `pers_rikes`
  ADD PRIMARY KEY (`id_rikes`);

--
-- Indexes for table `pers_rwt_jabatan`
--
ALTER TABLE `pers_rwt_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pers_rwt_ops`
--
ALTER TABLE `pers_rwt_ops`
  ADD PRIMARY KEY (`id_riwayat_ops`);

--
-- Indexes for table `pers_rwt_pangkat`
--
ALTER TABLE `pers_rwt_pangkat`
  ADD PRIMARY KEY (`id_rwt_pangkat`);

--
-- Indexes for table `pers_samapta_gbl`
--
ALTER TABLE `pers_samapta_gbl`
  ADD PRIMARY KEY (`id_samapta_gbl`);

--
-- Indexes for table `pers_samapta_org`
--
ALTER TABLE `pers_samapta_org`
  ADD PRIMARY KEY (`id_samapta_org`);

--
-- Indexes for table `pers_suami_istri`
--
ALTER TABLE `pers_suami_istri`
  ADD PRIMARY KEY (`id_suami_istri`);

--
-- Indexes for table `pers_tanda_jasa`
--
ALTER TABLE `pers_tanda_jasa`
  ADD PRIMARY KEY (`id_tanda_jasa`);

--
-- Indexes for table `pers_tgs_ln`
--
ALTER TABLE `pers_tgs_ln`
  ADD PRIMARY KEY (`id_tgs_luarnegeri`);

--
-- Indexes for table `pers_tpt_tinggal`
--
ALTER TABLE `pers_tpt_tinggal`
  ADD PRIMARY KEY (`id_tpt_tinggal`);

--
-- Indexes for table `sheet`
--
ALTER TABLE `sheet`
  ADD PRIMARY KEY (`sheetid`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `triggers`
--
ALTER TABLE `triggers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dinas_apel`
--
ALTER TABLE `dinas_apel`
  MODIFY `id_apel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `dinas_pengumuman`
--
ALTER TABLE `dinas_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dinas_resume`
--
ALTER TABLE `dinas_resume`
  MODIFY `id_resume` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kat_alhub`
--
ALTER TABLE `kat_alhub`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kat_alkapsat`
--
ALTER TABLE `kat_alkapsat`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kat_alsatri`
--
ALTER TABLE `kat_alsatri`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kat_bmp`
--
ALTER TABLE `kat_bmp`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kat_dikbangspers`
--
ALTER TABLE `kat_dikbangspers`
  MODIFY `id_dikbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kat_jabatan`
--
ALTER TABLE `kat_jabatan`
  MODIFY `id_kat_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kat_kendinas`
--
ALTER TABLE `kat_kendinas`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kat_makanan`
--
ALTER TABLE `kat_makanan`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kat_matsus`
--
ALTER TABLE `kat_matsus`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kat_muhandak`
--
ALTER TABLE `kat_muhandak`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kat_optik`
--
ALTER TABLE `kat_optik`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kat_pang`
--
ALTER TABLE `kat_pang`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kat_teknisi`
--
ALTER TABLE `kat_teknisi`
  MODIFY `id_kat` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log_alhub`
--
ALTER TABLE `log_alhub`
  MODIFY `id_alhub` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_alkapsat`
--
ALTER TABLE `log_alkapsat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_alkapsus`
--
ALTER TABLE `log_alkapsus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_alsatri`
--
ALTER TABLE `log_alsatri`
  MODIFY `id_alsatri` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_alutsista`
--
ALTER TABLE `log_alutsista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_bmp`
--
ALTER TABLE `log_bmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_kaporlap`
--
ALTER TABLE `log_kaporlap`
  MODIFY `id_kaporlap` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_kendaraan`
--
ALTER TABLE `log_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_kendinas`
--
ALTER TABLE `log_kendinas`
  MODIFY `id_kendinas` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_makanan`
--
ALTER TABLE `log_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_muhandak`
--
ALTER TABLE `log_muhandak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_munisi`
--
ALTER TABLE `log_munisi`
  MODIFY `id_munisi` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_optik`
--
ALTER TABLE `log_optik`
  MODIFY `id_optik` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_pangkalan`
--
ALTER TABLE `log_pangkalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_pangkalan2`
--
ALTER TABLE `log_pangkalan2`
  MODIFY `id_pangkalan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_teknisi`
--
ALTER TABLE `log_teknisi`
  MODIFY `id_teknisi` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operasi_akademik`
--
ALTER TABLE `operasi_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `operasi_bujuk`
--
ALTER TABLE `operasi_bujuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `operasi_dspp`
--
ALTER TABLE `operasi_dspp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `operasi_omp`
--
ALTER TABLE `operasi_omp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operasi_omsp`
--
ALTER TABLE `operasi_omsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operasi_protap`
--
ALTER TABLE `operasi_protap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `operasi_top`
--
ALTER TABLE `operasi_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pers_bahasa`
--
ALTER TABLE `pers_bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pers_data_cuti`
--
ALTER TABLE `pers_data_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pers_data_kes`
--
ALTER TABLE `pers_data_kes`
  MODIFY `id_data_kes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pers_data_personil`
--
ALTER TABLE `pers_data_personil`
  MODIFY `id_data_personil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pers_dik`
--
ALTER TABLE `pers_dik`
  MODIFY `id_dik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `pers_dik_lak`
--
ALTER TABLE `pers_dik_lak`
  MODIFY `id_dik_lak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pers_keahlian`
--
ALTER TABLE `pers_keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pers_mat_alkes`
--
ALTER TABLE `pers_mat_alkes`
  MODIFY `id_mat_alkes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pers_obat`
--
ALTER TABLE `pers_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pers_pelanggaran`
--
ALTER TABLE `pers_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pers_prestasi`
--
ALTER TABLE `pers_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pers_rikes`
--
ALTER TABLE `pers_rikes`
  MODIFY `id_rikes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pers_rwt_jabatan`
--
ALTER TABLE `pers_rwt_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pers_rwt_ops`
--
ALTER TABLE `pers_rwt_ops`
  MODIFY `id_riwayat_ops` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pers_rwt_pangkat`
--
ALTER TABLE `pers_rwt_pangkat`
  MODIFY `id_rwt_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pers_samapta_gbl`
--
ALTER TABLE `pers_samapta_gbl`
  MODIFY `id_samapta_gbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pers_samapta_org`
--
ALTER TABLE `pers_samapta_org`
  MODIFY `id_samapta_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pers_suami_istri`
--
ALTER TABLE `pers_suami_istri`
  MODIFY `id_suami_istri` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pers_tanda_jasa`
--
ALTER TABLE `pers_tanda_jasa`
  MODIFY `id_tanda_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pers_tgs_ln`
--
ALTER TABLE `pers_tgs_ln`
  MODIFY `id_tgs_luarnegeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pers_tpt_tinggal`
--
ALTER TABLE `pers_tpt_tinggal`
  MODIFY `id_tpt_tinggal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `triggers`
--
ALTER TABLE `triggers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
