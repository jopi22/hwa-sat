/*
 Navicat Premium Data Transfer

 Source Server         : MariaDB - JOPI
 Source Server Type    : MySQL
 Source Server Version : 100425 (10.4.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : hwa-cek

 Target Server Type    : MySQL
 Target Server Version : 100425 (10.4.25-MariaDB)
 File Encoding         : 65001

 Date: 29/04/2023 09:51:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galeris
-- ----------------------------
DROP TABLE IF EXISTS `galeris`;
CREATE TABLE `galeris`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeris
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_absensi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_absensi`;
CREATE TABLE `hwa_absensi`  (
  `kode_unik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id` bigint NOT NULL AUTO_INCREMENT,
  `tgl` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `karyawan` bigint NULL DEFAULT NULL,
  `status` bigint NULL DEFAULT NULL,
  `periode_id` bigint NULL DEFAULT NULL,
  `pengajuan_fk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6973 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_absensi
-- ----------------------------
INSERT INTO `hwa_absensi` VALUES ('1392', 6805, '01-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1393', 6806, '01-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1394', 6807, '01-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1395', 6808, '01-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1396', 6809, '01-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1397', 6810, '01-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1392', 6811, '02-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:50', '2023-04-26 07:46:50');
INSERT INTO `hwa_absensi` VALUES ('1393', 6812, '02-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1394', 6813, '02-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1395', 6814, '02-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1396', 6815, '02-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1397', 6816, '02-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1392', 6817, '03-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1393', 6818, '03-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1394', 6819, '03-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1395', 6820, '03-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1396', 6821, '03-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1397', 6822, '03-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1392', 6823, '04-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:51', '2023-04-26 07:46:51');
INSERT INTO `hwa_absensi` VALUES ('1393', 6824, '04-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1394', 6825, '04-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1395', 6826, '04-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1396', 6827, '04-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1397', 6828, '04-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1392', 6829, '05-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1393', 6830, '05-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1394', 6831, '05-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1395', 6832, '05-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1396', 6833, '05-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1397', 6834, '05-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1392', 6835, '06-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1393', 6836, '06-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1394', 6837, '06-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1395', 6838, '06-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1396', 6839, '06-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1397', 6840, '06-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1392', 6841, '07-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:52', '2023-04-26 07:46:52');
INSERT INTO `hwa_absensi` VALUES ('1393', 6842, '07-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1394', 6843, '07-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1395', 6844, '07-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1396', 6845, '07-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1397', 6846, '07-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1392', 6847, '08-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1393', 6848, '08-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1394', 6849, '08-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1395', 6850, '08-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1396', 6851, '08-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1397', 6852, '08-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1392', 6853, '09-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1393', 6854, '09-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1394', 6855, '09-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1395', 6856, '09-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1396', 6857, '09-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1397', 6858, '09-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1392', 6859, '10-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1393', 6860, '10-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1394', 6861, '10-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1395', 6862, '10-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1396', 6863, '10-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1397', 6864, '10-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:53', '2023-04-26 07:46:53');
INSERT INTO `hwa_absensi` VALUES ('1392', 6865, '11-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1393', 6866, '11-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1394', 6867, '11-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1395', 6868, '11-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1396', 6869, '11-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1397', 6870, '11-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1392', 6871, '12-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1393', 6872, '12-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1394', 6873, '12-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1395', 6874, '12-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1396', 6875, '12-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1397', 6876, '12-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1392', 6877, '13-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1393', 6878, '13-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1394', 6879, '13-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1395', 6880, '13-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1396', 6881, '13-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1397', 6882, '13-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:54', '2023-04-26 07:46:54');
INSERT INTO `hwa_absensi` VALUES ('1392', 6883, '14-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1393', 6884, '14-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1394', 6885, '14-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1395', 6886, '14-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1396', 6887, '14-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1397', 6888, '14-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1392', 6889, '15-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1393', 6890, '15-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1394', 6891, '15-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1395', 6892, '15-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1396', 6893, '15-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1397', 6894, '15-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1392', 6895, '16-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1393', 6896, '16-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1394', 6897, '16-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1395', 6898, '16-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1396', 6899, '16-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:55', '2023-04-26 07:46:55');
INSERT INTO `hwa_absensi` VALUES ('1397', 6900, '16-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1392', 6901, '17-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1393', 6902, '17-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1394', 6903, '17-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1395', 6904, '17-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1396', 6905, '17-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1397', 6906, '17-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1392', 6907, '18-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1393', 6908, '18-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1394', 6909, '18-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1395', 6910, '18-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1396', 6911, '18-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1397', 6912, '18-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1392', 6913, '19-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1393', 6914, '19-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1394', 6915, '19-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1395', 6916, '19-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1396', 6917, '19-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1397', 6918, '19-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1392', 6919, '20-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1393', 6920, '20-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:56', '2023-04-26 07:46:56');
INSERT INTO `hwa_absensi` VALUES ('1394', 6921, '20-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1395', 6922, '20-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1396', 6923, '20-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1397', 6924, '20-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1392', 6925, '21-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1393', 6926, '21-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1394', 6927, '21-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:57', '2023-04-26 07:46:57');
INSERT INTO `hwa_absensi` VALUES ('1395', 6928, '21-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1396', 6929, '21-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1397', 6930, '21-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1392', 6931, '22-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1393', 6932, '22-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1394', 6933, '22-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1395', 6934, '22-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1396', 6935, '22-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1397', 6936, '22-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1392', 6937, '23-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1393', 6938, '23-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1394', 6939, '23-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1395', 6940, '23-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1396', 6941, '23-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1397', 6942, '23-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1392', 6943, '24-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1393', 6944, '24-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:58', '2023-04-26 07:46:58');
INSERT INTO `hwa_absensi` VALUES ('1394', 6945, '24-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1395', 6946, '24-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1396', 6947, '24-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1397', 6948, '24-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1392', 6949, '25-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1393', 6950, '25-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1394', 6951, '25-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1395', 6952, '25-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1396', 6953, '25-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1397', 6954, '25-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1392', 6955, '26-04-2023', 2, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1393', 6956, '26-04-2023', 3, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1394', 6957, '26-04-2023', 4, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1395', 6958, '26-04-2023', 5, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1396', 6959, '26-04-2023', 6, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1397', 6960, '26-04-2023', 7, 8, 139, NULL, '2023-04-26 07:46:59', '2023-04-26 07:46:59');
INSERT INTO `hwa_absensi` VALUES ('1392', 6961, '27-04-2023', 2, 3, 139, '26-04-2023-11:22', '2023-04-26 11:23:16', '2023-04-26 11:23:16');
INSERT INTO `hwa_absensi` VALUES ('1393', 6962, '27-04-2023', 3, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1394', 6963, '27-04-2023', 4, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1395', 6964, '27-04-2023', 5, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1396', 6965, '27-04-2023', 6, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1397', 6966, '27-04-2023', 7, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1392', 6967, '28-04-2023', 2, 3, 139, '26-04-2023-11:22', '2023-04-26 11:23:16', '2023-04-26 11:23:16');
INSERT INTO `hwa_absensi` VALUES ('1393', 6968, '28-04-2023', 3, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1394', 6969, '28-04-2023', 4, 8, 139, NULL, '2023-04-26 07:47:00', '2023-04-26 07:47:00');
INSERT INTO `hwa_absensi` VALUES ('1395', 6970, '28-04-2023', 5, 8, 139, NULL, '2023-04-26 07:47:01', '2023-04-26 07:47:01');
INSERT INTO `hwa_absensi` VALUES ('1396', 6971, '28-04-2023', 6, 8, 139, NULL, '2023-04-26 07:47:01', '2023-04-26 07:47:01');
INSERT INTO `hwa_absensi` VALUES ('1397', 6972, '28-04-2023', 7, 8, 139, NULL, '2023-04-26 07:47:01', '2023-04-26 07:47:01');

-- ----------------------------
-- Table structure for hwa_bank
-- ----------------------------
DROP TABLE IF EXISTS `hwa_bank`;
CREATE TABLE `hwa_bank`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hwa_bank
-- ----------------------------
INSERT INTO `hwa_bank` VALUES (1, 'BRI', '2023-01-08 06:06:05', '2023-01-08 06:06:05');
INSERT INTO `hwa_bank` VALUES (2, 'MANDIRI', '2023-01-08 06:06:13', '2023-01-08 06:06:13');
INSERT INTO `hwa_bank` VALUES (4, 'CU Semandang Jaya', '2023-01-16 14:50:51', '2023-02-13 15:38:54');

-- ----------------------------
-- Table structure for hwa_brand
-- ----------------------------
DROP TABLE IF EXISTS `hwa_brand`;
CREATE TABLE `hwa_brand`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_brand
-- ----------------------------
INSERT INTO `hwa_brand` VALUES (1, 'Hitachi', NULL, NULL);
INSERT INTO `hwa_brand` VALUES (2, 'Sasuke', NULL, NULL);

-- ----------------------------
-- Table structure for hwa_breakdown
-- ----------------------------
DROP TABLE IF EXISTS `hwa_breakdown`;
CREATE TABLE `hwa_breakdown`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `equip_id` bigint NULL DEFAULT NULL,
  `jam_mulai` datetime NULL DEFAULT NULL,
  `jam_selesai` datetime NULL DEFAULT NULL,
  `jam_total` int NULL DEFAULT NULL,
  `dedicated_id` bigint NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `master_id` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_breakdown
-- ----------------------------
INSERT INTO `hwa_breakdown` VALUES (7, '9-02-2023', 4, NULL, NULL, 0, NULL, 'sdasd asdas sdas', 'asdasd sadas  sdasd', '2023-02-07 19:35:56', '2023-02-07 19:35:56', 105);
INSERT INTO `hwa_breakdown` VALUES (8, '1-02-2023', 1, '2023-02-01 12:00:00', '2023-02-01 14:00:00', 2, NULL, 'lorem ipsum', 'lorem ipsum', '2023-02-10 15:18:15', '2023-02-10 15:18:15', 137);
INSERT INTO `hwa_breakdown` VALUES (9, '2-02-2023', 2, '2023-02-03 12:00:00', '2023-02-11 12:00:00', 192, NULL, 'lorem ipsum', 'lorem ipsum', '2023-02-10 15:19:38', '2023-02-10 15:19:38', 137);
INSERT INTO `hwa_breakdown` VALUES (10, '3-02-2023', 3, '2023-02-01 12:00:00', '2023-02-02 12:00:00', 24, NULL, 'lorem ipsum', 'lorem ipsum', '2023-02-10 15:19:55', '2023-02-10 15:19:55', 137);
INSERT INTO `hwa_breakdown` VALUES (11, '4-02-2023', 4, '2023-02-15 18:00:00', '2023-02-16 12:00:00', 18, NULL, 'lorem ipsum', 'lorem ipsum', '2023-02-10 15:20:17', '2023-02-10 15:20:17', 137);
INSERT INTO `hwa_breakdown` VALUES (12, '5-02-2023', 4, '2023-02-09 12:00:00', '2023-02-11 12:00:00', 48, NULL, 'lorem ipsum', 'lorem ipsum', '2023-02-10 15:20:55', '2023-02-10 15:20:55', 137);
INSERT INTO `hwa_breakdown` VALUES (13, '11-02-2023', 5, '2023-02-23 02:00:00', '2023-02-24 12:00:00', 34, NULL, NULL, NULL, '2023-02-10 15:21:15', '2023-02-10 15:21:15', 137);

-- ----------------------------
-- Table structure for hwa_catatan
-- ----------------------------
DROP TABLE IF EXISTS `hwa_catatan`;
CREATE TABLE `hwa_catatan`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catatan
-- ----------------------------
INSERT INTO `hwa_catatan` VALUES (2, 'judulasdasdasd', '<p>asdasdasdasda<mark class=\"marker-yellow\">sdasdasdasdasdasdasdasdsadasdasd</mark></p>', 'kategori', '2023-04-28 21:08:58', '2023-04-28 21:42:02');

-- ----------------------------
-- Table structure for hwa_catering
-- ----------------------------
DROP TABLE IF EXISTS `hwa_catering`;
CREATE TABLE `hwa_catering`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `cat_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pagi` int NULL DEFAULT NULL,
  `siang` int NULL DEFAULT NULL,
  `sore` int NULL DEFAULT NULL,
  `malam` int NULL DEFAULT NULL,
  `total` int NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catering
-- ----------------------------
INSERT INTO `hwa_catering` VALUES (4, '1-02-2023', '105', '7', 1, 34, 34, 34, 103, '123', '2023-02-09 03:55:35', '2023-02-09 03:55:35');
INSERT INTO `hwa_catering` VALUES (5, '2-02-2023', '105', '7', 1, 34, 34, 34, 103, '231', '2023-02-09 03:55:35', '2023-02-09 03:55:35');
INSERT INTO `hwa_catering` VALUES (6, '1-02-2023', '137', '8', 12, 312, 123, 123, 570, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:44', '2023-02-10 15:47:44');
INSERT INTO `hwa_catering` VALUES (7, '2-02-2023', '137', '8', 12, 123, 123, 123, 381, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:44', '2023-02-10 15:47:44');
INSERT INTO `hwa_catering` VALUES (8, '3-02-2023', '137', '8', 543, 45, 342, 231, 1161, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:44', '2023-02-10 15:47:44');
INSERT INTO `hwa_catering` VALUES (9, '4-02-2023', '137', '8', 3, 34, 343, 324, 704, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:44', '2023-02-10 15:47:44');
INSERT INTO `hwa_catering` VALUES (10, '5-02-2023', '137', '8', 433, 34, 3, 34, 504, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:44', '2023-02-10 15:47:44');
INSERT INTO `hwa_catering` VALUES (11, '6-02-2023', '137', '8', 34, 34, 34, 343, 445, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:45', '2023-02-10 15:47:45');
INSERT INTO `hwa_catering` VALUES (12, '7-02-2023', '137', '8', 343, 4, 34, 343, 724, 'Lorem ipsum dolor sit amet consectetur adipisicing', '2023-02-10 15:47:45', '2023-02-10 15:47:45');

-- ----------------------------
-- Table structure for hwa_catering_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_catering_master`;
CREATE TABLE `hwa_catering_master`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `atas_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `porsi_harga` int NULL DEFAULT NULL,
  `tot_pagi` int NULL DEFAULT NULL,
  `tot_siang` int NULL DEFAULT NULL,
  `tot_sore` int NULL DEFAULT NULL,
  `tot_malam` int NULL DEFAULT NULL,
  `tot_porsi` int NULL DEFAULT NULL,
  `tot_harga` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `valid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catering_master
-- ----------------------------
INSERT INTO `hwa_catering_master` VALUES (8, '137', 'Mamang', 'Bank PDI', '112', 1000000, 1380, 586, 1002, 1521, 4489, '4,489,000,000', NULL, '2023-02-10 15:52:00', '2023-02-10 15:52:00');
INSERT INTO `hwa_catering_master` VALUES (9, '139', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-28 10:14:20', '2023-04-28 10:14:20');

-- ----------------------------
-- Table structure for hwa_dedicated
-- ----------------------------
DROP TABLE IF EXISTS `hwa_dedicated`;
CREATE TABLE `hwa_dedicated`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `dedicated` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_dedicated
-- ----------------------------
INSERT INTO `hwa_dedicated` VALUES (1, 'dedi 1', NULL, NULL);
INSERT INTO `hwa_dedicated` VALUES (2, 'dedi 2', NULL, NULL);

-- ----------------------------
-- Table structure for hwa_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `hwa_dokumen`;
CREATE TABLE `hwa_dokumen`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_dokumen
-- ----------------------------
INSERT INTO `hwa_dokumen` VALUES (2, '112313`2', 'sdasdasd', 'file/arsip/dokumen/file16826501301658754741DOKUMEN.pdf', '2023-04-28 09:48:50', '2023-04-28 09:48:50');
INSERT INTO `hwa_dokumen` VALUES (3, '22222', 'asdasd', 'file/arsip/dokumen/file16826501431658754741DOKUMEN.pdf', '2023-04-28 09:49:03', '2023-04-28 09:49:03');

-- ----------------------------
-- Table structure for hwa_equip_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_equip_master`;
CREATE TABLE `hwa_equip_master`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `equip_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hm_awal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hm_akhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_pot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_jam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_hm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grand_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_unik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `valid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_equip_master
-- ----------------------------
INSERT INTO `hwa_equip_master` VALUES (23, '137', '1', '0', '300', '1', '0', '299', '299', '1371', NULL, '2023-02-10 13:34:33', '2023-02-10 13:34:33');
INSERT INTO `hwa_equip_master` VALUES (24, '137', '2', '0', '300', '20', '0', '280', '280', '1372', NULL, '2023-02-10 13:43:02', '2023-02-10 13:43:02');
INSERT INTO `hwa_equip_master` VALUES (27, '137', '3', '123', '788', '0', '0', '665', '665', '1373', NULL, '2023-02-10 13:48:17', '2023-02-10 13:48:17');
INSERT INTO `hwa_equip_master` VALUES (28, '137', '4', NULL, NULL, NULL, NULL, NULL, NULL, '1374', NULL, '2023-02-10 13:15:31', '2023-02-10 13:15:31');
INSERT INTO `hwa_equip_master` VALUES (29, '137', '5', NULL, NULL, NULL, NULL, NULL, NULL, '1375', NULL, '2023-02-10 13:15:43', '2023-02-10 13:15:43');
INSERT INTO `hwa_equip_master` VALUES (30, '139', '2', NULL, NULL, NULL, NULL, NULL, NULL, '1392', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (31, '139', '3', NULL, NULL, NULL, NULL, NULL, NULL, '1393', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (32, '139', '4', NULL, NULL, NULL, NULL, NULL, NULL, '1394', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (33, '139', '237', NULL, NULL, NULL, NULL, NULL, NULL, '139237', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (34, '139', '241', NULL, NULL, NULL, NULL, NULL, NULL, '139241', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (35, '139', '242', NULL, NULL, NULL, NULL, NULL, NULL, '139242', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (36, '139', '243', NULL, NULL, NULL, NULL, NULL, NULL, '139243', NULL, '2023-04-26 14:52:07', '2023-04-26 14:52:07');
INSERT INTO `hwa_equip_master` VALUES (37, '139', '245', NULL, NULL, NULL, NULL, NULL, NULL, '139245', NULL, '2023-04-26 14:52:08', '2023-04-26 14:52:08');

-- ----------------------------
-- Table structure for hwa_equipment
-- ----------------------------
DROP TABLE IF EXISTS `hwa_equipment`;
CREATE TABLE `hwa_equipment`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `start_op` datetime NULL DEFAULT NULL,
  `end_op` datetime NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 248 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_equipment
-- ----------------------------
INSERT INTO `hwa_equipment` VALUES (1, 'HWA-102', 'HWA-1022123', '123x3x23', 'Heavy Equipment', 'Excavator', 'Baygon', 'Tidak Aktif', NULL, NULL, '', NULL, NULL, NULL, '2023-02-14 02:34:26');
INSERT INTO `hwa_equipment` VALUES (2, 'HWA-104', 'HWA-102dadsa', '23213x21', 'Vehicle', 'Dump Truck', 'Stalin', 'Aktif', NULL, NULL, '', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equipment` VALUES (3, 'HWA-1111', '123x3x23', '23123df', 'Heavy Equipment', 'Vibro', '123x3x23', 'Tidak Aktif', NULL, NULL, '', NULL, NULL, NULL, '2023-04-28 09:01:11');
INSERT INTO `hwa_equipment` VALUES (4, 'HWA-123', 'SDSAD', '2312', 'Support Equipment', 'Genset', 'Miyako', 'Aktif', NULL, NULL, '', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equipment` VALUES (5, 'HWA-098 123 babi', 'JANCOK-23dsfsfds 213123 babi', '231 12 2312 babi', 'Heavy Equipment', 'Excavator 23123babi', 'Royco 12 123 babi', 'Delete', NULL, NULL, '', NULL, NULL, NULL, '2023-02-13 21:47:16');
INSERT INTO `hwa_equipment` VALUES (237, 'HWA-999', '123x3x23', '123x3x23', 'Heavy Equipment', 'Excavator', '123x3x23', 'Aktif', '2023-02-09 00:00:00', NULL, NULL, '2202313022205', '2', '2023-02-13 22:05:52', '2023-02-14 02:39:16');
INSERT INTO `hwa_equipment` VALUES (238, 'HWA-109', '123x3x23', '123x3x23', 'Heavy Equipment', 'Excavator', '123x3x23', 'Tidak Aktif', '2023-02-03 00:00:00', NULL, NULL, '2202313022205', '2', '2023-02-13 22:05:52', '2023-02-14 02:38:46');
INSERT INTO `hwa_equipment` VALUES (239, 'qqq', 'asdasd', '3123123', 'Heavy Equipment', '323123', '312312', 'Delete', '2023-02-07 00:00:00', NULL, NULL, '2202313022206', '2', '2023-02-13 22:06:46', '2023-02-13 22:07:01');
INSERT INTO `hwa_equipment` VALUES (240, 'qqq', '12312', '12312', 'Heavy Equipment', '12312', '3123', 'Delete', '2023-02-08 00:00:00', NULL, NULL, '2202313022206', '2', '2023-02-13 22:06:46', '2023-02-13 22:06:58');
INSERT INTO `hwa_equipment` VALUES (241, 'sdasd', 'sad', 'asd', 'Vehicle', 'asd', 'asdas', 'Aktif', '2023-01-31 00:00:00', NULL, NULL, '2202313022219', '2', '2023-02-13 22:19:19', '2023-02-13 22:19:19');
INSERT INTO `hwa_equipment` VALUES (242, 'sdasd', 'asd', 'asda', 'Vehicle', 'asd', 'asd', 'Aktif', '2023-02-02 00:00:00', NULL, NULL, '2202313022219', '2', '2023-02-13 22:19:19', '2023-02-13 22:19:19');
INSERT INTO `hwa_equipment` VALUES (243, 'HWA-1023', '123x3x23', '123x3x23', 'Heavy Equipment', 'Vibro', 'Cat', 'Aktif', '2023-02-09 00:00:00', NULL, NULL, '2202313022223', '2', '2023-02-13 22:23:23', '2023-02-14 02:38:54');
INSERT INTO `hwa_equipment` VALUES (244, 'sadasd', 'sda', 'asd', 'Heavy Equipment', 'asd', 'asd', 'Delete', '2023-02-15 00:00:00', NULL, NULL, '2202313022225', '2', '2023-02-13 22:25:30', '2023-02-13 23:01:27');
INSERT INTO `hwa_equipment` VALUES (245, 'sda 213', 'asd', 'asd', 'Vehicle', 'asd', 'asd', 'Aktif', '2023-02-14 00:00:00', NULL, NULL, '2202313022226', '2', '2023-02-13 22:26:27', '2023-02-13 22:28:20');
INSERT INTO `hwa_equipment` VALUES (246, 'asdas', 'asda', 'asda', 'Support Equipment', 'asd', 'asda', 'Tidak Aktif', '2023-02-05 00:00:00', NULL, NULL, '2202313022233', '2', '2023-02-13 22:33:28', '2023-02-13 23:03:17');
INSERT INTO `hwa_equipment` VALUES (247, 'adsd', 'sasd', 'sdasd', 'Support Equipment', 'asdasd', 'sdas', 'Delete', '2023-02-16 00:00:00', NULL, NULL, '2202313022233', '2', '2023-02-13 22:33:28', '2023-02-13 22:34:11');

-- ----------------------------
-- Table structure for hwa_event
-- ----------------------------
DROP TABLE IF EXISTS `hwa_event`;
CREATE TABLE `hwa_event`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `org` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `start` datetime NULL DEFAULT NULL,
  `finish` datetime NULL DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_event
-- ----------------------------
INSERT INTO `hwa_event` VALUES (3, 'sdas', 'sdas', '2023-04-01 12:00:00', '2023-04-05 12:00:00', 'asdasd', 'asda', NULL, '2023-04-26 20:51:19', '2023-04-26 20:51:19');
INSERT INTO `hwa_event` VALUES (4, 'asdadasdasd', 'sada', '2023-04-15 12:00:00', '2023-04-11 12:00:00', 'sdfasdad', 'sasd', 'file/hwa/profil/foto1682517543logo.png', '2023-04-26 20:59:03', '2023-04-26 21:44:41');
INSERT INTO `hwa_event` VALUES (5, 'JOPI', '12123', '2023-04-05 12:00:00', '2023-04-03 12:00:00', '12312312312 1 231231', '123123', 'file/hwa/profil/foto1682580929dadf.png', '2023-04-27 14:23:10', '2023-04-27 14:35:30');

-- ----------------------------
-- Table structure for hwa_foto_galeri
-- ----------------------------
DROP TABLE IF EXISTS `hwa_foto_galeri`;
CREATE TABLE `hwa_foto_galeri`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `galeri_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_foto_galeri
-- ----------------------------
INSERT INTO `hwa_foto_galeri` VALUES (2, '7', 'file/arsip/galeri/foto/168266959220160615_184556_025.jpg', '2023-04-28 15:13:12', '2023-04-28 15:13:12');
INSERT INTO `hwa_foto_galeri` VALUES (3, '7', 'file/arsip/galeri/foto/16826695931658754706photo.png', '2023-04-28 15:13:13', '2023-04-28 15:13:13');

-- ----------------------------
-- Table structure for hwa_galeri
-- ----------------------------
DROP TABLE IF EXISTS `hwa_galeri`;
CREATE TABLE `hwa_galeri`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `tgl` date NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_galeri
-- ----------------------------
INSERT INTO `hwa_galeri` VALUES (7, 'sdasd', 'file/arsip/galeri/thumbnail/file1682663857dadf.png', 'asdasda', '2023-04-28 13:37:37', '2023-04-04', '2023-04-28 13:37:37');

-- ----------------------------
-- Table structure for hwa_history
-- ----------------------------
DROP TABLE IF EXISTS `hwa_history`;
CREATE TABLE `hwa_history`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `token` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 122 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hwa_history
-- ----------------------------
INSERT INTO `hwa_history` VALUES (111, '2202312021015', 'Menambahkan Data Karyawan', 'http://127.0.0.1:8000/karyawan_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-12 10:15:01', '2023-02-12 10:15:01');
INSERT INTO `hwa_history` VALUES (112, '2202312021024', 'Menambahkan Data Karyawan', 'http://127.0.0.1:8000/karyawan_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-12 10:24:47', '2023-02-12 10:24:47');
INSERT INTO `hwa_history` VALUES (113, '2202312021141', 'Menambahkan Data Karyawan', 'http://127.0.0.1:8000/karyawan_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-12 11:41:42', '2023-02-12 11:41:42');
INSERT INTO `hwa_history` VALUES (114, '2202312021628', 'Menambahkan Data Karyawan', 'http://127.0.0.1:8000/karyawan_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-12 16:28:12', '2023-02-12 16:28:12');
INSERT INTO `hwa_history` VALUES (115, '2202313022205', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:05:52', '2023-02-13 22:05:52');
INSERT INTO `hwa_history` VALUES (116, '2202313022206', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:06:46', '2023-02-13 22:06:46');
INSERT INTO `hwa_history` VALUES (117, '2202313022219', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:19:19', '2023-02-13 22:19:19');
INSERT INTO `hwa_history` VALUES (118, '2202313022223', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:23:24', '2023-02-13 22:23:24');
INSERT INTO `hwa_history` VALUES (119, '2202313022225', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:25:30', '2023-02-13 22:25:30');
INSERT INTO `hwa_history` VALUES (120, '2202313022226', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:26:27', '2023-02-13 22:26:27');
INSERT INTO `hwa_history` VALUES (121, '2202313022233', 'Menambahkan Data Equipment (Primer)', 'http://127.0.0.1:8000/equip_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2023-02-13 22:33:28', '2023-02-13 22:33:28');

-- ----------------------------
-- Table structure for hwa_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `hwa_jabatan`;
CREATE TABLE `hwa_jabatan`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hwa_jabatan
-- ----------------------------
INSERT INTO `hwa_jabatan` VALUES (2, 'Penanggung Jawab', '2023-01-08 05:58:12', '2023-01-08 05:58:12');
INSERT INTO `hwa_jabatan` VALUES (3, 'Admin Mandala', '2023-02-13 14:03:38', '2023-02-13 14:03:38');
INSERT INTO `hwa_jabatan` VALUES (4, 'Admin Project', '2023-02-13 14:03:47', '2023-02-13 14:03:47');
INSERT INTO `hwa_jabatan` VALUES (5, 'Driver Dump Truck', '2023-02-13 14:33:28', '2023-02-13 14:33:28');
INSERT INTO `hwa_jabatan` VALUES (6, 'Operator Excavator', '2023-02-13 14:33:42', '2023-02-13 14:33:42');
INSERT INTO `hwa_jabatan` VALUES (12, 'Operator Vibro', '2023-02-13 14:33:53', '2023-02-13 14:33:53');
INSERT INTO `hwa_jabatan` VALUES (13, 'Developer Sistem', '2023-02-13 14:34:17', '2023-02-13 14:34:17');
INSERT INTO `hwa_jabatan` VALUES (14, 'Helper', '2023-02-13 14:34:28', '2023-02-13 14:34:28');
INSERT INTO `hwa_jabatan` VALUES (15, 'Mekanik', '2023-02-13 14:34:34', '2023-02-13 14:34:34');

-- ----------------------------
-- Table structure for hwa_kar_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_kar_master`;
CREATE TABLE `hwa_kar_master`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode_unik` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `master_id` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kar_id` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tipe_gaji` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hm_total` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jam_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `insentif` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lemburan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gaji_total` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_h` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_i` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_itk` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_s` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_stk` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_a` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `abs_c` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `valid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_kar_master
-- ----------------------------
INSERT INTO `hwa_kar_master` VALUES (39, '1372', '137', '2', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 22:50:09', '2023-02-09 22:50:09');
INSERT INTO `hwa_kar_master` VALUES (40, '1373', '137', '3', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 22:50:09', '2023-02-09 22:50:09');
INSERT INTO `hwa_kar_master` VALUES (41, '1374', '137', '4', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 22:50:09', '2023-02-09 22:50:09');
INSERT INTO `hwa_kar_master` VALUES (42, '1375', '137', '5', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 22:50:09', '2023-02-09 22:50:09');
INSERT INTO `hwa_kar_master` VALUES (46, '1376', '137', '6', 'AL', NULL, '65', NULL, '975000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 14:24:51', '2023-02-10 14:24:51');
INSERT INTO `hwa_kar_master` VALUES (47, '1377', '137', '7', 'AL', NULL, '55', NULL, '825000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 14:27:02', '2023-02-10 14:27:02');
INSERT INTO `hwa_kar_master` VALUES (48, '1392', '139', '2', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 07:48:12', '2023-04-26 07:48:12');
INSERT INTO `hwa_kar_master` VALUES (49, '1393', '139', '3', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 07:48:12', '2023-04-26 07:48:12');
INSERT INTO `hwa_kar_master` VALUES (50, '1394', '139', '4', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 07:48:12', '2023-04-26 07:48:12');
INSERT INTO `hwa_kar_master` VALUES (51, '1395', '139', '5', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 07:48:12', '2023-04-26 07:48:12');
INSERT INTO `hwa_kar_master` VALUES (52, '1396', '139', '6', 'AL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 07:48:12', '2023-04-26 07:48:12');
INSERT INTO `hwa_kar_master` VALUES (53, '1397', '139', '7', 'AL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 07:48:13', '2023-04-26 07:48:13');

-- ----------------------------
-- Table structure for hwa_kas
-- ----------------------------
DROP TABLE IF EXISTS `hwa_kas`;
CREATE TABLE `hwa_kas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint NOT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_kas
-- ----------------------------
INSERT INTO `hwa_kas` VALUES (23, 137, '5-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '1000', '2023-02-10 15:26:28', '2023-02-10 15:26:28', 'Debit');
INSERT INTO `hwa_kas` VALUES (24, 137, '3-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '20000000', '2023-02-10 15:26:49', '2023-02-10 15:26:49', 'Debit');
INSERT INTO `hwa_kas` VALUES (25, 137, '1-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '10000000', '2023-02-10 15:27:36', '2023-02-10 15:27:36', 'Debit');
INSERT INTO `hwa_kas` VALUES (26, 137, '12-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '1000000', '2023-02-10 15:28:08', '2023-02-10 15:28:08', 'Kredit');
INSERT INTO `hwa_kas` VALUES (27, 137, '17-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '5000000', '2023-02-10 15:28:30', '2023-02-10 15:28:30', 'Kredit');
INSERT INTO `hwa_kas` VALUES (28, 137, '18-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '10000000', '2023-02-10 15:28:56', '2023-02-10 15:28:56', 'Kredit');
INSERT INTO `hwa_kas` VALUES (29, 137, '24-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '5000', '2023-02-10 15:29:16', '2023-02-10 15:29:16', 'Debit');
INSERT INTO `hwa_kas` VALUES (30, 137, '25-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '10000000', '2023-02-10 15:29:32', '2023-02-10 15:29:32', 'Kredit');
INSERT INTO `hwa_kas` VALUES (31, 137, '1-02-2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro minus? Sunt commodi repudian', '100000000', '2023-02-10 15:29:59', '2023-02-10 15:29:59', 'Kredit Pusat');

-- ----------------------------
-- Table structure for hwa_log_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_log_master`;
CREATE TABLE `hwa_log_master`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint NULL DEFAULT NULL,
  `equip_id` bigint NULL DEFAULT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah` int NULL DEFAULT NULL,
  `hmkm` int NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_log_master
-- ----------------------------
INSERT INTO `hwa_log_master` VALUES (5, 105, 1, '2-02-2023', 'anjing babi', 231, 123, '123', '231', '2023-02-08 22:25:06', '2023-02-08 22:25:06');
INSERT INTO `hwa_log_master` VALUES (6, 105, 1, '1-02-2023', 'anjing babi', 232, 23, '2323', '23', '2023-02-08 22:25:06', '2023-02-08 22:25:06');
INSERT INTO `hwa_log_master` VALUES (7, 105, 1, '1-02-2023', '123', 3123, 2131, '23123', '2312', '2023-02-08 22:25:07', '2023-02-08 22:25:07');
INSERT INTO `hwa_log_master` VALUES (8, 105, 1, '1-02-2023', 'qweqw', 123, 123, '1231', '1231', '2023-02-08 22:25:07', '2023-02-08 22:25:07');
INSERT INTO `hwa_log_master` VALUES (9, 105, 1, '1-02-2023', 'qweqw', 1231, 0, '23123', '112', '2023-02-08 22:25:07', '2023-02-08 22:25:07');
INSERT INTO `hwa_log_master` VALUES (10, 105, 1, '18-02-2023', '2312', 123, 123, '12', '23', '2023-02-08 22:25:07', '2023-02-08 22:25:07');
INSERT INTO `hwa_log_master` VALUES (11, 105, 11, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-08 22:14:14', '2023-02-08 22:14:14');
INSERT INTO `hwa_log_master` VALUES (12, 105, 11, '2-02-2023', 'jopi', 123, 123, '2', '123', '2023-02-08 22:19:52', '2023-02-08 22:19:52');
INSERT INTO `hwa_log_master` VALUES (13, 105, 11, '1-02-2023', 'irwa', 2123, 123, '2', '123', '2023-02-08 22:19:52', '2023-02-08 22:19:52');
INSERT INTO `hwa_log_master` VALUES (14, 105, 1, '2-02-2023', 'jancok 123', 123, 123, '1231', '123', '2023-02-08 22:25:07', '2023-02-08 22:25:07');
INSERT INTO `hwa_log_master` VALUES (15, 105, 1, '1-02-2023', 'bangsat 123', 123, 123, '123', '123', '2023-02-08 22:25:07', '2023-02-08 22:25:07');
INSERT INTO `hwa_log_master` VALUES (16, 137, 1, '1-02-2023', 'Oli.40', 31, 0, '-', 'Liter', '2023-02-10 15:57:01', '2023-02-10 15:57:01');
INSERT INTO `hwa_log_master` VALUES (17, 137, 1, '2-02-2023', 'Oli.90', 13, 0, '-', 'Liter', '2023-02-10 15:57:01', '2023-02-10 15:57:01');
INSERT INTO `hwa_log_master` VALUES (18, 137, 1, '3-02-2023', 'Engine Oil Filter (11E1-70310)', 2, 0, '-', 'Pcs', '2023-02-10 15:57:01', '2023-02-10 15:57:01');
INSERT INTO `hwa_log_master` VALUES (19, 137, 1, '4-02-2023', 'Engine Oil Filter (11NA-70110)', 232, 0, '-', 'Pcs', '2023-02-10 15:57:02', '2023-02-10 15:57:02');
INSERT INTO `hwa_log_master` VALUES (20, 137, 1, '5-02-2023', 'Engine Oil Filter (11E1-70310)', 454, 0, '-', 'Pcs', '2023-02-10 15:57:02', '2023-02-10 15:57:02');
INSERT INTO `hwa_log_master` VALUES (21, 137, 1, '6-02-2023', 'E/fuel Filter Primary (11NA-72011)', 34, 0, '-', 'Pcs', '2023-02-10 15:57:02', '2023-02-10 15:57:02');

-- ----------------------------
-- Table structure for hwa_logistik
-- ----------------------------
DROP TABLE IF EXISTS `hwa_logistik`;
CREATE TABLE `hwa_logistik`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `stok` int NULL DEFAULT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_logistik
-- ----------------------------
INSERT INTO `hwa_logistik` VALUES (1, 'oli 40', 50, 'liter', NULL, NULL);

-- ----------------------------
-- Table structure for hwa_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_lokasi`;
CREATE TABLE `hwa_lokasi`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kordinat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_lokasi
-- ----------------------------
INSERT INTO `hwa_lokasi` VALUES (1, 'Dimana ya', '', NULL, NULL);

-- ----------------------------
-- Table structure for hwa_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_master`;
CREATE TABLE `hwa_master`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pokok` int NULL DEFAULT NULL,
  `insentif` int NULL DEFAULT NULL,
  `lemburan` int NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  `estimate_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 140 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hwa_master
-- ----------------------------
INSERT INTO `hwa_master` VALUES (137, '02-2023', 29, 'Validasi', '1', NULL, NULL, 1000000, 1000, 1000, '2023-02-10', '2023-03-13', 'EST_000201');
INSERT INTO `hwa_master` VALUES (138, '03-2023', 28, 'Validasi', '1', NULL, NULL, 1700000, 20000, 15000, '2023-03-13', '2023-04-26', 'EST_000203');
INSERT INTO `hwa_master` VALUES (139, '04-2023', 28, 'Present', '1', '1', '1', 1700000, 20000, 15000, '2023-04-26', '2023-04-26', 'EST_000206');

-- ----------------------------
-- Table structure for hwa_mitra
-- ----------------------------
DROP TABLE IF EXISTS `hwa_mitra`;
CREATE TABLE `hwa_mitra`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_kontrak` date NULL DEFAULT NULL,
  `akhir_kontrak` date NOT NULL,
  `sewa_exc` int NULL DEFAULT NULL,
  `sewa_dt` int NULL DEFAULT NULL,
  `sewa_vb` int NULL DEFAULT NULL,
  `sewa_lain` int NULL DEFAULT NULL,
  `file_kontrak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sewa_total` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_mitra
-- ----------------------------
INSERT INTO `hwa_mitra` VALUES (6, 'dasd sdasd as  dasd asd as d', 'file/hwa/profil/logo1682561949banner.jpg', '2023-04-11', '2023-04-14', 123, 123, 123, 123, 'file/hwa/profil/file1682560204Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '2023-04-27 08:50:04', '2023-04-27 09:19:09', 492);
INSERT INTO `hwa_mitra` VALUES (7, '23', 'file/hwa/profil/file1682577487IMG_20230106_223851_949.jpg', '2023-04-10', '2023-04-04', 1213, 1213, 1213, 1213, 'file/hwa/profil/file16825774871658754741DOKUMEN.pdf', '2023-04-27 13:38:07', '2023-04-27 13:38:07', 4852);

-- ----------------------------
-- Table structure for hwa_pengajuan_absensi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pengajuan_absensi`;
CREATE TABLE `hwa_pengajuan_absensi`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_id` bigint NULL DEFAULT NULL,
  `surat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pengajuan_pk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `periode_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `respon_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 116 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pengajuan_absensi
-- ----------------------------
INSERT INTO `hwa_pengajuan_absensi` VALUES (107, '2', 136, NULL, 'uploads/pengajuan_absensi/1675932377Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '3', '09-02-2023-15:45', '02-2023', '2023-02-09 15:46:17', '2023-02-09 15:46:17', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (108, '2', 136, '-', 'uploads/pengajuan_absensi/1675932419Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '6', '09-02-2023-15:46', '02-2023', '2023-02-09 15:46:59', '2023-02-09 16:00:01', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (109, '3', 136, NULL, 'uploads/pengajuan_absensi/1675933251Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '3', '09-02-2023-16:00', '02-2023', '2023-02-09 16:00:51', '2023-02-09 16:00:51', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (110, '4', 136, NULL, 'uploads/pengajuan_absensi/1675933316Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '3', '09-02-2023-16:01', '02-2023', '2023-02-09 16:01:56', '2023-02-09 16:01:56', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (111, '2', 137, NULL, 'uploads/pengajuan_absensi/1675951936Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '3', '09-02-2023-21:12', '02-2023', '2023-02-09 21:12:16', '2023-02-09 21:12:16', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (112, '3', 137, NULL, 'uploads/pengajuan_absensi/1675952508Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '3', '09-02-2023-21:21', '02-2023', '2023-02-09 21:21:48', '2023-02-09 21:21:48', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (113, '4', 137, NULL, 'uploads/pengajuan_absensi/1675952570Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '6', '09-02-2023-21:22', '02-2023', '2023-02-09 21:22:50', '2023-02-09 21:22:50', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (114, '5', 137, NULL, 'uploads/pengajuan_absensi/16763167761658754741DOKUMEN.pdf', '3', '14-02-2023-02:32', '02-2023', '2023-02-14 02:32:56', '2023-02-14 02:32:56', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (115, '2', 139, NULL, 'uploads/pengajuan_absensi/1682482996Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '3', '26-04-2023-11:22', '04-2023', '2023-04-26 11:23:16', '2023-04-26 11:23:16', 'Diterima');

-- ----------------------------
-- Table structure for hwa_pengajuan_absensi_list
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pengajuan_absensi_list`;
CREATE TABLE `hwa_pengajuan_absensi_list`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `absensi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengajuan_fk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 140 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pengajuan_absensi_list
-- ----------------------------
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (132, '6393', '06-02-2023-21:22', '2023-02-06 21:22:37', '2023-02-06 21:22:37');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (133, '6396', '06-02-2023-21:22', '2023-02-06 21:22:37', '2023-02-06 21:22:37');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (134, '6501', '09-02-2023-15:36', '2023-02-09 15:37:18', '2023-02-09 15:37:18');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (135, '6504', '09-02-2023-15:36', '2023-02-09 15:37:18', '2023-02-09 15:37:18');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (136, '6507', '09-02-2023-15:36', '2023-02-09 15:37:18', '2023-02-09 15:37:18');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (137, '6600', '09-02-2023-15:46', '2023-02-09 15:46:59', '2023-02-09 15:46:59');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (138, '6603', '09-02-2023-15:46', '2023-02-09 15:47:00', '2023-02-09 15:47:00');
INSERT INTO `hwa_pengajuan_absensi_list` VALUES (139, '6606', '09-02-2023-15:46', '2023-02-09 15:47:00', '2023-02-09 15:47:00');

-- ----------------------------
-- Table structure for hwa_peraturan
-- ----------------------------
DROP TABLE IF EXISTS `hwa_peraturan`;
CREATE TABLE `hwa_peraturan`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_peraturan
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_performa_hm
-- ----------------------------
DROP TABLE IF EXISTS `hwa_performa_hm`;
CREATE TABLE `hwa_performa_hm`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_id` bigint NULL DEFAULT NULL,
  `shift_id` bigint NULL DEFAULT NULL,
  `kar_id` bigint NULL DEFAULT NULL,
  `equip_id` bigint NULL DEFAULT NULL,
  `hm_awal` int NULL DEFAULT NULL,
  `hm_akhir` int NULL DEFAULT NULL,
  `hm_pot` int NULL DEFAULT NULL,
  `hm_total` int NULL DEFAULT NULL,
  `lokasi_id` bigint NULL DEFAULT NULL,
  `dedicated_id` bigint NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jam_awal` datetime NULL DEFAULT NULL,
  `jam_akhir` datetime NULL DEFAULT NULL,
  `jam_pot` int NULL DEFAULT NULL,
  `jam_total` int NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 411 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_performa_hm
-- ----------------------------
INSERT INTO `hwa_performa_hm` VALUES (386, '1-02-2023', 105, 2, 2, 1, 12, 123, 56, 55, 1, 1, '123', '2023-02-07 23:47:45', '2023-02-07 23:47:45', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (387, '1-02-2023', 105, 1, 3, 2, 12, 12, NULL, 0, 1, 1, 'awsd', '2023-02-07 23:48:22', '2023-02-07 23:48:22', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (388, '1-02-2023', 105, 1, 2, 1, 212, 212, NULL, 0, 1, 1, 'dasd', '2023-02-07 23:47:45', '2023-02-07 23:47:45', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (389, '2-02-2023', 105, 2, 3, 1, 121212, 121233, NULL, 21, 1, 1, '123', '2023-02-07 23:47:45', '2023-02-07 23:47:45', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (390, '16-02-2023', 105, 2, 2, 1, 12, 121, 56, 53, 1, 1, '213', '2023-02-07 23:47:45', '2023-02-07 23:47:45', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (391, '2-02-2023', 105, 1, 2, 1, 231, 1231, 900, 100, 1, 1, NULL, '2023-02-07 23:47:46', '2023-02-07 23:47:46', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (393, '1-02-2023', 105, 1, 2, 1, 1, 1, NULL, 0, 1, 1, NULL, '2023-02-07 23:47:46', '2023-02-07 23:47:46', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (394, '1-02-2023', 105, 1, 2, 1, 1, 12, NULL, 11, 1, 1, NULL, '2023-02-07 23:47:46', '2023-02-07 23:47:46', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (395, '1-02-2023', 105, 1, 4, 1, 123, 123, NULL, 0, NULL, NULL, NULL, '2023-02-07 23:47:46', '2023-02-07 23:47:46', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (396, '1-02-2023', 105, 1, 4, 1, 123, 123, NULL, 0, NULL, NULL, NULL, '2023-02-07 23:47:46', '2023-02-07 23:47:46', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (400, '1-02-2023', 105, 2, 3, 1, NULL, NULL, NULL, NULL, 1, 1, NULL, '2023-02-07 14:09:40', '2023-02-07 14:09:40', '2023-02-01 12:00:00', '2023-02-02 12:00:00', NULL, 24, 'Manual');
INSERT INTO `hwa_performa_hm` VALUES (401, '1-02-2023', 137, 1, 3, 1, 0, 123, 1, 122, 1, 1, 'hmmmm', '2023-02-10 13:34:33', '2023-02-10 13:34:33', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (402, '2-02-2023', 137, 2, 4, 1, 123, 256, 0, 133, 1, 1, 'hmmmm', '2023-02-10 13:34:33', '2023-02-10 13:34:33', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (403, '3-02-2023', 137, 1, 5, 1, 256, 300, 0, 44, 1, 1, 'hmmmm', '2023-02-10 13:34:33', '2023-02-10 13:34:33', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (404, '1-02-2023', 137, 1, 5, 2, 0, 100, NULL, 100, 1, 2, 'lorem ipsum', '2023-02-10 13:43:01', '2023-02-10 13:43:01', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (405, '3-02-2023', 137, 2, 5, 2, 100, 200, 20, 80, 1, 2, 'lorem ipsum', '2023-02-10 13:43:02', '2023-02-10 13:43:02', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (406, '4-02-2023', 137, 1, 5, 2, 200, 300, NULL, 100, 1, 1, 'lorem ipsum', '2023-02-10 13:43:02', '2023-02-10 13:43:02', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (407, '1-02-2023', 137, 1, 4, 3, 123, 345, NULL, 222, 1, 1, 'lorem ipsum', '2023-02-10 13:48:17', '2023-02-10 13:48:17', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (408, '2-02-2023', 137, 1, 4, 3, 345, 567, NULL, 222, 1, 1, 'lorem ipsum', '2023-02-10 13:48:17', '2023-02-10 13:48:17', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (409, '3-02-2023', 137, 1, 4, 3, 567, 788, NULL, 221, 1, 1, 'lorem ipsum', '2023-02-10 13:48:17', '2023-02-10 13:48:17', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (410, '1-02-2023', 137, 2, 4, 1, NULL, NULL, NULL, NULL, 1, 1, 'lorem ipsum', '2023-02-10 13:50:09', '2023-02-10 13:50:09', '2023-02-01 12:00:00', '2023-02-02 12:00:00', 10, 14, 'Manual');

-- ----------------------------
-- Table structure for hwa_performa_ot
-- ----------------------------
DROP TABLE IF EXISTS `hwa_performa_ot`;
CREATE TABLE `hwa_performa_ot`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint NOT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kar_id` bigint NULL DEFAULT NULL,
  `jam_mulai` datetime NULL DEFAULT NULL,
  `jam_selesai` datetime NULL DEFAULT NULL,
  `jam_pot` int NULL DEFAULT NULL,
  `jam_total` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_performa_ot
-- ----------------------------
INSERT INTO `hwa_performa_ot` VALUES (14, 105, '1-02-2023', NULL, 3, '2023-02-01 12:00:00', '2023-02-02 12:00:00', NULL, 24, '2023-02-07 18:29:13', '2023-02-07 18:29:13');
INSERT INTO `hwa_performa_ot` VALUES (15, 105, '5-02-2023', NULL, 3, '2023-02-16 12:00:00', '2023-02-18 12:00:00', NULL, 48, '2023-02-07 18:29:32', '2023-02-07 18:29:32');
INSERT INTO `hwa_performa_ot` VALUES (17, 137, '2-02-2023', 'lorem ipsum', 7, '2023-02-02 12:00:00', '2023-02-03 12:00:00', NULL, 24, '2023-02-10 14:01:32', '2023-02-10 14:01:32');
INSERT INTO `hwa_performa_ot` VALUES (18, 137, '3-02-2023', NULL, 7, '2023-02-03 12:00:00', '2023-02-04 12:00:00', NULL, 24, '2023-02-10 14:01:46', '2023-02-10 14:01:46');
INSERT INTO `hwa_performa_ot` VALUES (22, 137, '7-02-2023', 'lorem ipsum', 7, '2023-02-07 12:00:00', '2023-02-07 19:00:00', NULL, 7, '2023-02-10 14:03:38', '2023-02-10 14:03:38');

-- ----------------------------
-- Table structure for hwa_profil
-- ----------------------------
DROP TABLE IF EXISTS `hwa_profil`;
CREATE TABLE `hwa_profil`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `inisial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berdiri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hwa_profil
-- ----------------------------
INSERT INTO `hwa_profil` VALUES (1, 'PT. Harapan Wahyu Abadi Site Sandai', 'PT HWA Site Sandai', '082150040132', 'Sandai Kiri, Kec. Sandai, Kabupaten Ketapang, Kalimantan Barat 78872', 'test@gmail.test', 'file/hwa/profil/logo1676309137logo.png', 'file/hwa/profil/foto1682472614banner.jpg', 'file/hwa/profil/foto1682470452Screenshot (57).png', 'Saturday, 03-06-2017', NULL, '2023-04-26 08:30:14', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis magni optio, deserunt cum quam perspiciatis aut ipsum possimus hic error perferendis sit laboriosam sequi dolor accusantium sapiente doloremque est eaque?');

-- ----------------------------
-- Table structure for hwa_resign
-- ----------------------------
DROP TABLE IF EXISTS `hwa_resign`;
CREATE TABLE `hwa_resign`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_resign
-- ----------------------------
INSERT INTO `hwa_resign` VALUES (2, '2', '12', 'Ditolak', '2023-04-27 07:06:12', '2023-04-27 08:46:21');

-- ----------------------------
-- Table structure for hwa_shift
-- ----------------------------
DROP TABLE IF EXISTS `hwa_shift`;
CREATE TABLE `hwa_shift`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `shift` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_masuk` time NOT NULL,
  `j_pulang` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_shift
-- ----------------------------
INSERT INTO `hwa_shift` VALUES (1, 'Shift 1', '00:00:00', '00:00:00', NULL, NULL);
INSERT INTO `hwa_shift` VALUES (2, 'Shift 2', '00:00:00', '00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for hwa_sp
-- ----------------------------
DROP TABLE IF EXISTS `hwa_sp`;
CREATE TABLE `hwa_sp`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_sp
-- ----------------------------
INSERT INTO `hwa_sp` VALUES (1, '12', '2', 'asfasadadaw', '2023-03-13 18:59:42', '2023-04-02 10:04:48');
INSERT INTO `hwa_sp` VALUES (5, '231231', '2', 'file/hwa/profil/surat1682483836Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '2023-04-26 11:37:16', '2023-04-26 11:37:16');
INSERT INTO `hwa_sp` VALUES (6, '231231', '3', 'file/hwa/profil/surat1682566219Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '2023-04-27 10:30:19', '2023-04-27 10:30:19');
INSERT INTO `hwa_sp` VALUES (8, '231231/ASDASD', '4', 'file/aktivitas/sp/surat1682569970Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '2023-04-27 11:32:50', '2023-04-27 11:32:50');

-- ----------------------------
-- Table structure for hwa_status_absensi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_status_absensi`;
CREATE TABLE `hwa_status_absensi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `value` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_status_absensi
-- ----------------------------
INSERT INTO `hwa_status_absensi` VALUES (1, 'Hadir', NULL);
INSERT INTO `hwa_status_absensi` VALUES (2, 'Sakit Tanpa Keterangan', NULL);
INSERT INTO `hwa_status_absensi` VALUES (3, 'Sakit Disertai Keterangan', NULL);
INSERT INTO `hwa_status_absensi` VALUES (4, 'Izin Tanpa Keterangan', NULL);
INSERT INTO `hwa_status_absensi` VALUES (5, 'Izin Disertai Keterangan', NULL);
INSERT INTO `hwa_status_absensi` VALUES (6, 'Cuti', NULL);
INSERT INTO `hwa_status_absensi` VALUES (7, 'Alpha', NULL);
INSERT INTO `hwa_status_absensi` VALUES (8, '-', NULL);

-- ----------------------------
-- Table structure for hwa_struktur
-- ----------------------------
DROP TABLE IF EXISTS `hwa_struktur`;
CREATE TABLE `hwa_struktur`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_struktur
-- ----------------------------
INSERT INTO `hwa_struktur` VALUES (1, 'file/hwa/profil/foto1676309217banner.jpg', '2023-03-13 17:40:10', '2023-03-13 17:40:14');
INSERT INTO `hwa_struktur` VALUES (2, 'file/hwa/profil/foto1676309217banner.jpg', '2023-04-26 08:09:38', '2023-04-26 08:09:42');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_12_13_142043_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (6, '2022_12_16_175451_create_jabatans_table', 2);
INSERT INTO `migrations` VALUES (7, '2022_12_20_172732_create_products_table', 3);
INSERT INTO `migrations` VALUES (8, '2022_12_20_183646_create_posts_table', 4);
INSERT INTO `migrations` VALUES (9, '2022_12_26_114151_create_banks_table', 5);
INSERT INTO `migrations` VALUES (10, '2022_12_29_123625_create_log_activity_table', 6);
INSERT INTO `migrations` VALUES (11, '2023_01_06_080921_create_hwas_table', 7);
INSERT INTO `migrations` VALUES (12, '2023_01_20_174936_create_peng_sakits_table', 8);
INSERT INTO `migrations` VALUES (13, '2023_01_20_175128_create_peng_sakit_lists_table', 8);
INSERT INTO `migrations` VALUES (14, '2023_01_21_185527_create_pengajuan_absensi_lists_table', 9);
INSERT INTO `migrations` VALUES (15, '2023_01_27_232504_create_shifts_table', 10);
INSERT INTO `migrations` VALUES (16, '2023_01_27_232830_create_equipment_table', 10);
INSERT INTO `migrations` VALUES (17, '2023_01_27_234039_create_brands_table', 10);
INSERT INTO `migrations` VALUES (18, '2023_01_27_234338_create_dedicateds_table', 10);
INSERT INTO `migrations` VALUES (19, '2023_01_27_234528_create_lokasis_table', 10);
INSERT INTO `migrations` VALUES (20, '2023_01_27_235031_create_performa_ods_table', 10);
INSERT INTO `migrations` VALUES (21, '2023_02_01_140434_create_equip_masters_table', 11);
INSERT INTO `migrations` VALUES (22, '2023_02_01_080446_create_o_d_masters_table', 12);
INSERT INTO `migrations` VALUES (23, '2023_02_02_003015_create_performa_ots_table', 13);
INSERT INTO `migrations` VALUES (24, '2023_02_02_192049_create_logistiks_table', 14);
INSERT INTO `migrations` VALUES (25, '2023_02_02_192637_create_log_masters_table', 14);
INSERT INTO `migrations` VALUES (26, '2023_02_03_010053_create_breakdowns_table', 15);
INSERT INTO `migrations` VALUES (27, '2023_02_03_023031_create_kas_table', 16);
INSERT INTO `migrations` VALUES (28, '2023_02_09_000755_create_caterings_table', 17);
INSERT INTO `migrations` VALUES (29, '2023_02_09_001207_create_catering_masters_table', 17);
INSERT INTO `migrations` VALUES (30, '2023_03_13_172153_create_strukturs_table', 18);
INSERT INTO `migrations` VALUES (31, '2023_03_13_181220_create_s_p_s_table', 19);
INSERT INTO `migrations` VALUES (32, '2023_04_26_081336_create_peraturans_table', 20);
INSERT INTO `migrations` VALUES (33, '2023_04_26_124209_create_mitras_table', 21);
INSERT INTO `migrations` VALUES (34, '2023_04_26_193131_create_events_table', 22);
INSERT INTO `migrations` VALUES (35, '2023_04_27_064408_create_resigns_table', 23);
INSERT INTO `migrations` VALUES (36, '2023_04_28_085429_create_dokumens_table', 24);
INSERT INTO `migrations` VALUES (37, '2023_04_28_124638_create_galeris_table', 25);
INSERT INTO `migrations` VALUES (38, '2023_04_28_12_create_galeris_table', 26);
INSERT INTO `migrations` VALUES (39, '2023_04_28_144854_create_foto_galeris_table', 27);
INSERT INTO `migrations` VALUES (40, '2023_04_28_164441_create_catatans_table', 28);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 2);
INSERT INTO `model_has_roles` VALUES (3, 'App\\Models\\User', 3);
INSERT INTO `model_has_roles` VALUES (3, 'App\\Models\\User', 4);
INSERT INTO `model_has_roles` VALUES (3, 'App\\Models\\User', 11);
INSERT INTO `model_has_roles` VALUES (3, 'App\\Models\\User', 12);
INSERT INTO `model_has_roles` VALUES (3, 'App\\Models\\User', 13);
INSERT INTO `model_has_roles` VALUES (4, 'App\\Models\\User', 5);
INSERT INTO `model_has_roles` VALUES (4, 'App\\Models\\User', 6);
INSERT INTO `model_has_roles` VALUES (4, 'App\\Models\\User', 7);
INSERT INTO `model_has_roles` VALUES (4, 'App\\Models\\User', 8);
INSERT INTO `model_has_roles` VALUES (4, 'App\\Models\\User', 9);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'developer', 'web', '2022-12-14 06:28:23', '2022-12-14 06:28:23');
INSERT INTO `roles` VALUES (2, 'superadmin', 'web', '2022-12-14 06:28:23', '2022-12-14 06:28:23');
INSERT INTO `roles` VALUES (3, 'admin', 'web', '2022-12-14 06:28:23', '2022-12-14 06:28:23');
INSERT INTO `roles` VALUES (4, 'pekerja', 'web', '2022-12-14 06:28:23', '2022-12-14 06:28:23');

-- ----------------------------
-- Table structure for sequence_estimates
-- ----------------------------
DROP TABLE IF EXISTS `sequence_estimates`;
CREATE TABLE `sequence_estimates`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 207 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sequence_estimates
-- ----------------------------
INSERT INTO `sequence_estimates` VALUES (1);
INSERT INTO `sequence_estimates` VALUES (2);
INSERT INTO `sequence_estimates` VALUES (3);
INSERT INTO `sequence_estimates` VALUES (4);
INSERT INTO `sequence_estimates` VALUES (5);
INSERT INTO `sequence_estimates` VALUES (6);
INSERT INTO `sequence_estimates` VALUES (7);
INSERT INTO `sequence_estimates` VALUES (8);
INSERT INTO `sequence_estimates` VALUES (9);
INSERT INTO `sequence_estimates` VALUES (10);
INSERT INTO `sequence_estimates` VALUES (11);
INSERT INTO `sequence_estimates` VALUES (12);
INSERT INTO `sequence_estimates` VALUES (13);
INSERT INTO `sequence_estimates` VALUES (14);
INSERT INTO `sequence_estimates` VALUES (15);
INSERT INTO `sequence_estimates` VALUES (16);
INSERT INTO `sequence_estimates` VALUES (17);
INSERT INTO `sequence_estimates` VALUES (18);
INSERT INTO `sequence_estimates` VALUES (19);
INSERT INTO `sequence_estimates` VALUES (20);
INSERT INTO `sequence_estimates` VALUES (21);
INSERT INTO `sequence_estimates` VALUES (22);
INSERT INTO `sequence_estimates` VALUES (23);
INSERT INTO `sequence_estimates` VALUES (24);
INSERT INTO `sequence_estimates` VALUES (25);
INSERT INTO `sequence_estimates` VALUES (26);
INSERT INTO `sequence_estimates` VALUES (27);
INSERT INTO `sequence_estimates` VALUES (28);
INSERT INTO `sequence_estimates` VALUES (29);
INSERT INTO `sequence_estimates` VALUES (30);
INSERT INTO `sequence_estimates` VALUES (31);
INSERT INTO `sequence_estimates` VALUES (32);
INSERT INTO `sequence_estimates` VALUES (33);
INSERT INTO `sequence_estimates` VALUES (34);
INSERT INTO `sequence_estimates` VALUES (35);
INSERT INTO `sequence_estimates` VALUES (36);
INSERT INTO `sequence_estimates` VALUES (37);
INSERT INTO `sequence_estimates` VALUES (38);
INSERT INTO `sequence_estimates` VALUES (39);
INSERT INTO `sequence_estimates` VALUES (40);
INSERT INTO `sequence_estimates` VALUES (41);
INSERT INTO `sequence_estimates` VALUES (42);
INSERT INTO `sequence_estimates` VALUES (46);
INSERT INTO `sequence_estimates` VALUES (47);
INSERT INTO `sequence_estimates` VALUES (48);
INSERT INTO `sequence_estimates` VALUES (49);
INSERT INTO `sequence_estimates` VALUES (50);
INSERT INTO `sequence_estimates` VALUES (51);
INSERT INTO `sequence_estimates` VALUES (52);
INSERT INTO `sequence_estimates` VALUES (53);
INSERT INTO `sequence_estimates` VALUES (54);
INSERT INTO `sequence_estimates` VALUES (55);
INSERT INTO `sequence_estimates` VALUES (56);
INSERT INTO `sequence_estimates` VALUES (57);
INSERT INTO `sequence_estimates` VALUES (58);
INSERT INTO `sequence_estimates` VALUES (59);
INSERT INTO `sequence_estimates` VALUES (60);
INSERT INTO `sequence_estimates` VALUES (61);
INSERT INTO `sequence_estimates` VALUES (62);
INSERT INTO `sequence_estimates` VALUES (63);
INSERT INTO `sequence_estimates` VALUES (64);
INSERT INTO `sequence_estimates` VALUES (65);
INSERT INTO `sequence_estimates` VALUES (66);
INSERT INTO `sequence_estimates` VALUES (67);
INSERT INTO `sequence_estimates` VALUES (68);
INSERT INTO `sequence_estimates` VALUES (69);
INSERT INTO `sequence_estimates` VALUES (70);
INSERT INTO `sequence_estimates` VALUES (71);
INSERT INTO `sequence_estimates` VALUES (72);
INSERT INTO `sequence_estimates` VALUES (73);
INSERT INTO `sequence_estimates` VALUES (74);
INSERT INTO `sequence_estimates` VALUES (75);
INSERT INTO `sequence_estimates` VALUES (76);
INSERT INTO `sequence_estimates` VALUES (77);
INSERT INTO `sequence_estimates` VALUES (78);
INSERT INTO `sequence_estimates` VALUES (79);
INSERT INTO `sequence_estimates` VALUES (80);
INSERT INTO `sequence_estimates` VALUES (81);
INSERT INTO `sequence_estimates` VALUES (82);
INSERT INTO `sequence_estimates` VALUES (83);
INSERT INTO `sequence_estimates` VALUES (84);
INSERT INTO `sequence_estimates` VALUES (85);
INSERT INTO `sequence_estimates` VALUES (86);
INSERT INTO `sequence_estimates` VALUES (87);
INSERT INTO `sequence_estimates` VALUES (88);
INSERT INTO `sequence_estimates` VALUES (89);
INSERT INTO `sequence_estimates` VALUES (90);
INSERT INTO `sequence_estimates` VALUES (91);
INSERT INTO `sequence_estimates` VALUES (92);
INSERT INTO `sequence_estimates` VALUES (93);
INSERT INTO `sequence_estimates` VALUES (94);
INSERT INTO `sequence_estimates` VALUES (95);
INSERT INTO `sequence_estimates` VALUES (96);
INSERT INTO `sequence_estimates` VALUES (97);
INSERT INTO `sequence_estimates` VALUES (98);
INSERT INTO `sequence_estimates` VALUES (99);
INSERT INTO `sequence_estimates` VALUES (100);
INSERT INTO `sequence_estimates` VALUES (101);
INSERT INTO `sequence_estimates` VALUES (102);
INSERT INTO `sequence_estimates` VALUES (103);
INSERT INTO `sequence_estimates` VALUES (104);
INSERT INTO `sequence_estimates` VALUES (105);
INSERT INTO `sequence_estimates` VALUES (106);
INSERT INTO `sequence_estimates` VALUES (107);
INSERT INTO `sequence_estimates` VALUES (108);
INSERT INTO `sequence_estimates` VALUES (109);
INSERT INTO `sequence_estimates` VALUES (110);
INSERT INTO `sequence_estimates` VALUES (111);
INSERT INTO `sequence_estimates` VALUES (112);
INSERT INTO `sequence_estimates` VALUES (113);
INSERT INTO `sequence_estimates` VALUES (114);
INSERT INTO `sequence_estimates` VALUES (115);
INSERT INTO `sequence_estimates` VALUES (116);
INSERT INTO `sequence_estimates` VALUES (117);
INSERT INTO `sequence_estimates` VALUES (118);
INSERT INTO `sequence_estimates` VALUES (119);
INSERT INTO `sequence_estimates` VALUES (120);
INSERT INTO `sequence_estimates` VALUES (121);
INSERT INTO `sequence_estimates` VALUES (122);
INSERT INTO `sequence_estimates` VALUES (123);
INSERT INTO `sequence_estimates` VALUES (124);
INSERT INTO `sequence_estimates` VALUES (125);
INSERT INTO `sequence_estimates` VALUES (126);
INSERT INTO `sequence_estimates` VALUES (127);
INSERT INTO `sequence_estimates` VALUES (128);
INSERT INTO `sequence_estimates` VALUES (129);
INSERT INTO `sequence_estimates` VALUES (130);
INSERT INTO `sequence_estimates` VALUES (131);
INSERT INTO `sequence_estimates` VALUES (132);
INSERT INTO `sequence_estimates` VALUES (133);
INSERT INTO `sequence_estimates` VALUES (134);
INSERT INTO `sequence_estimates` VALUES (135);
INSERT INTO `sequence_estimates` VALUES (136);
INSERT INTO `sequence_estimates` VALUES (137);
INSERT INTO `sequence_estimates` VALUES (138);
INSERT INTO `sequence_estimates` VALUES (139);
INSERT INTO `sequence_estimates` VALUES (140);
INSERT INTO `sequence_estimates` VALUES (141);
INSERT INTO `sequence_estimates` VALUES (142);
INSERT INTO `sequence_estimates` VALUES (143);
INSERT INTO `sequence_estimates` VALUES (144);
INSERT INTO `sequence_estimates` VALUES (145);
INSERT INTO `sequence_estimates` VALUES (146);
INSERT INTO `sequence_estimates` VALUES (147);
INSERT INTO `sequence_estimates` VALUES (148);
INSERT INTO `sequence_estimates` VALUES (149);
INSERT INTO `sequence_estimates` VALUES (150);
INSERT INTO `sequence_estimates` VALUES (151);
INSERT INTO `sequence_estimates` VALUES (152);
INSERT INTO `sequence_estimates` VALUES (153);
INSERT INTO `sequence_estimates` VALUES (154);
INSERT INTO `sequence_estimates` VALUES (155);
INSERT INTO `sequence_estimates` VALUES (156);
INSERT INTO `sequence_estimates` VALUES (157);
INSERT INTO `sequence_estimates` VALUES (158);
INSERT INTO `sequence_estimates` VALUES (159);
INSERT INTO `sequence_estimates` VALUES (160);
INSERT INTO `sequence_estimates` VALUES (161);
INSERT INTO `sequence_estimates` VALUES (162);
INSERT INTO `sequence_estimates` VALUES (163);
INSERT INTO `sequence_estimates` VALUES (164);
INSERT INTO `sequence_estimates` VALUES (165);
INSERT INTO `sequence_estimates` VALUES (166);
INSERT INTO `sequence_estimates` VALUES (167);
INSERT INTO `sequence_estimates` VALUES (168);
INSERT INTO `sequence_estimates` VALUES (169);
INSERT INTO `sequence_estimates` VALUES (170);
INSERT INTO `sequence_estimates` VALUES (171);
INSERT INTO `sequence_estimates` VALUES (173);
INSERT INTO `sequence_estimates` VALUES (175);
INSERT INTO `sequence_estimates` VALUES (176);
INSERT INTO `sequence_estimates` VALUES (177);
INSERT INTO `sequence_estimates` VALUES (178);
INSERT INTO `sequence_estimates` VALUES (179);
INSERT INTO `sequence_estimates` VALUES (180);
INSERT INTO `sequence_estimates` VALUES (181);
INSERT INTO `sequence_estimates` VALUES (182);
INSERT INTO `sequence_estimates` VALUES (183);
INSERT INTO `sequence_estimates` VALUES (184);
INSERT INTO `sequence_estimates` VALUES (185);
INSERT INTO `sequence_estimates` VALUES (186);
INSERT INTO `sequence_estimates` VALUES (187);
INSERT INTO `sequence_estimates` VALUES (188);
INSERT INTO `sequence_estimates` VALUES (189);
INSERT INTO `sequence_estimates` VALUES (190);
INSERT INTO `sequence_estimates` VALUES (191);
INSERT INTO `sequence_estimates` VALUES (192);
INSERT INTO `sequence_estimates` VALUES (193);
INSERT INTO `sequence_estimates` VALUES (194);
INSERT INTO `sequence_estimates` VALUES (195);
INSERT INTO `sequence_estimates` VALUES (196);
INSERT INTO `sequence_estimates` VALUES (197);
INSERT INTO `sequence_estimates` VALUES (198);
INSERT INTO `sequence_estimates` VALUES (199);
INSERT INTO `sequence_estimates` VALUES (200);
INSERT INTO `sequence_estimates` VALUES (201);
INSERT INTO `sequence_estimates` VALUES (202);
INSERT INTO `sequence_estimates` VALUES (203);
INSERT INTO `sequence_estimates` VALUES (204);
INSERT INTO `sequence_estimates` VALUES (205);
INSERT INTO `sequence_estimates` VALUES (206);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` int NULL DEFAULT NULL,
  `password_view` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tipe_gaji` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_bpjs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_gabung` date NULL DEFAULT NULL,
  `tgl_resign` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_sim_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_sim_b1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_sim_b2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sertifikat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sim_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sim_b1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sim_b2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3338 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Developer', '23011', 1, '1212', '23011', 'AI', 'Developer', 'Hidden', 'uploads/asesor/16731685613dd757ed-d679-4b06-8ec2-6bffbed7cf27.jpg', '1', '2023-01-02', 'Laki-laki', NULL, '23123', NULL, NULL, '2023-01-03', '2023-01-16', 'Permata Dalong 2 , B19', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$I6htAifjaZik6rfQJX31x.XLmc4Qly3KQZMEUXgqvpXT/fodK4/EC', '2023-08-01 14:29:52', NULL, '2023-02-12 17:20:37', NULL, NULL);
INSERT INTO `users` VALUES (2, 'Irwan Susilo (Simpang 5)', 'ponzzy22@gmail.com', 2, '1212', 'ponzzy22@gmail.com', 'A', 'Admin Mandala', 'Aktif', 'file/karyawan/avatar/Irwan Susilo (Simpang 5)16763107731673198091WhatsApp Image 2023-01-09 at 00.12.42.jpeg', '2', '1999-01-09', 'Laki-laki', NULL, NULL, NULL, NULL, '2023-01-03', NULL, 'Permata Dalong 2 , B19', 'Mandala', NULL, NULL, NULL, NULL, 'file/karyawan/sim_a/Irwan Susilo (Simpang 5)1676149741banner.jpg', 'file/karyawan/sim_b1/Irwan Susilo (Simpang 5)1676149900logo.png', NULL, NULL, NULL, '$2y$10$KoWoH1vYcoUWK/nvboN.gulT76dcsjALming/fpSilGWiiff7THTy', NULL, NULL, '2023-02-14 00:52:53', NULL, NULL);
INSERT INTO `users` VALUES (3, 'Tobing', '23013', 4, 'hwasdasdas', '23013', 'AI', 'Operator Excavator', 'Aktif', 'file/karyawan/avatar/Tobing1676399009imam.jpg', '3', '2023-01-06', 'Laki-laki', NULL, NULL, NULL, NULL, '2023-01-05', NULL, 'Permata Dalong 2 , B19', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$WG0tWBjwIg.XyhMDzv.ES.0HZH7jr5MIJ9fuwi9DM.t0wIgTR/926', NULL, '2023-01-04 18:50:22', '2023-02-15 01:23:29', NULL, NULL);
INSERT INTO `users` VALUES (4, 'Mamang Garox', '123456', 4, NULL, 'pkj@gmail.com', 'AI', 'Operator Vibro', 'Aktif', 'file/karyawan/avatar/Mamang Garox1676399039imam.jpg', '4', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-05', NULL, 'Permata Dalong 2 , B19', 'Sandai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<null>', NULL, '2023-01-05 02:49:21', '2023-02-15 01:23:59', NULL, NULL);
INSERT INTO `users` VALUES (5, 'Agus Indihome', '23015', 4, 'babi', '23015', 'AI', 'Driver Dump Truck', 'Aktif', 'file/karyawan/avatar/Agus Indihome1676399065imam.jpg', '5', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-05', NULL, 'Permata Dalong 2 , B19', 'Ketapang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$IxCS7XELdrLo1otZ/qcZy.FYUdcIon70UWexNhWN7e1SVwXzu/0nW', NULL, NULL, '2023-02-15 01:24:25', NULL, NULL);
INSERT INTO `users` VALUES (6, 'Imam Supriadi', NULL, 4, NULL, NULL, 'AL', 'Helper', 'Aktif', 'file/karyawan/avatar/anjing banjai1676145012banner.jpg', '5', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09', NULL, 'Permata Dalong 2 , B19', 'Singkup', NULL, NULL, NULL, 'file/karyawan/sertifikat/anjing banjai1676145196IMG_20230106_223851_949 (1).jpg', 'file/karyawan/sim_a/anjing banjai1676145012IMG_20230106_223851_949.jpg', 'file/karyawan/sim_b1/anjing banjai1676145218banner.jpg', 'file/karyawan/sim_b2/anjing banjai1676145218banner.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-12 02:53:38', NULL, NULL);
INSERT INTO `users` VALUES (7, 'Ponsianus Jopi', NULL, 4, NULL, 'jopi@gmail.com', 'AL', 'Mekanik', 'Aktif', 'uploads/karyawan/167614138241-Performa-O-D-HWA-•-SAT.png', '623123123', '2023-02-01', 'Perempuan', '31232312312323', '123123123123', 'MANDIRI', '23123123123123', '2023-02-07', NULL, 'Babi', 'Ketapang', '2312312323123', '123123123123', '23123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 01:49:42', NULL, NULL);

-- ----------------------------
-- Triggers structure for table hwa_master
-- ----------------------------
DROP TRIGGER IF EXISTS `id_estimate`;
delimiter ;;
CREATE TRIGGER `id_estimate` BEFORE INSERT ON `hwa_master` FOR EACH ROW BEGIN
                INSERT INTO sequence_estimates VALUES (NULL);
                SET NEW.estimate_number = CONCAT("EST_", LPAD(LAST_INSERT_ID(), 6, "0"));
            END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
