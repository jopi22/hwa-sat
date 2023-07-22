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

 Date: 21/07/2023 16:38:56
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
  `kontrol` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10155 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_absensi
-- ----------------------------
INSERT INTO `hwa_absensi` VALUES ('1782', 10043, '01-06-2023', 2, 1, 178, NULL, '2023-06-01 07:26:40', '2023-06-01 07:26:40', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10044, '01-06-2023', 3359, 1, 178, NULL, '2023-06-01 07:26:40', '2023-06-01 07:26:40', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10045, '01-06-2023', 3360, 1, 178, NULL, '2023-06-01 07:26:40', '2023-06-01 07:26:40', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10046, '01-06-2023', 3361, 1, 178, NULL, '2023-06-01 07:26:40', '2023-06-01 07:26:40', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10047, '02-06-2023', 2, 1, 178, NULL, '2023-06-01 07:26:57', '2023-06-01 07:26:57', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10048, '02-06-2023', 3359, 7, 178, NULL, '2023-06-01 07:26:57', '2023-06-01 07:26:57', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10049, '02-06-2023', 3360, 7, 178, NULL, '2023-06-01 07:26:57', '2023-06-01 07:26:57', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10050, '02-06-2023', 3361, 1, 178, NULL, '2023-06-01 07:26:57', '2023-06-01 07:26:57', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10051, '03-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10052, '03-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10053, '03-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10054, '03-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10055, '04-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10056, '04-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10057, '04-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10058, '04-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10059, '05-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10060, '05-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10061, '05-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10062, '05-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10063, '06-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:29', '2023-06-01 07:25:29', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10064, '06-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10065, '06-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10066, '06-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10067, '07-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10068, '07-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10069, '07-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10070, '07-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10071, '08-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10072, '08-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10073, '08-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10074, '08-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10075, '09-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10076, '09-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10077, '09-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10078, '09-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10079, '10-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10080, '10-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10081, '10-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10082, '10-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:30', '2023-06-01 07:25:30', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10083, '11-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10084, '11-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10085, '11-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10086, '11-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10087, '12-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10088, '12-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10089, '12-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10090, '12-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10091, '13-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10092, '13-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10093, '13-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10094, '13-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10095, '14-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10096, '14-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10097, '14-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10098, '14-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10099, '15-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10100, '15-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10101, '15-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10102, '15-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10103, '16-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10104, '16-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10105, '16-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10106, '16-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10107, '17-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10108, '17-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10109, '17-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10110, '17-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10111, '18-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10112, '18-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10113, '18-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:31', '2023-06-01 07:25:31', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10114, '18-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10115, '19-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10116, '19-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10117, '19-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10118, '19-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10119, '20-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10120, '20-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10121, '20-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10122, '20-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10123, '21-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10124, '21-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10125, '21-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10126, '21-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10127, '22-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10128, '22-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10129, '22-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10130, '22-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10131, '23-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10132, '23-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10133, '23-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10134, '23-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10135, '24-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10136, '24-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10137, '24-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10138, '24-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10139, '25-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10140, '25-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10141, '25-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10142, '25-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:32', '2023-06-01 07:25:32', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10143, '26-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10144, '26-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10145, '26-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10146, '26-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10147, '27-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10148, '27-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10149, '27-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10150, '27-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1782', 10151, '28-06-2023', 2, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783359', 10152, '28-06-2023', 3359, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783360', 10153, '28-06-2023', 3360, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);
INSERT INTO `hwa_absensi` VALUES ('1783361', 10154, '28-06-2023', 3361, 8, 178, NULL, '2023-06-01 07:25:33', '2023-06-01 07:25:33', NULL);

-- ----------------------------
-- Table structure for hwa_adjustmen
-- ----------------------------
DROP TABLE IF EXISTS `hwa_adjustmen`;
CREATE TABLE `hwa_adjustmen`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kar_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nominal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_adjustmen
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_aktivitas
-- ----------------------------
DROP TABLE IF EXISTS `hwa_aktivitas`;
CREATE TABLE `hwa_aktivitas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aktivitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_aktivitas
-- ----------------------------
INSERT INTO `hwa_aktivitas` VALUES (9, 'Produksi', '-', 'Aktif', '2023-06-01 07:29:32', '2023-06-01 07:29:32');

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
-- Table structure for hwa_barang
-- ----------------------------
DROP TABLE IF EXISTS `hwa_barang`;
CREATE TABLE `hwa_barang`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_barang
-- ----------------------------
INSERT INTO `hwa_barang` VALUES (30, '123', 'BABI', 'Spare Part', 246236, 'Pcs', '2023-07-21 03:25:59', '2023-07-21 03:47:01', 'Aktif', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_breakdown
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catatan
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_category
-- ----------------------------
DROP TABLE IF EXISTS `hwa_category`;
CREATE TABLE `hwa_category`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_category
-- ----------------------------
INSERT INTO `hwa_category` VALUES (11, 'Ore Hauling Rental', NULL, 'Aktif', '2023-06-01 07:34:44', '2023-06-01 07:34:44');
INSERT INTO `hwa_category` VALUES (12, 'Estafet Tailing', NULL, 'Aktif', '2023-06-01 07:35:33', '2023-06-01 07:35:33');
INSERT INTO `hwa_category` VALUES (13, 'General Support', NULL, 'Aktif', '2023-06-01 07:35:43', '2023-06-01 07:35:43');

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
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catering
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_catering_master
-- ----------------------------
INSERT INTO `hwa_catering_master` VALUES (24, '178', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-01 07:26:17', '2023-06-01 07:26:17');

-- ----------------------------
-- Table structure for hwa_dedicated
-- ----------------------------
DROP TABLE IF EXISTS `hwa_dedicated`;
CREATE TABLE `hwa_dedicated`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dedicated` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_dedicated
-- ----------------------------
INSERT INTO `hwa_dedicated` VALUES (7, 'Land Clearing Rental', NULL, 'Aktif', '2023-06-01 07:36:01', '2023-06-01 07:36:01');
INSERT INTO `hwa_dedicated` VALUES (8, 'Maintenances Jalan Haulin', NULL, 'Aktif', '2023-06-01 07:36:16', '2023-06-01 07:36:16');
INSERT INTO `hwa_dedicated` VALUES (9, 'Moving Tailing to Disposa', NULL, 'Aktif', '2023-06-01 07:36:16', '2023-06-01 07:36:16');

-- ----------------------------
-- Table structure for hwa_divisi
-- ----------------------------
DROP TABLE IF EXISTS `hwa_divisi`;
CREATE TABLE `hwa_divisi`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_divisi
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
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
  `alokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `aktivitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 154 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_equip_master
-- ----------------------------
INSERT INTO `hwa_equip_master` VALUES (150, '178', '260', NULL, '1', '3', '0', '0', '2', '2', NULL, '178260', NULL, '2023-06-01 07:38:08', '2023-06-01 07:38:08', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equip_master` VALUES (151, '178', '266', NULL, '1', '8', '0', '0', '7', '7', NULL, '178266', NULL, '2023-06-01 07:39:51', '2023-06-01 07:39:51', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equip_master` VALUES (152, '178', '267', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '178267', NULL, '2023-06-01 07:26:13', '2023-06-01 07:26:13', NULL, NULL, NULL, NULL);
INSERT INTO `hwa_equip_master` VALUES (153, '178', '268', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '178268', NULL, '2023-06-01 07:26:13', '2023-06-01 07:26:13', NULL, NULL, NULL, NULL);

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
  `no_rangka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `start_op` date NULL DEFAULT NULL,
  `end_op` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 269 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_equipment
-- ----------------------------
INSERT INTO `hwa_equipment` VALUES (260, 'WHW-300PX', '12212', NULL, 'Heavy Equipment', 'Excavator', '123', '12312312', 'Aktif', '2023-07-13', '-', NULL, '2202317071627', '2', '2023-07-17 16:27:29', '2023-06-01 07:23:26');
INSERT INTO `hwa_equipment` VALUES (266, 'DYNA-HEBAT', '696969', 'DYNA-0890', 'Vehicle', 'Dump Truck', 'Toyoyo', 'Rangkanya Kuat', 'Aktif', '2023-05-30', NULL, NULL, '2202301060721', '2', '2023-06-01 07:21:50', '2023-06-01 07:21:50');
INSERT INTO `hwa_equipment` VALUES (267, 'KIJANG-BAU', '1212', '1234', 'Vehicle', 'Pick Up', 'Cosmos', 'pantek213', 'Aktif', '2023-05-31', NULL, NULL, '2202301060722', '2', '2023-06-01 07:22:47', '2023-06-01 07:22:47');
INSERT INTO `hwa_equipment` VALUES (268, 'QUICK', '123', 'WQE', 'Heavy Equipment', 'Vibro', 'Samsung', 'asdwdw', 'Aktif', '2023-05-30', NULL, NULL, '2202301060723', '2', '2023-06-01 07:23:58', '2023-06-01 07:23:58');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_event
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_foto_galeri
-- ----------------------------
INSERT INTO `hwa_foto_galeri` VALUES (7, '9', 'file/arsip/galeri/foto/1690840882IMG_20230501_214906.jpg', '2023-08-01 05:01:22', '2023-08-01 05:01:22');
INSERT INTO `hwa_foto_galeri` VALUES (8, '9', 'file/arsip/galeri/foto/1690840882IMG_20230501_214939.jpg', '2023-08-01 05:01:22', '2023-08-01 05:01:22');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_galeri
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_hauling
-- ----------------------------
DROP TABLE IF EXISTS `hwa_hauling`;
CREATE TABLE `hwa_hauling`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` date NULL DEFAULT NULL,
  `equip_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kar_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dedi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `start_loc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `end_loc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `timbangan` int(11) NULL DEFAULT NULL,
  `master_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_hauling
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 136 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_history
-- ----------------------------
INSERT INTO `hwa_history` VALUES (134, '2202301060712', 'Menambahkan Data Karyawan', 'http://127.0.0.1:8000/karyawan_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '2023-06-01 07:12:48', '2023-06-01 07:12:48');
INSERT INTO `hwa_history` VALUES (135, '2202301060719', 'Menambahkan Data Karyawan', 'http://127.0.0.1:8000/karyawan_store', 'POST', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '2023-06-01 07:19:37', '2023-06-01 07:19:37');

-- ----------------------------
-- Table structure for hwa_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `hwa_jabatan`;
CREATE TABLE `hwa_jabatan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `divisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_jabatan
-- ----------------------------
INSERT INTO `hwa_jabatan` VALUES (2, 'Penanggung Jawab', NULL, NULL, '2023-01-08 05:58:12', '2023-01-08 05:58:12');
INSERT INTO `hwa_jabatan` VALUES (3, 'Admin Mandala', NULL, 'Rental Performance', '2023-08-01 19:10:46', '2023-08-01 19:10:46');
INSERT INTO `hwa_jabatan` VALUES (4, 'Admin Project', '23131231', 'Mechanic', '2023-08-01 19:10:00', '2023-08-01 19:10:00');
INSERT INTO `hwa_jabatan` VALUES (5, 'Driver Dump Truck', NULL, NULL, '2023-02-13 14:33:28', '2023-02-13 14:33:28');
INSERT INTO `hwa_jabatan` VALUES (6, 'Operator Excavator', NULL, NULL, '2023-02-13 14:33:42', '2023-02-13 14:33:42');
INSERT INTO `hwa_jabatan` VALUES (12, 'Operator Vibro', 'sadasd', NULL, '2023-07-10 23:03:21', '2023-07-10 23:03:21');
INSERT INTO `hwa_jabatan` VALUES (14, 'Helper', NULL, NULL, '2023-02-13 14:34:28', '2023-02-13 14:34:28');
INSERT INTO `hwa_jabatan` VALUES (15, 'Mekanik', NULL, NULL, '2023-02-13 14:34:34', '2023-02-13 14:34:34');

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
) ENGINE = InnoDB AUTO_INCREMENT = 156 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_kar_master
-- ----------------------------
INSERT INTO `hwa_kar_master` VALUES (152, '1782', '178', '2', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-01 07:26:10', '2023-06-01 07:26:10');
INSERT INTO `hwa_kar_master` VALUES (153, '1783359', '178', '3359', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-01 07:26:10', '2023-06-01 07:26:10');
INSERT INTO `hwa_kar_master` VALUES (154, '1783360', '178', '3360', 'AI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-01 07:26:10', '2023-06-01 07:26:10');
INSERT INTO `hwa_kar_master` VALUES (155, '1783361', '178', '3361', 'AL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-01 07:26:10', '2023-06-01 07:26:10');

-- ----------------------------
-- Table structure for hwa_kas
-- ----------------------------
DROP TABLE IF EXISTS `hwa_kas`;
CREATE TABLE `hwa_kas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint(20) NULL DEFAULT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `rincian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_kas
-- ----------------------------
INSERT INTO `hwa_kas` VALUES (15, 178, NULL, NULL, '1', NULL, NULL, 'Debit', '');
INSERT INTO `hwa_kas` VALUES (16, 178, NULL, NULL, '1', NULL, NULL, 'Debit Pusat', NULL);
INSERT INTO `hwa_kas` VALUES (17, 178, '1-06-2023', 'HGHJ', '1000000', '2023-06-01 07:43:09', '2023-06-01 07:43:09', 'Debit', NULL);

-- ----------------------------
-- Table structure for hwa_location
-- ----------------------------
DROP TABLE IF EXISTS `hwa_location`;
CREATE TABLE `hwa_location`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_location
-- ----------------------------
INSERT INTO `hwa_location` VALUES (7, 'BPP 5-6-7', NULL, 'Aktif', '2023-06-01 07:30:55', '2023-06-01 07:36:44');
INSERT INTO `hwa_location` VALUES (8, 'BPP 3-4', NULL, 'Aktif', '2023-06-01 07:31:42', '2023-06-01 07:36:57');

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

-- ----------------------------
-- Table structure for hwa_master
-- ----------------------------
DROP TABLE IF EXISTS `hwa_master`;
CREATE TABLE `hwa_master`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pokok` int(11) NULL DEFAULT NULL,
  `insentif` int(11) NULL DEFAULT NULL,
  `lemburan` int(11) NULL DEFAULT NULL,
  `total` int(11) NULL DEFAULT NULL,
  `biaya_sewa` int(11) NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `target_hm` int(11) NULL DEFAULT NULL,
  `ket1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ket2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `estimate_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hm_total` int(11) NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 179 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_master
-- ----------------------------
INSERT INTO `hwa_master` VALUES (178, '06-2023', 'Present', 1700000, 20000, 15000, 28, NULL, '1', NULL, '1', '1', 'EST_000329', NULL, '2023-06-01', '2023-06-01');

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
  `inisial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_mitra
-- ----------------------------
INSERT INTO `hwa_mitra` VALUES (6, 'Cita Mineral Investindo', 'file/hwa/profil/logo1682561949banner.jpg', '2023-04-11', '2023-04-14', 123, 123, 123, 123, 'file/hwa/profil/file1682560204Penyampaian Data Absensi Manual Kantor Camat Sungai Laur..pdf', '2023-04-27 08:50:04', '2023-06-07 07:20:19', 492, 'PT CMI', 'Utama');
INSERT INTO `hwa_mitra` VALUES (7, 'Conter Ceria', 'file/hwa/profil/file1682577487IMG_20230106_223851_949.jpg', '2023-04-10', '2023-04-04', 1213, 1213, 1213, 1213, 'file/hwa/profil/file16825774871658754741DOKUMEN.pdf', '2023-04-27 13:38:07', '2023-05-12 15:10:12', 4852, NULL, NULL);

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
-- Table structure for hwa_pemakaian_barang
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pemakaian_barang`;
CREATE TABLE `hwa_pemakaian_barang`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` date NULL DEFAULT NULL,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `hmkm` bigint(20) NULL DEFAULT NULL,
  `barang_id` bigint(20) NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ket` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pemakaian_barang
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_pemesanan_barang
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pemesanan_barang`;
CREATE TABLE `hwa_pemesanan_barang`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pemesanan_barang
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_pemesanan_barang_list
-- ----------------------------
DROP TABLE IF EXISTS `hwa_pemesanan_barang_list`;
CREATE TABLE `hwa_pemesanan_barang_list`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barang_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `token` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 121 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pemesanan_barang_list
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 136 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pengajuan_absensi
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 143 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_pengajuan_absensi_list
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_performa_hm
-- ----------------------------
DROP TABLE IF EXISTS `hwa_performa_hm`;
CREATE TABLE `hwa_performa_hm`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` bigint(20) NULL DEFAULT NULL,
  `tgl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_id` bigint(20) NULL DEFAULT NULL,
  `equip_id` bigint(20) NULL DEFAULT NULL,
  `hm_awal` int(11) NULL DEFAULT NULL,
  `hm_akhir` int(11) NULL DEFAULT NULL,
  `hm_pot` int(11) NULL DEFAULT NULL,
  `hm_total` int(11) NULL DEFAULT NULL,
  `kar_id` bigint(20) NULL DEFAULT NULL,
  `lokasi_id` bigint(20) NULL DEFAULT NULL,
  `dedicated_id` bigint(20) NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jam_awal` datetime NULL DEFAULT NULL,
  `jam_akhir` datetime NULL DEFAULT NULL,
  `jam_total` int(11) NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `rest_time` int(11) NULL DEFAULT NULL,
  `category_id` bigint(20) NULL DEFAULT NULL,
  `aktivitas_id` bigint(20) NULL DEFAULT NULL,
  `jam_pot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 557 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_performa_hm
-- ----------------------------
INSERT INTO `hwa_performa_hm` VALUES (553, 178, '1-06-2023', 1, 260, 1, 3, NULL, 2, 3360, 7, 7, NULL, '2023-06-01 07:38:07', '2023-06-01 07:38:07', NULL, NULL, NULL, 'HM', NULL, 11, 9, NULL);
INSERT INTO `hwa_performa_hm` VALUES (554, 178, '1-06-2023', 1, 266, 1, 3, NULL, 2, 3360, 8, 7, NULL, '2023-06-01 07:39:50', '2023-06-01 07:39:50', NULL, NULL, NULL, 'HM', NULL, 12, 9, NULL);
INSERT INTO `hwa_performa_hm` VALUES (555, 178, '3-06-2023', 1, 266, 3, 5, NULL, 2, 3360, 7, 7, NULL, '2023-06-01 07:39:51', '2023-06-01 07:39:51', NULL, NULL, NULL, 'HM', NULL, 11, 9, NULL);
INSERT INTO `hwa_performa_hm` VALUES (556, 178, '11-06-2023', 1, 266, 5, 8, NULL, 3, 3360, 7, 8, NULL, '2023-06-01 07:39:51', '2023-06-01 07:39:51', NULL, NULL, NULL, 'HM', NULL, 11, 9, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 71 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_performa_ot
-- ----------------------------
INSERT INTO `hwa_performa_ot` VALUES (70, 178, '1-06-2023', NULL, 3361, 150, '2023-06-01 12:00:00', '2023-06-02 12:00:00', NULL, 24, '2023-06-01 07:42:28', '2023-06-01 07:42:28');

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_resign
-- ----------------------------

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
-- Table structure for hwa_site
-- ----------------------------
DROP TABLE IF EXISTS `hwa_site`;
CREATE TABLE `hwa_site`  (
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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_site
-- ----------------------------
INSERT INTO `hwa_site` VALUES (1, 'Site Sandai', NULL, '082150040132', 'Sandai Kiri, Kec. Sandai, Kabupaten Ketapang, Kalimantan Barat 78872', 'test@gmail.test', 'file/hwa/profil/logo169083674755e4a8636ab3aa9de09cd2309e638eea.jpg', 'file/hwa/profil/foto1690840196IMG_20221227_190013.jpg', 'file/hwa/profil/foto1690836746IMG_20230501_214906.jpg', 'Saturday, 03-06-2017', NULL, '2023-08-01 04:49:56', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis magni optio, deserunt cum quam perspiciatis aut ipsum possimus hic error perferendis sit laboriosam sequi dolor accusantium sapiente doloremque est eaque?');
INSERT INTO `hwa_site` VALUES (2, 'Site Air Upas', 'HWA Site Air Upas', '23123', 'sadasd', 'sdada@dfd', 'file/hwa/profil/logo1676309137logo.png', 'file/hwa/profil/foto1682472614banner.jpg', 'file/hwa/profil/foto1686097468photo_6338839406810609585_y.jpg', 'Saturday, 03-06-2017', NULL, '2023-07-04 02:47:55', 'asdsa');
INSERT INTO `hwa_site` VALUES (3, 'Site Melak', 'HWA Site Melak', '2213123', 'dfasdasd', 'asd@dfsf', 'file/hwa/profil/logo1676309137logo.png', 'file/hwa/profil/foto1682472614banner.jpg', 'file/hwa/profil/foto1686097468photo_6338839406810609585_y.jpg', 'Saturday, 03-06-2017', NULL, '0000-00-00 00:00:00', 'Saturday, 03-06-2017');

-- ----------------------------
-- Table structure for hwa_skk
-- ----------------------------
DROP TABLE IF EXISTS `hwa_skk`;
CREATE TABLE `hwa_skk`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kar_id` int(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `perihal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_skk
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_so_data
-- ----------------------------
DROP TABLE IF EXISTS `hwa_so_data`;
CREATE TABLE `hwa_so_data`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `so_id` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `barang_id` bigint(20) NULL DEFAULT NULL,
  `stok_awal` bigint(20) NULL DEFAULT NULL,
  `stok_cetak1` int(11) NULL DEFAULT NULL,
  `stok_cetak2` int(11) NULL DEFAULT NULL,
  `selisih` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 169 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_so_data
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_so_periode
-- ----------------------------
DROP TABLE IF EXISTS `hwa_so_periode`;
CREATE TABLE `hwa_so_periode`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tgl` date NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hasil` int(11) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_so_periode
-- ----------------------------

-- ----------------------------
-- Table structure for hwa_sp
-- ----------------------------
DROP TABLE IF EXISTS `hwa_sp`;
CREATE TABLE `hwa_sp`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kar_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hwa_sp
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 52 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `migrations` VALUES (42, '2023_07_11_212554_create_aktivitas_table', 30);
INSERT INTO `migrations` VALUES (43, '2023_07_11_212841_create_locations_table', 30);
INSERT INTO `migrations` VALUES (44, '2023_07_11_212859_create_categories_table', 30);
INSERT INTO `migrations` VALUES (45, '2023_07_12_181218_create_haulings_table', 31);
INSERT INTO `migrations` VALUES (46, '2023_07_13_052726_create_bons_table', 32);
INSERT INTO `migrations` VALUES (47, '2023_09_07_131737_create_pemesanan__barangs_table', 33);
INSERT INTO `migrations` VALUES (48, '2023_09_07_131750_create_pemesanan__barang__lists_table', 33);
INSERT INTO `migrations` VALUES (49, '2023_09_02_032514_create_so_data_table', 34);
INSERT INTO `migrations` VALUES (50, '2023_09_02_032637_create_so_periodes_table', 34);
INSERT INTO `migrations` VALUES (51, '2023_07_20_023448_create_s_k_k_s_table', 35);

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
) ENGINE = InnoDB AUTO_INCREMENT = 330 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `sequence_estimates` VALUES (253);
INSERT INTO `sequence_estimates` VALUES (254);
INSERT INTO `sequence_estimates` VALUES (255);
INSERT INTO `sequence_estimates` VALUES (256);
INSERT INTO `sequence_estimates` VALUES (257);
INSERT INTO `sequence_estimates` VALUES (258);
INSERT INTO `sequence_estimates` VALUES (264);
INSERT INTO `sequence_estimates` VALUES (265);
INSERT INTO `sequence_estimates` VALUES (266);
INSERT INTO `sequence_estimates` VALUES (267);
INSERT INTO `sequence_estimates` VALUES (268);
INSERT INTO `sequence_estimates` VALUES (269);
INSERT INTO `sequence_estimates` VALUES (270);
INSERT INTO `sequence_estimates` VALUES (271);
INSERT INTO `sequence_estimates` VALUES (272);
INSERT INTO `sequence_estimates` VALUES (273);
INSERT INTO `sequence_estimates` VALUES (274);
INSERT INTO `sequence_estimates` VALUES (275);
INSERT INTO `sequence_estimates` VALUES (276);
INSERT INTO `sequence_estimates` VALUES (277);
INSERT INTO `sequence_estimates` VALUES (278);
INSERT INTO `sequence_estimates` VALUES (279);
INSERT INTO `sequence_estimates` VALUES (280);
INSERT INTO `sequence_estimates` VALUES (281);
INSERT INTO `sequence_estimates` VALUES (282);
INSERT INTO `sequence_estimates` VALUES (283);
INSERT INTO `sequence_estimates` VALUES (284);
INSERT INTO `sequence_estimates` VALUES (285);
INSERT INTO `sequence_estimates` VALUES (286);
INSERT INTO `sequence_estimates` VALUES (287);
INSERT INTO `sequence_estimates` VALUES (288);
INSERT INTO `sequence_estimates` VALUES (289);
INSERT INTO `sequence_estimates` VALUES (290);
INSERT INTO `sequence_estimates` VALUES (291);
INSERT INTO `sequence_estimates` VALUES (292);
INSERT INTO `sequence_estimates` VALUES (293);
INSERT INTO `sequence_estimates` VALUES (294);
INSERT INTO `sequence_estimates` VALUES (295);
INSERT INTO `sequence_estimates` VALUES (296);
INSERT INTO `sequence_estimates` VALUES (297);
INSERT INTO `sequence_estimates` VALUES (298);
INSERT INTO `sequence_estimates` VALUES (299);
INSERT INTO `sequence_estimates` VALUES (300);
INSERT INTO `sequence_estimates` VALUES (301);
INSERT INTO `sequence_estimates` VALUES (302);
INSERT INTO `sequence_estimates` VALUES (303);
INSERT INTO `sequence_estimates` VALUES (304);
INSERT INTO `sequence_estimates` VALUES (305);
INSERT INTO `sequence_estimates` VALUES (306);
INSERT INTO `sequence_estimates` VALUES (307);
INSERT INTO `sequence_estimates` VALUES (308);
INSERT INTO `sequence_estimates` VALUES (309);
INSERT INTO `sequence_estimates` VALUES (310);
INSERT INTO `sequence_estimates` VALUES (311);
INSERT INTO `sequence_estimates` VALUES (312);
INSERT INTO `sequence_estimates` VALUES (313);
INSERT INTO `sequence_estimates` VALUES (314);
INSERT INTO `sequence_estimates` VALUES (315);
INSERT INTO `sequence_estimates` VALUES (316);
INSERT INTO `sequence_estimates` VALUES (317);
INSERT INTO `sequence_estimates` VALUES (318);
INSERT INTO `sequence_estimates` VALUES (319);
INSERT INTO `sequence_estimates` VALUES (320);
INSERT INTO `sequence_estimates` VALUES (321);
INSERT INTO `sequence_estimates` VALUES (322);
INSERT INTO `sequence_estimates` VALUES (323);
INSERT INTO `sequence_estimates` VALUES (324);
INSERT INTO `sequence_estimates` VALUES (325);
INSERT INTO `sequence_estimates` VALUES (326);
INSERT INTO `sequence_estimates` VALUES (327);
INSERT INTO `sequence_estimates` VALUES (328);
INSERT INTO `sequence_estimates` VALUES (329);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` int(11) NULL DEFAULT NULL,
  `password_view` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tipe_gaji` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_bpjs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_gabung` date NULL DEFAULT NULL,
  `tgl_resign` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_sim_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_sim_b1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_sim_b2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sertifikat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sim_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sim_b1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_sim_b2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kimper` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ed_kimper` date NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `site_id` bigint(20) NULL DEFAULT NULL,
  `tgl_mutasi` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_tes_medis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file_kimper` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sp` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3362 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('$2y$10$KoWoH1vYcoUWK/nvboN.gulT76dcsjALming/fpSilGWiiff7THTy', 1, '1', 2, '1212', '3233', 'Developer', '23011', 'AI', 'Developer', 'Delete', 'uploads/asesor/16731685613dd757ed-d679-4b06-8ec2-6bffbed7cf27.jpg', '2023-01-02', NULL, 'Laki-laki', NULL, '23123', NULL, NULL, '2023-01-03', '2023-01-16', 'Permata Dalong 2 , B19', NULL, 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-01 14:29:52', NULL, '2023-05-11 13:56:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES ('$2y$10$KoWoH1vYcoUWK/nvboN.gulT76dcsjALming/fpSilGWiiff7THTy', 2, '2', 2, '1212', '123', 'Gabriel Vergio', 'ponzzy22@gmail.com', 'A', 'Admin Project', 'Aktif', 'file/karyawan/avatar/Gabriel Vergio1690911924426cb7cdf4563fac938ef6312ff925a5.jpg', '1999-01-09', NULL, 'Laki-laki', NULL, NULL, NULL, NULL, '2023-01-03', NULL, 'Permata Dalong 2 , B19', NULL, 'Mandala', NULL, NULL, NULL, NULL, 'file/karyawan/sim_a/Irwan Susilo (Simpang 5)1676149741banner.jpg', 'file/karyawan/sim_b1/Irwan Susilo (Simpang 5)1676149900logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 00:45:24', NULL, NULL, 1, '11-07-2023', NULL, NULL, NULL);
INSERT INTO `users` VALUES ('$2y$10$gqsfyZlvEfKo8F2fZNlM3Of/.uh.i3ZHq83aqnpmkLbjFMuwHQjkO', 3359, '123', 6, '123', '123', 'Mamang Simpang Dalong', NULL, 'A', 'Admin Mandala', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-02', '2', '2202301060712', NULL, '2023-06-01 07:12:48', '2023-06-01 07:13:24', NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES ('$2y$10$qV.42mXqgaEXuh3Zc7FzK.yxQggjGoTeOtajxUuHKipX5evVkpkKK', 3360, '21323', 6, '21323', '21323', 'Jamie Valdi', NULL, 'AI', 'Driver Dump Truck', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2202301060719', NULL, '2023-06-01 07:19:37', '2023-06-01 07:19:37', NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES ('$2y$10$BFQNlBaBK3sXNwcvlETG2.XSt.jaI5EwUtghH6Acafn5s4jhJeliG', 3361, '123232', 4, '123232', '123232', 'Mamang Garox', NULL, 'AL', 'Helper', 'Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2202301060719', NULL, '2023-06-01 07:19:37', '2023-06-01 07:19:37', NULL, NULL, 1, NULL, NULL, NULL, NULL);

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
