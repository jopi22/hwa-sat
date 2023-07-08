/*
 Navicat Premium Data Transfer

 Source Server         : JOPI
 Source Server Type    : MariaDB
 Source Server Version : 100425 (10.4.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : hwa-cek

 Target Server Type    : MariaDB
 Target Server Version : 100425 (10.4.25-MariaDB)
 File Encoding         : 65001

 Date: 08/07/2023 21:25:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galeris
-- ----------------------------
DROP TABLE IF EXISTS `galeris`;
CREATE TABLE `galeris`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tgl` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `karyawan` bigint(20) NULL DEFAULT NULL,
  `status` bigint(20) NULL DEFAULT NULL,
  `periode_id` bigint(20) NULL DEFAULT NULL,
  `pengajuan_fk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8191 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_absensi
-- ----------------------------
INSERT INTO `hwa_absensi` VALUES ('1542', 8023, '01-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:16', '2023-07-07 20:21:16');
INSERT INTO `hwa_absensi` VALUES ('1543', 8024, '01-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1544', 8025, '01-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1545', 8026, '01-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1546', 8027, '01-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1547', 8028, '01-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1542', 8029, '02-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1543', 8030, '02-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1544', 8031, '02-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1545', 8032, '02-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1546', 8033, '02-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1547', 8034, '02-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1542', 8035, '03-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1543', 8036, '03-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1544', 8037, '03-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1545', 8038, '03-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1546', 8039, '03-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1547', 8040, '03-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1542', 8041, '04-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1543', 8042, '04-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1544', 8043, '04-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1545', 8044, '04-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:17', '2023-07-07 20:21:17');
INSERT INTO `hwa_absensi` VALUES ('1546', 8045, '04-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1547', 8046, '04-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1542', 8047, '05-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1543', 8048, '05-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1544', 8049, '05-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1545', 8050, '05-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1546', 8051, '05-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1547', 8052, '05-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1542', 8053, '06-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1543', 8054, '06-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1544', 8055, '06-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1545', 8056, '06-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1546', 8057, '06-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1547', 8058, '06-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1542', 8059, '07-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1543', 8060, '07-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1544', 8061, '07-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1545', 8062, '07-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1546', 8063, '07-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1547', 8064, '07-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1542', 8065, '08-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1543', 8066, '08-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1544', 8067, '08-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:18', '2023-07-07 20:21:18');
INSERT INTO `hwa_absensi` VALUES ('1545', 8068, '08-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1546', 8069, '08-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1547', 8070, '08-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1542', 8071, '09-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1543', 8072, '09-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1544', 8073, '09-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1545', 8074, '09-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1546', 8075, '09-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1547', 8076, '09-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1542', 8077, '10-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1543', 8078, '10-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1544', 8079, '10-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1545', 8080, '10-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1546', 8081, '10-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1547', 8082, '10-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:19', '2023-07-07 20:21:19');
INSERT INTO `hwa_absensi` VALUES ('1542', 8083, '11-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1543', 8084, '11-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1544', 8085, '11-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1545', 8086, '11-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1546', 8087, '11-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1547', 8088, '11-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1542', 8089, '12-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1543', 8090, '12-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1544', 8091, '12-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1545', 8092, '12-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1546', 8093, '12-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1547', 8094, '12-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1542', 8095, '13-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1543', 8096, '13-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1544', 8097, '13-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1545', 8098, '13-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1546', 8099, '13-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1547', 8100, '13-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1542', 8101, '14-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1543', 8102, '14-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1544', 8103, '14-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1545', 8104, '14-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1546', 8105, '14-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1547', 8106, '14-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1542', 8107, '15-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1543', 8108, '15-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1544', 8109, '15-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1545', 8110, '15-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1546', 8111, '15-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1547', 8112, '15-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1542', 8113, '16-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1543', 8114, '16-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1544', 8115, '16-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1545', 8116, '16-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1546', 8117, '16-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1547', 8118, '16-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:20', '2023-07-07 20:21:20');
INSERT INTO `hwa_absensi` VALUES ('1542', 8119, '17-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1543', 8120, '17-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1544', 8121, '17-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1545', 8122, '17-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1546', 8123, '17-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1547', 8124, '17-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1542', 8125, '18-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1543', 8126, '18-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1544', 8127, '18-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1545', 8128, '18-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1546', 8129, '18-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1547', 8130, '18-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1542', 8131, '19-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1543', 8132, '19-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1544', 8133, '19-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1545', 8134, '19-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1546', 8135, '19-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1547', 8136, '19-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1542', 8137, '20-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1543', 8138, '20-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1544', 8139, '20-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1545', 8140, '20-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1546', 8141, '20-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1547', 8142, '20-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1542', 8143, '21-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1543', 8144, '21-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1544', 8145, '21-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1545', 8146, '21-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1546', 8147, '21-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1547', 8148, '21-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1542', 8149, '22-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1543', 8150, '22-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1544', 8151, '22-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1545', 8152, '22-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:21', '2023-07-07 20:21:21');
INSERT INTO `hwa_absensi` VALUES ('1546', 8153, '22-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1547', 8154, '22-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1542', 8155, '23-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1543', 8156, '23-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1544', 8157, '23-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1545', 8158, '23-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1546', 8159, '23-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1547', 8160, '23-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1542', 8161, '24-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1543', 8162, '24-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1544', 8163, '24-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1545', 8164, '24-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1546', 8165, '24-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1547', 8166, '24-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1542', 8167, '25-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1543', 8168, '25-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1544', 8169, '25-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1545', 8170, '25-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1546', 8171, '25-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1547', 8172, '25-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1542', 8173, '26-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1543', 8174, '26-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1544', 8175, '26-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1545', 8176, '26-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1546', 8177, '26-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1547', 8178, '26-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1542', 8179, '27-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1543', 8180, '27-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1544', 8181, '27-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1545', 8182, '27-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1546', 8183, '27-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1547', 8184, '27-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1542', 8185, '28-07-2023', 2, 8, 154, NULL, '2023-07-07 20:21:22', '2023-07-07 20:21:22');
INSERT INTO `hwa_absensi` VALUES ('1543', 8186, '28-07-2023', 3, 8, 154, NULL, '2023-07-07 20:21:23', '2023-07-07 20:21:23');
INSERT INTO `hwa_absensi` VALUES ('1544', 8187, '28-07-2023', 4, 8, 154, NULL, '2023-07-07 20:21:23', '2023-07-07 20:21:23');
INSERT INTO `hwa_absensi` VALUES ('1545', 8188, '28-07-2023', 5, 8, 154, NULL, '2023-07-07 20:21:23', '2023-07-07 20:21:23');
INSERT INTO `hwa_absensi` VALUES ('1546', 8189, '28-07-2023', 6, 8, 154, NULL, '2023-07-07 20:21:23', '2023-07-07 20:21:23');
INSERT INTO `hwa_absensi` VALUES ('1547', 8190, '28-07-2023', 7, 8, 154, NULL, '2023-07-07 20:21:23', '2023-07-07 20:21:23');

-- ----------------------------
-- Table structure for hwa_bank
-- ----------------------------
DROP TABLE IF EXISTS `hwa_bank`;
CREATE TABLE `hwa_bank`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `jam_mulai` datetime NULL DEFAULT NULL,
  `jam_selesai` datetime NULL DEFAULT NULL,
  `jam_total` int(11) NULL DEFAULT NULL,
  `dedicated_id` bigint(20) NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `master_id` bigint(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_breakdown
-- ----------------------------
INSERT INTO `hwa_breakdown` VALUES (25, '1-07-2023', 2, '2023-07-07 12:00:00', '2023-07-09 12:00:00', 48, NULL, '2312', '12312', '2023-07-08 04:28:24', '2023-07-08 04:28:24', 154);
INSERT INTO `hwa_breakdown` VALUES (26, '2-07-2023', 2, '2023-07-07 12:00:00', '2023-07-09 12:00:00', 48, NULL, 'qweqweq', 'qweqwe', '2023-07-08 04:28:41', '2023-07-08 04:28:41', 154);

-- ----------------------------
-- Table structure for hwa_catatan
-- ----------------------------
DROP TABLE IF EXISTS `hwa_catatan`;
CREATE TABLE `hwa_catatan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `cat_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pagi` int(11) NULL DEFAULT NULL,
  `siang` int(11) NULL DEFAULT NULL,
  `sore` int(11) NULL DEFAULT NULL,
  `malam` int(11) NULL DEFAULT NULL,
  `total` int(11) NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catering
-- ----------------------------
INSERT INTO `hwa_catering` VALUES (27, '4-07-2023', '154', '15', 1, 1, 1, 1, 4, '122', '2023-07-08 20:02:43', '2023-07-08 20:02:43');

-- ----------------------------
-- Table structure for hwa_catering_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_catering_master`;
CREATE TABLE `hwa_catering_master`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `atas_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `porsi_harga` int(11) NULL DEFAULT NULL,
  `tot_pagi` int(11) NULL DEFAULT NULL,
  `tot_siang` int(11) NULL DEFAULT NULL,
  `tot_sore` int(11) NULL DEFAULT NULL,
  `tot_malam` int(11) NULL DEFAULT NULL,
  `tot_porsi` int(11) NULL DEFAULT NULL,
  `tot_harga` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `valid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catering_master
-- ----------------------------
INSERT INTO `hwa_catering_master` VALUES (15, '154', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:41', '2023-07-07 20:21:41');

-- ----------------------------
-- Table structure for hwa_dedicated
-- ----------------------------
DROP TABLE IF EXISTS `hwa_dedicated`;
CREATE TABLE `hwa_dedicated`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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

-- ----------------------------
-- Table structure for hwa_equip_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_equip_master`;
CREATE TABLE `hwa_equip_master`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `equip_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hm_awal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hm_akhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_pot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_jam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_hm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grand_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ot_total` int(11) NULL DEFAULT NULL,
  `kode_unik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `valid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hauling` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 95 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_equip_master
-- ----------------------------
INSERT INTO `hwa_equip_master` VALUES (87, '154', '2', '', '', '', '', '', '', 0, '1542', '', '2023-07-07 20:21:36', '2023-07-07 21:54:42', 'Dump Truck', 12);
INSERT INTO `hwa_equip_master` VALUES (90, '154', '238', '12', '12', '14', '0', '-14', '-14', 0, '154238', NULL, '2023-07-08 17:03:18', '2023-07-08 17:03:18', NULL, 0);
INSERT INTO `hwa_equip_master` VALUES (91, '154', '241', '12', '12', '12', '0', '-12', '-12', 0, '154241', NULL, '2023-07-08 17:04:20', '2023-07-08 17:04:20', NULL, 0);
INSERT INTO `hwa_equip_master` VALUES (92, '154', '242', '', '', '', '', '', '', 0, '154242', '', '2023-07-07 20:21:36', '2023-07-07 20:21:36', '', 0);
INSERT INTO `hwa_equip_master` VALUES (93, '154', '243', '', '', '', '', '', '', 0, '154243', '', '2023-07-07 20:21:36', '2023-07-07 20:21:36', '', 0);
INSERT INTO `hwa_equip_master` VALUES (94, '154', '245', '', '', '', '', '', '', 0, '154245', '', '2023-07-07 20:21:36', '2023-07-07 20:21:36', '', 0);

-- ----------------------------
-- Table structure for hwa_equipment
-- ----------------------------
DROP TABLE IF EXISTS `hwa_equipment`;
CREATE TABLE `hwa_equipment`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
INSERT INTO `hwa_equipment` VALUES (1, 'HWA-102', '22123', '123x3x23', 'Heavy Equipment', 'Excavator', 'Komatsu', 'Tidak Aktif', NULL, NULL, '', NULL, NULL, NULL, '2023-06-07 07:17:49');
INSERT INTO `hwa_equipment` VALUES (2, 'HWA-104', 'HWA-102dadsa', '23213x21', 'Vehicle', 'Dump Truck', 'Stalin', 'Aktif', NULL, NULL, '', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equipment` VALUES (3, 'HWA-1111', '321', '23123df', 'Heavy Equipment', 'Vibro', 'Komatsu', 'Tidak Aktif', NULL, NULL, '', NULL, NULL, NULL, '2023-06-07 07:17:25');
INSERT INTO `hwa_equipment` VALUES (4, 'HWA-123', 'SDSAD', '2312', 'Support Equipment', 'Genset', 'Miyako', 'Aktif', NULL, NULL, '', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equipment` VALUES (5, 'HWA-098 123 babi', 'JANCOK-23dsfsfds 213123 babi', '231 12 2312 babi', 'Heavy Equipment', 'Excavator 23123babi', 'Royco 12 123 babi', 'Delete', NULL, NULL, '', NULL, NULL, NULL, '2023-02-13 21:47:16');
INSERT INTO `hwa_equipment` VALUES (237, 'HWA-999', '123', '123x3x23', 'Heavy Equipment', 'Excavator', 'Cat', 'Aktif', '2023-02-09 00:00:00', NULL, NULL, '2202313022205', '2', '2023-02-13 22:05:52', '2023-06-07 07:17:20');
INSERT INTO `hwa_equipment` VALUES (238, 'HWA-109', '123x', '123x3x23', 'Heavy Equipment', 'Excavator', 'Komatsu', 'Aktif', '2023-02-03 00:00:00', NULL, NULL, '2202313022205', '2', '2023-02-13 22:05:52', '2023-06-07 07:17:33');
INSERT INTO `hwa_equipment` VALUES (239, 'qqq', 'asdasd', '3123123', 'Heavy Equipment', '323123', '312312', 'Delete', '2023-02-07 00:00:00', NULL, NULL, '2202313022206', '2', '2023-02-13 22:06:46', '2023-02-13 22:07:01');
INSERT INTO `hwa_equipment` VALUES (240, 'qqq', '12312', '12312', 'Heavy Equipment', '12312', '3123', 'Delete', '2023-02-08 00:00:00', NULL, NULL, '2202313022206', '2', '2023-02-13 22:06:46', '2023-02-13 22:06:58');
INSERT INTO `hwa_equipment` VALUES (241, 'sdasd', 'sad', 'asd', 'Vehicle', 'asd', 'asdas', 'Aktif', '2023-01-31 00:00:00', NULL, NULL, '2202313022219', '2', '2023-02-13 22:19:19', '2023-02-13 22:19:19');
INSERT INTO `hwa_equipment` VALUES (242, 'sdasd', 'asd', 'asda', 'Vehicle', 'asd', 'asd', 'Aktif', '2023-02-02 00:00:00', NULL, NULL, '2202313022219', '2', '2023-02-13 22:19:19', '2023-02-13 22:19:19');
INSERT INTO `hwa_equipment` VALUES (243, 'HWA-1023', '3cvds', '123x3x23', 'Heavy Equipment', 'Vibro', 'Cat', 'Aktif', '2023-02-09 00:00:00', NULL, NULL, '2202313022223', '2', '2023-02-13 22:23:23', '2023-06-07 07:17:42');
INSERT INTO `hwa_equipment` VALUES (244, 'sadasd', 'sda', 'asd', 'Heavy Equipment', 'asd', 'asd', 'Delete', '2023-02-15 00:00:00', NULL, NULL, '2202313022225', '2', '2023-02-13 22:25:30', '2023-02-13 23:01:27');
INSERT INTO `hwa_equipment` VALUES (245, 'sda 213', 'asd', 'asd', 'Vehicle', 'asd', 'asd', 'Aktif', '2023-02-14 00:00:00', NULL, NULL, '2202313022226', '2', '2023-02-13 22:26:27', '2023-02-13 22:28:20');
INSERT INTO `hwa_equipment` VALUES (246, 'asdas', 'asda', 'asda', 'Support Equipment', 'asd', 'asda', 'Tidak Aktif', '2023-02-05 00:00:00', NULL, NULL, '2202313022233', '2', '2023-02-13 22:33:28', '2023-02-13 23:03:17');
INSERT INTO `hwa_equipment` VALUES (247, 'adsd', 'sasd', 'sdasd', 'Support Equipment', 'asdasd', 'sdas', 'Delete', '2023-02-16 00:00:00', NULL, NULL, '2202313022233', '2', '2023-02-13 22:33:28', '2023-02-13 22:34:11');

-- ----------------------------
-- Table structure for hwa_event
-- ----------------------------
DROP TABLE IF EXISTS `hwa_event`;
CREATE TABLE `hwa_event`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `token` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 122 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
) ENGINE = InnoDB AUTO_INCREMENT = 102 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_kar_master
-- ----------------------------
INSERT INTO `hwa_kar_master` VALUES (96, '1542', '154', '2', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:27', '2023-07-07 20:21:27');
INSERT INTO `hwa_kar_master` VALUES (97, '1543', '154', '3', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:27', '2023-07-07 20:21:27');
INSERT INTO `hwa_kar_master` VALUES (98, '1544', '154', '4', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:27', '2023-07-07 20:21:27');
INSERT INTO `hwa_kar_master` VALUES (99, '1545', '154', '5', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:28', '2023-07-07 20:21:28');
INSERT INTO `hwa_kar_master` VALUES (100, '1546', '154', '6', 'AL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:28', '2023-07-07 20:21:28');
INSERT INTO `hwa_kar_master` VALUES (101, '1547', '154', '7', 'AL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 20:21:28', '2023-07-07 20:21:28');

-- ----------------------------
-- Table structure for hwa_kas
-- ----------------------------
DROP TABLE IF EXISTS `hwa_kas`;
CREATE TABLE `hwa_kas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint(20) NOT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_kas
-- ----------------------------
INSERT INTO `hwa_kas` VALUES (36, 151, '2-05-2023', '123123', '20000000', '2023-05-12 16:59:40', '2023-05-12 16:59:40', 'Debit');
INSERT INTO `hwa_kas` VALUES (37, 151, '3-05-2023', '123', '100000', '2023-05-12 17:00:02', '2023-05-12 17:00:02', 'Debit');
INSERT INTO `hwa_kas` VALUES (38, 151, '9-05-2023', '123', '7000000', '2023-05-12 17:00:29', '2023-05-12 17:00:29', 'Kredit');
INSERT INTO `hwa_kas` VALUES (39, 151, '11-05-2023', '123', '5000000', '2023-05-12 17:00:51', '2023-05-12 17:00:51', 'Kredit Pusat');
INSERT INTO `hwa_kas` VALUES (41, 152, '1-06-2023', 'pendapatan dari kantor pusat', '20000000', '2023-06-07 07:46:18', '2023-06-07 07:46:18', 'Debit');
INSERT INTO `hwa_kas` VALUES (42, 152, '3-06-2023', 'tukang urut', '50000', '2023-06-07 07:46:56', '2023-06-07 07:46:56', 'Kredit');
INSERT INTO `hwa_kas` VALUES (43, 152, '5-06-2023', 'paramex 5 bungkus', '70000', '2023-06-07 07:47:23', '2023-06-07 07:47:23', 'Kredit');
INSERT INTO `hwa_kas` VALUES (44, 152, '7-06-2023', 'solar 1000 liter', '3000000', '2023-06-07 07:47:53', '2023-06-07 07:47:53', 'Kredit');
INSERT INTO `hwa_kas` VALUES (45, 152, '9-06-2023', 'ultramilk 4 dust', '1000000', '2023-06-07 07:48:27', '2023-06-07 07:48:27', 'Kredit');
INSERT INTO `hwa_kas` VALUES (46, 152, '12-06-2023', 'bensin motor 10 liter', '1500000', '2023-06-07 07:48:53', '2023-06-07 07:48:53', 'Kredit');

-- ----------------------------
-- Table structure for hwa_log_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_log_master`;
CREATE TABLE `hwa_log_master`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint(20) NULL DEFAULT NULL,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barang_id` bigint(20) NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `hmkm` int(11) NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `log_tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_log_master
-- ----------------------------
INSERT INTO `hwa_log_master` VALUES (45, 154, NULL, '2-07-2023', 4, 100, NULL, '12', '2023-07-08 21:24:11', '2023-07-08 21:24:11', 'Keluar', 'Sudah');

-- ----------------------------
-- Table structure for hwa_logistik
-- ----------------------------
DROP TABLE IF EXISTS `hwa_logistik`;
CREATE TABLE `hwa_logistik`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `master_id` bigint(20) NULL DEFAULT NULL,
  `barang_id` bigint(20) NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `log_tipe` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_logistik
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_lokasi`;
CREATE TABLE `hwa_lokasi`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pokok` int(11) NULL DEFAULT NULL,
  `insentif` int(11) NULL DEFAULT NULL,
  `lemburan` int(11) NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  `estimate_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 155 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_master
-- ----------------------------
INSERT INTO `hwa_master` VALUES (154, '07-2023', 28, 'Present', '1', '1', '1', 1700000, 20000, 15000, '2023-07-07', '2023-07-07', 'EST_000252');

-- ----------------------------
-- Table structure for hwa_mitra
-- ----------------------------
DROP TABLE IF EXISTS `hwa_mitra`;
CREATE TABLE `hwa_mitra`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_kontrak` date NULL DEFAULT NULL,
  `akhir_kontrak` date NOT NULL,
  `sewa_exc` int(11) NULL DEFAULT NULL,
  `sewa_dt` int(11) NULL DEFAULT NULL,
  `sewa_vb` int(11) NULL DEFAULT NULL,
  `sewa_lain` int(11) NULL DEFAULT NULL,
  `file_kontrak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sewa_total` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_mitra
-- ----------------------------
INSERT INTO `hwa_mitra` VALUES (6, 'Cita Mineral Investindo', 'file/hwa/profil/logo1682561949banner.jpg', '2023-04-11', '2023-04-14', 123, 123, 123, 123, 'file/hwa/profil/file1682560204Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '2023-04-27 08:50:04', '2023-06-07 07:20:19', 492);
INSERT INTO `hwa_mitra` VALUES (7, 'Conter Ceria', 'file/hwa/profil/file1682577487IMG_20230106_223851_949.jpg', '2023-04-10', '2023-04-04', 1213, 1213, 1213, 1213, 'file/hwa/profil/file16825774871658754741DOKUMEN.pdf', '2023-04-27 13:38:07', '2023-05-12 15:10:12', 4852);

-- ----------------------------
-- Table structure for hwa_navigator
-- ----------------------------
DROP TABLE IF EXISTS `hwa_navigator`;
CREATE TABLE `hwa_navigator`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `karyawan` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_navigator
-- ----------------------------
INSERT INTO `hwa_navigator` VALUES (1, 'Email', 'file/setting/nav/logo/logo1683808647email.png', 'https://mail.google.com/mail/u/0/#inbox', 2, NULL, '2023-05-11 19:43:00');
INSERT INTO `hwa_navigator` VALUES (2, 'Bootstrap', 'file/setting/nav/logo/logo1683808676bs-5.png', 'https://getbootstrap.com/docs/5.2/getting-started/introduction/', 2, '2023-05-11 13:32:30', '2023-05-11 19:42:38');
INSERT INTO `hwa_navigator` VALUES (3, 'Facebook', 'file/setting/nav/logo/logo1683808716facebook.png', 'https://www.facebook.com/', 2, '2023-05-11 13:37:47', '2023-05-11 19:43:27');
INSERT INTO `hwa_navigator` VALUES (6, 'Google', 'file/setting/nav/logo/logo1683809082g.png', 'https://www.softpedia.com/', 2, '2023-05-11 14:12:47', '2023-05-11 19:44:42');
INSERT INTO `hwa_navigator` VALUES (7, 'Github', 'file/setting/nav/logo/logo1683808788github.png', 'https://github.com/jopi22?tab=repositories', 2, '2023-05-11 19:39:05', '2023-05-11 19:44:03');
INSERT INTO `hwa_navigator` VALUES (8, 'HWA', 'file/setting/nav/logo/logo1683808773hubstaff.png', 'http://127.0.0.1:8000/', 2, '2023-05-11 19:39:33', '2023-05-11 19:44:26');
INSERT INTO `hwa_navigator` VALUES (9, 'Pinterest', 'file/setting/nav/logo/logo1683808815pinterest.png', 'https://id.pinterest.com/', 2, '2023-05-11 19:40:15', '2023-05-11 19:45:04');
INSERT INTO `hwa_navigator` VALUES (10, 'Youtube', 'file/setting/nav/logo/logo1683808863youtube.png', 'https://www.youtube.com/', 2, '2023-05-11 19:41:03', '2023-05-11 19:45:27');
INSERT INTO `hwa_navigator` VALUES (11, 'Whatsapp', 'file/setting/nav/logo/logo1683808879wa2.png', 'https://web.whatsapp.com/', 2, '2023-05-11 19:41:19', '2023-05-11 19:46:03');

-- ----------------------------
-- Table structure for hwa_pengajuan_absensi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pengajuan_absensi`;
CREATE TABLE `hwa_pengajuan_absensi`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_id` bigint(20) NULL DEFAULT NULL,
  `surat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pengajuan_pk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `periode_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `respon_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 133 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pengajuan_absensi
-- ----------------------------
INSERT INTO `hwa_pengajuan_absensi` VALUES (128, '2', 151, NULL, 'uploads/pengajuan_absensi/168388083116763167761658754741DOKUMEN.pdf', '3', '12-05-2023-15:39', '05-2023', '2023-05-12 15:40:31', '2023-05-12 15:40:31', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (129, '3', 151, NULL, 'uploads/pengajuan_absensi/168388086016763167761658754741DOKUMEN.pdf', '5', '12-05-2023-15:40', '05-2023', '2023-05-12 15:41:01', '2023-05-12 15:41:01', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (130, '4', 151, NULL, 'uploads/pengajuan_absensi/168388090716763167761658754741DOKUMEN.pdf', '6', '12-05-2023-15:41', '05-2023', '2023-05-12 15:41:47', '2023-05-12 15:41:47', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (131, '7', 151, NULL, 'uploads/pengajuan_absensi/168388096916763167761658754741DOKUMEN.pdf', '6', '12-05-2023-15:42', '05-2023', '2023-05-12 15:42:49', '2023-05-12 15:42:49', 'Diterima');
INSERT INTO `hwa_pengajuan_absensi` VALUES (132, '2', 152, NULL, 'uploads/pengajuan_absensi/1687358385LAPORAN TA PONSIANUS JOPI .pdf', '3', '21-06-2023-21:39', '06-2023', '2023-06-21 21:39:45', '2023-06-21 21:39:45', 'Diterima');

-- ----------------------------
-- Table structure for hwa_pengajuan_absensi_list
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pengajuan_absensi_list`;
CREATE TABLE `hwa_pengajuan_absensi_list`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `absensi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengajuan_fk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 140 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pengajuan_absensi_list
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_peraturan
-- ----------------------------
DROP TABLE IF EXISTS `hwa_peraturan`;
CREATE TABLE `hwa_peraturan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_id` bigint(20) NULL DEFAULT NULL,
  `shift_id` bigint(20) NULL DEFAULT NULL,
  `kar_id` bigint(20) NULL DEFAULT NULL,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `hm_awal` int(11) NULL DEFAULT NULL,
  `hm_akhir` int(11) NULL DEFAULT NULL,
  `hm_pot` int(11) NULL DEFAULT NULL,
  `hm_total` int(11) NULL DEFAULT NULL,
  `lokasi_id` bigint(20) NULL DEFAULT NULL,
  `dedicated_id` bigint(20) NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jam_awal` datetime NULL DEFAULT NULL,
  `jam_akhir` datetime NULL DEFAULT NULL,
  `jam_pot` int(11) NULL DEFAULT NULL,
  `jam_total` int(11) NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 475 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_performa_hm
-- ----------------------------
INSERT INTO `hwa_performa_hm` VALUES (465, '1-07-2023', 154, 1, 2, 237, 12, 12, 12, -12, NULL, NULL, NULL, '2023-07-08 16:46:02', '2023-07-08 16:46:02', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (466, '1-07-2023', 154, 1, 2, 237, 12, 12, 12, -12, 1, 1, '12', '2023-07-08 16:46:15', '2023-07-08 16:46:15', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (467, '1-07-2023', 154, 1, 2, 237, 12, 12, 12, -12, 1, 1, '12', '2023-07-08 16:48:43', '2023-07-08 16:48:43', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (468, '1-07-2023', 154, 1, 2, 4, 12, 12, 12, -12, 1, 1, '12', '2023-07-08 16:56:53', '2023-07-08 16:56:53', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (469, '1-07-2023', 154, 1, 2, 4, 12, 12, 12, -12, 1, 1, '12', '2023-07-08 16:58:00', '2023-07-08 16:58:00', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (470, '1-07-2023', 154, 1, 2, 4, 12, 12, 12, -12, 1, 1, '12', '2023-07-08 16:58:23', '2023-07-08 16:58:23', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (471, '1-07-2023', 154, 1, 2, 4, 12, 12, 12, -12, 1, 1, '12', '2023-07-08 17:00:02', '2023-07-08 17:00:02', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (472, '1-07-2023', 154, 1, 2, 238, 12, 12, 7, -7, 1, 1, '12', '2023-07-08 17:01:14', '2023-07-08 17:01:14', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (473, '1-07-2023', 154, 1, 2, 238, 12, 12, 7, -7, 1, 1, '12', '2023-07-08 17:03:18', '2023-07-08 17:03:18', NULL, NULL, NULL, NULL, 'HM');
INSERT INTO `hwa_performa_hm` VALUES (474, '2-07-2023', 154, 1, 6, 241, 12, 12, 12, -12, 1, 1, '1212', '2023-07-08 17:04:19', '2023-07-08 17:04:19', NULL, NULL, NULL, NULL, 'HM');

-- ----------------------------
-- Table structure for hwa_performa_ot
-- ----------------------------
DROP TABLE IF EXISTS `hwa_performa_ot`;
CREATE TABLE `hwa_performa_ot`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint(20) NOT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kar_id` bigint(20) NULL DEFAULT NULL,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `jam_mulai` datetime NULL DEFAULT NULL,
  `jam_selesai` datetime NULL DEFAULT NULL,
  `jam_pot` int(11) NULL DEFAULT NULL,
  `jam_total` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_performa_ot
-- ----------------------------
INSERT INTO `hwa_performa_ot` VALUES (51, 154, '2-07-2023', NULL, 6, 89, '2023-06-27 12:00:00', '2023-07-05 12:00:00', NULL, 192, '2023-07-08 15:14:11', '2023-07-08 15:14:11');
INSERT INTO `hwa_performa_ot` VALUES (52, 154, '9-07-2023', NULL, 6, 93, '2023-07-08 12:00:00', '2023-07-09 12:00:00', NULL, 24, '2023-07-08 16:26:29', '2023-07-08 16:26:29');

-- ----------------------------
-- Table structure for hwa_profil
-- ----------------------------
DROP TABLE IF EXISTS `hwa_profil`;
CREATE TABLE `hwa_profil`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_profil
-- ----------------------------
INSERT INTO `hwa_profil` VALUES (1, 'PT. Harapan Wahyu Abadi Site Sandai', NULL, '082150040132', 'Sandai Kiri, Kec. Sandai, Kabupaten Ketapang, Kalimantan Barat 78872', 'test@gmail.test', 'file/hwa/profil/logo1676309137logo.png', 'file/hwa/profil/foto1682472614banner.jpg', 'file/hwa/profil/foto1686097468photo_6338839406810609585_y.jpg', 'Saturday, 03-06-2017', NULL, '2023-06-07 07:24:28', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis magni optio, deserunt cum quam perspiciatis aut ipsum possimus hic error perferendis sit laboriosam sequi dolor accusantium sapiente doloremque est eaque?');

-- ----------------------------
-- Table structure for hwa_resign
-- ----------------------------
DROP TABLE IF EXISTS `hwa_resign`;
CREATE TABLE `hwa_resign`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `value` int(11) NULL DEFAULT NULL,
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
-- Table structure for hwa_stok
-- ----------------------------
DROP TABLE IF EXISTS `hwa_stok`;
CREATE TABLE `hwa_stok`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tipe_alat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_stok
-- ----------------------------
INSERT INTO `hwa_stok` VALUES (4, NULL, 'anjing', 'samsung', NULL, 'Onderdil', 12, 'Pcs', '2023-07-08 21:24:11', '2023-07-08 21:24:11');
INSERT INTO `hwa_stok` VALUES (5, 'wqe', 'weq', 'Hitachi', 'Heavy Equipment', 'Onderdil', 2, 'Pcs', '2023-07-08 02:26:16', '2023-07-08 02:26:16');
INSERT INTO `hwa_stok` VALUES (7, NULL, 'BABI', 'Hitachi', 'Heavy Equipment', 'Onderdil', 12, 'Pcs', '2023-07-08 03:43:00', '2023-07-08 03:43:00');
INSERT INTO `hwa_stok` VALUES (8, NULL, '12', 'Sasuke', 'Dump Truck', 'Onderdil', 23, 'Kilo Gram', '2023-07-08 03:45:44', '2023-07-08 03:45:44');
INSERT INTO `hwa_stok` VALUES (10, NULL, 'oli', 'Hitachi', 'Heavy Equipment', 'Liquid', 12, 'Liter', '2023-07-08 19:34:49', '2023-07-08 19:34:49');

-- ----------------------------
-- Table structure for hwa_struktur
-- ----------------------------
DROP TABLE IF EXISTS `hwa_struktur`;
CREATE TABLE `hwa_struktur`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `migrations` VALUES (41, '2023_05_11_095611_create_navigators_table', 29);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 253 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `sequence_estimates` VALUES (207);
INSERT INTO `sequence_estimates` VALUES (208);
INSERT INTO `sequence_estimates` VALUES (209);
INSERT INTO `sequence_estimates` VALUES (210);
INSERT INTO `sequence_estimates` VALUES (211);
INSERT INTO `sequence_estimates` VALUES (212);
INSERT INTO `sequence_estimates` VALUES (213);
INSERT INTO `sequence_estimates` VALUES (214);
INSERT INTO `sequence_estimates` VALUES (215);
INSERT INTO `sequence_estimates` VALUES (216);
INSERT INTO `sequence_estimates` VALUES (217);
INSERT INTO `sequence_estimates` VALUES (218);
INSERT INTO `sequence_estimates` VALUES (219);
INSERT INTO `sequence_estimates` VALUES (220);
INSERT INTO `sequence_estimates` VALUES (221);
INSERT INTO `sequence_estimates` VALUES (222);
INSERT INTO `sequence_estimates` VALUES (223);
INSERT INTO `sequence_estimates` VALUES (224);
INSERT INTO `sequence_estimates` VALUES (225);
INSERT INTO `sequence_estimates` VALUES (226);
INSERT INTO `sequence_estimates` VALUES (227);
INSERT INTO `sequence_estimates` VALUES (228);
INSERT INTO `sequence_estimates` VALUES (229);
INSERT INTO `sequence_estimates` VALUES (230);
INSERT INTO `sequence_estimates` VALUES (231);
INSERT INTO `sequence_estimates` VALUES (232);
INSERT INTO `sequence_estimates` VALUES (233);
INSERT INTO `sequence_estimates` VALUES (234);
INSERT INTO `sequence_estimates` VALUES (235);
INSERT INTO `sequence_estimates` VALUES (236);
INSERT INTO `sequence_estimates` VALUES (237);
INSERT INTO `sequence_estimates` VALUES (238);
INSERT INTO `sequence_estimates` VALUES (239);
INSERT INTO `sequence_estimates` VALUES (240);
INSERT INTO `sequence_estimates` VALUES (241);
INSERT INTO `sequence_estimates` VALUES (242);
INSERT INTO `sequence_estimates` VALUES (243);
INSERT INTO `sequence_estimates` VALUES (244);
INSERT INTO `sequence_estimates` VALUES (245);
INSERT INTO `sequence_estimates` VALUES (246);
INSERT INTO `sequence_estimates` VALUES (247);
INSERT INTO `sequence_estimates` VALUES (248);
INSERT INTO `sequence_estimates` VALUES (249);
INSERT INTO `sequence_estimates` VALUES (250);
INSERT INTO `sequence_estimates` VALUES (251);
INSERT INTO `sequence_estimates` VALUES (252);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` int(11) NULL DEFAULT NULL,
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
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3338 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Developer', '23011', 3, '1212', '23011', 'AI', 'Developer', 'Delete', 'uploads/asesor/16731685613dd757ed-d679-4b06-8ec2-6bffbed7cf27.jpg', '1', '2023-01-02', 'Laki-laki', NULL, '23123', NULL, NULL, '2023-01-03', '2023-01-16', 'Permata Dalong 2 , B19', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$I6htAifjaZik6rfQJX31x.XLmc4Qly3KQZMEUXgqvpXT/fodK4/EC', '2023-08-01 14:29:52', NULL, '2023-05-11 13:56:24', NULL, NULL);
INSERT INTO `users` VALUES (2, 'Gabriel Vergio', 'ponzzy22@gmail.com', 2, '1212', 'ponzzy22@gmail.com', 'A', 'Admin Project', 'Aktif', 'file/karyawan/avatar/Irwan Susilo (Simpang 5)16763107731673198091WhatsApp Image 2023-01-09 at 00.12.42.jpeg', '2', '1999-01-09', 'Laki-laki', NULL, NULL, NULL, NULL, '2023-01-03', NULL, 'Permata Dalong 2 , B19', 'Mandala', NULL, NULL, NULL, NULL, 'file/karyawan/sim_a/Irwan Susilo (Simpang 5)1676149741banner.jpg', 'file/karyawan/sim_b1/Irwan Susilo (Simpang 5)1676149900logo.png', NULL, NULL, NULL, '$2y$10$KoWoH1vYcoUWK/nvboN.gulT76dcsjALming/fpSilGWiiff7THTy', NULL, NULL, '2023-06-07 07:14:11', NULL, NULL);
INSERT INTO `users` VALUES (3, 'Tobing', '23013', 3, '1212', '23013', 'AI', 'Operator Excavator', 'Aktif', 'file/karyawan/avatar/Tobing1676399009imam.jpg', '3', '2023-01-06', 'Laki-laki', NULL, NULL, NULL, NULL, '2023-01-05', NULL, 'Permata Dalong 2 , B19', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$GhSib9C6H1N7RHgJHIWyeupiCpsibs5./V/24ahcfE7xjv4oK6beu', NULL, '2023-01-04 18:50:22', '2023-03-01 17:24:32', NULL, NULL);
INSERT INTO `users` VALUES (4, 'Herodimus Valdi', '123456', 4, NULL, 'valdi@gmail.com', 'AI', 'Operator Vibro', 'Aktif', 'file/karyawan/avatar/Mamang Garox1676399039imam.jpg', '4', '2023-06-07', NULL, NULL, NULL, NULL, NULL, '2023-01-05', NULL, 'Permata Dalong 2 , B19', 'Sandai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<null>', NULL, '2023-01-05 02:49:21', '2023-06-07 07:11:15', NULL, NULL);
INSERT INTO `users` VALUES (5, 'Agus Setiawan', '23015', 4, 'babi', '23015@gmail.com', 'AI', 'Driver Dump Truck', 'Aktif', 'file/karyawan/avatar/Agus Indihome1676399065imam.jpg', '5', '2023-06-07', 'Laki-laki', NULL, NULL, NULL, NULL, '2023-01-05', NULL, 'Permata Dalong 2 , B19', 'Ketapang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$IxCS7XELdrLo1otZ/qcZy.FYUdcIon70UWexNhWN7e1SVwXzu/0nW', NULL, NULL, '2023-06-07 07:11:55', NULL, NULL);
INSERT INTO `users` VALUES (6, 'Imam Supriadi', NULL, 4, NULL, NULL, 'AL', 'Helper', 'Aktif', 'file/karyawan/avatar/anjing banjai1676145012banner.jpg', '5', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09', NULL, 'Permata Dalong 2 , B19', 'Singkup', NULL, NULL, NULL, 'file/karyawan/sertifikat/anjing banjai1676145196IMG_20230106_223851_949 (1).jpg', 'file/karyawan/sim_a/anjing banjai1676145012IMG_20230106_223851_949.jpg', 'file/karyawan/sim_b1/anjing banjai1676145218banner.jpg', 'file/karyawan/sim_b2/anjing banjai1676145218banner.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-12 02:53:38', NULL, NULL);
INSERT INTO `users` VALUES (7, 'Ponsianus Supriadi', NULL, 4, NULL, 'jopi@gmail.com', 'AL', 'Mekanik', 'Aktif', 'file/karyawan/avatar/Ponsianus Jopi1683882061vibr.jpg', '623123123', '2023-02-01', 'Perempuan', '31232312312323', '123123123123', 'MANDIRI', '23123123123123', '2023-02-07', NULL, 'Babi', 'Ketapang', '2312312323123', '123123123123', '23123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-07 07:12:28', NULL, NULL);

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
