/*
Navicat MySQL Data Transfer

Source Server         : Koneksi_Saya
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tbsbd

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-05-23 13:43:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_berat` int(11) NOT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `id_produk` (`id_produk`),
  KEY `cart_ibfk_2` (`id_user`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for `kategori_barang`
-- ----------------------------
DROP TABLE IF EXISTS `kategori_barang`;
CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of kategori_barang
-- ----------------------------

-- ----------------------------
-- Table structure for `metode_pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `metode_pembayaran`;
CREATE TABLE `metode_pembayaran` (
  `id_metode` int(11) NOT NULL AUTO_INCREMENT,
  `nama_metode` varchar(50) NOT NULL,
  PRIMARY KEY (`id_metode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of metode_pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for `metode_pengiriman`
-- ----------------------------
DROP TABLE IF EXISTS `metode_pengiriman`;
CREATE TABLE `metode_pengiriman` (
  `id_ekspedisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ekspedisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ekspedisi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of metode_pengiriman
-- ----------------------------

-- ----------------------------
-- Table structure for `produk`
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL,
  `stok_barang` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `berat_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `bonus_produk` varchar(100) DEFAULT NULL,
  `tgl_rilis` date DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `produksi` varchar(50) DEFAULT NULL,
  `lokasi_produk` varchar(50) NOT NULL,
  `kondisi_produk` varchar(40) NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of produk
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL,
  `username_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'anjanijani@gmail.com', 'Ratih Anjani', '081212345678', '11111111', 'Jalan Pegangsaan Timur No.56 06/04', 'anjani', '$2y$10$iU1AgcbOAuNi4wOmC61CvOKwvRFiOlApKBysaagACvTQEkK0B3qom');
INSERT INTO `user` VALUES ('2', 'moriarty@gmail.com', 'Moriarty XYZ', '081243215678', '12345', 'Jalan Pegangsaan Timur No.57 06/04', 'moriarty', '$2y$10$Z3/XElVYQz4FZEoafiHDlefvL1S0dcOYev49IJaME.9P3aC1j8cbi');
