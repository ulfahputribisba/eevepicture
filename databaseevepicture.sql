-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.1.53-community-log - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for evepicture
CREATE DATABASE IF NOT EXISTS `evepicture` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `evepicture`;


-- Dumping structure for table evepicture.foto
CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `sifoto` longblob,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table evepicture.foto: 0 rows
DELETE FROM `foto`;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;


-- Dumping structure for table evepicture.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `judulfoto` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table evepicture.galeri: 1 rows
DELETE FROM `galeri`;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`judulfoto`) VALUES
	('2 (FILEminimizer).JPG'),
	('11 (FILEminimizer).jpg');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;


-- Dumping structure for table evepicture.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `id_nami` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `pesan` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table evepicture.kontak: 3 rows
DELETE FROM `kontak`;
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` (`id_nami`, `mail`, `pesan`) VALUES
	('dhanis', 'dhanisalghifari@gmail.com', 'pesan dong');
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;


-- Dumping structure for table evepicture.services
CREATE TABLE IF NOT EXISTS `services` (
  `id_pelayanan` enum('foto','vido','bukutahunan') DEFAULT NULL,
  `id_penjelasan` varchar(700) DEFAULT NULL,
  `id_jenis` varchar(700) DEFAULT NULL,
  `id_harga` varchar(700) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table evepicture.services: 0 rows
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id_pelayanan`, `id_penjelasan`, `id_jenis`, `id_harga`) VALUES
	('foto', 'Kami melayani berbagai jenis foto yang anda inginkan, hasil photo yang kami berikan adalah hasil photo yang terbaik, dari beberapa jepretan dan pilihan photo yang tersedia, serta tentunya dengan photographer yang professional dalam bidang photography dilengkapi pula dengan alat-alat pendukung photography lainnya, yang membuat hasil photo jauh lebih maksimal. Kami juga menawarkan konsep-konsep photo yang creative dan berbeda yang akan membuat hasil photo tidak monoton.', '', ''),
	('vido', '', 'video cover', 'harga dimulai dari Rp 100.000');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;


-- Dumping structure for table evepicture.testimoni
CREATE TABLE IF NOT EXISTS `testimoni` (
  `nama` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `komentar` varchar(700) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table evepicture.testimoni: 5 rows
DELETE FROM `testimoni`;
/*!40000 ALTER TABLE `testimoni` DISABLE KEYS */;
INSERT INTO `testimoni` (`nama`, `pekerjaan`, `komentar`, `foto`) VALUES
	('Putri Danizar', 'DJ/Musician', 'Eve Picture selalu mengambil gambar saya selalu sempurna saat saya sedang tampil di atas panggung, hasil video editingnya pun juga sempurna. Senang bisa bekerja sama dengan Eve Picture', '');
/*!40000 ALTER TABLE `testimoni` ENABLE KEYS */;


-- Dumping structure for table evepicture.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_telp` int(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table evepicture.user: 1 rows
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `password`, `nama_user`, `jenis_kelamin`, `no_telp`, `email`) VALUES
	('dhanis13', '131212', 'dhanis alghifari', 'L', 2147483647, 'dhanisalghifari@gmail.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
