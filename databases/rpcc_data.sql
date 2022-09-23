/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : rpcc_data

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 30/04/2021 06:27:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_jenis_part
-- ----------------------------
DROP TABLE IF EXISTS `tb_jenis_part`;
CREATE TABLE `tb_jenis_part`  (
  `id_jpart` int(11) NOT NULL,
  `jenis_part` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jpart`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_jenis_part
-- ----------------------------
INSERT INTO `tb_jenis_part` VALUES (1, 'motherboard');
INSERT INTO `tb_jenis_part` VALUES (2, 'processor');
INSERT INTO `tb_jenis_part` VALUES (3, 'vga');
INSERT INTO `tb_jenis_part` VALUES (4, 'hard disk');
INSERT INTO `tb_jenis_part` VALUES (5, 'solid state drive');
INSERT INTO `tb_jenis_part` VALUES (6, 'ram');
INSERT INTO `tb_jenis_part` VALUES (7, 'power supply');
INSERT INTO `tb_jenis_part` VALUES (8, 'fan processor/HSF');
INSERT INTO `tb_jenis_part` VALUES (9, 'fan 12 cm');
INSERT INTO `tb_jenis_part` VALUES (10, 'heatsink');
INSERT INTO `tb_jenis_part` VALUES (11, 'led strip');
INSERT INTO `tb_jenis_part` VALUES (12, 'monitor');
INSERT INTO `tb_jenis_part` VALUES (13, 'keyboard');
INSERT INTO `tb_jenis_part` VALUES (14, 'mouse');
INSERT INTO `tb_jenis_part` VALUES (15, 'mousepad');
INSERT INTO `tb_jenis_part` VALUES (16, 'headphone');
INSERT INTO `tb_jenis_part` VALUES (17, 'gaming chair');
INSERT INTO `tb_jenis_part` VALUES (18, 'decoration');

-- ----------------------------
-- Table structure for tb_part
-- ----------------------------
DROP TABLE IF EXISTS `tb_part`;
CREATE TABLE `tb_part`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_part` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi_part` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto_part` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_part` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jenis_part`(`jenis_part`) USING BTREE,
  CONSTRAINT `tb_part_ibfk_1` FOREIGN KEY (`jenis_part`) REFERENCES `tb_jenis_part` (`id_jpart`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_part
-- ----------------------------
INSERT INTO `tb_part` VALUES (1, 'GTX 1050 ti', 'ini vga mantap', 'gtx1050ti.jpg', 3);
INSERT INTO `tb_part` VALUES (2, 'GTX 750 ti', 'ini vga lord', 'gtx750ti.jpg', 3);
INSERT INTO `tb_part` VALUES (3, 'GTX 650 ti', 'ini vga mantap2', 'gtx650ti.jpg', 3);
INSERT INTO `tb_part` VALUES (4, 'GTX 550 ti', 'ini vga dx11', 'gtx550ti.jpg', 3);
INSERT INTO `tb_part` VALUES (5, 'GTS 450', 'ini vga enak buat valo', 'gts450.jpg', 3);
INSERT INTO `tb_part` VALUES (6, 'GTS 250', 'ini vga enak buat pb', 'gts250.jpg', 3);
INSERT INTO `tb_part` VALUES (7, 'GT 1030', 'ini vga solusi saat vga mahal', 'gt1030.jpg', 3);
INSERT INTO `tb_part` VALUES (8, 'GT 710', 'ini vga solusi ke 2', 'gt710.jpg', 3);
INSERT INTO `tb_part` VALUES (9, 'GT 440 ', 'ini vga low untuk pb dan gtav', 'gt440.jpg', 3);
INSERT INTO `tb_part` VALUES (10, 'GT 220', 'ini vga ddr2', 'gt220.jpg', 3);

SET FOREIGN_KEY_CHECKS = 1;
