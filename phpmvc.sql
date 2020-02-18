# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2020-01-14 16:56:03
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES (3,'Adrian','181910006','adrian@gmail.com','Jaringan'),(4,'Iqbal Maulana','181910017','iqbal@gmail.com','Program Aplikasi'),(5,'Naufal Nur Hidayat','181910038','naufal.gen13@gmail.com','Program Aplikasi');
