-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-03-2018 a las 17:11:22
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barracuda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

DROP TABLE IF EXISTS `aplicaciones`;
CREATE TABLE IF NOT EXISTS `aplicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campania_id` int(11) DEFAULT NULL,
  `lote_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `is_aerea` int(1) DEFAULT NULL,
  `humedad` int(11) DEFAULT NULL,
  `viento_vel` float DEFAULT NULL,
  `viento_dir` text,
  `temperatura` float DEFAULT NULL,
  `caudal` float DEFAULT NULL,
  `superficie` float DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle` text,
  `aplicacion_tipo_id` int(11) DEFAULT NULL,
  `id_usuario_cargo` text,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicacion_detalles`
--

DROP TABLE IF EXISTS `aplicacion_detalles`;
CREATE TABLE IF NOT EXISTS `aplicacion_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aplicacione_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `dosis` float NOT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicacion_tipos`
--

DROP TABLE IF EXISTS `aplicacion_tipos`;
CREATE TABLE IF NOT EXISTS `aplicacion_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `detalle` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aplicacion_tipos`
--

INSERT INTO `aplicacion_tipos` (`id`, `nombre`, `detalle`, `created`, `modified`) VALUES
(1, 'Herbicida Post Cosecha', '', NULL, NULL),
(2, 'Herbicida de otoño (1ra)', '', NULL, NULL),
(3, 'Herbicida de otoño (2da)', '', NULL, NULL),
(4, 'Herbicida Pre-Siembra', '', NULL, NULL),
(5, 'Herbicida Pre-Emergente', '', NULL, NULL),
(6, 'Herbicida Post-Emergente', '', NULL, NULL),
(7, 'Repaso', '', NULL, NULL),
(8, 'Fertilizacion Pre-Riego', '', NULL, NULL),
(9, 'Fertilizacion Diferenciacion', '', NULL, NULL),
(10, 'Insecticida', '', NULL, NULL),
(11, 'Fungicida', '', NULL, NULL),
(12, 'Regulador de Crecimiento', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arroz_tipo_curados`
--

DROP TABLE IF EXISTS `arroz_tipo_curados`;
CREATE TABLE IF NOT EXISTS `arroz_tipo_curados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `arroz_tipo_curados`
--

INSERT INTO `arroz_tipo_curados` (`id`, `nombre`, `created`, `modified`) VALUES
(1, 'ZnRV', NULL, NULL),
(2, 'ZnGiRV', NULL, NULL),
(3, 'ZGV', NULL, NULL),
(4, 'ZRV', NULL, NULL),
(5, 'ZNRVGI', NULL, NULL),
(6, 'ZGRV', NULL, NULL),
(7, 'ZGiRV', NULL, NULL),
(8, 'SSRV', NULL, NULL),
(9, 'CL-ZnGiRV', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arroz_variedades`
--

DROP TABLE IF EXISTS `arroz_variedades`;
CREATE TABLE IF NOT EXISTS `arroz_variedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `is_largoancho` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `arroz_variedades`
--

INSERT INTO `arroz_variedades` (`id`, `nombre`, `is_largoancho`) VALUES
(1, 'YERUA', 0),
(3, 'TAIM', 0),
(4, 'IC 107', 0),
(5, 'IRGA 424', 0),
(6, 'IC 110', 0),
(7, 'FORTUNA', 0),
(8, 'SCS 121 CL', 0),
(9, 'GURI', 0),
(10, 'AVAXI', 0),
(11, 'TITAN', 0),
(12, 'PUITA', 0),
(14, 'RP2', 0),
(15, 'SCS 121', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanias`
--

DROP TABLE IF EXISTS `campanias`;
CREATE TABLE IF NOT EXISTS `campanias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `anio` text,
  `detalle` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimientos`
--

DROP TABLE IF EXISTS `establecimientos`;
CREATE TABLE IF NOT EXISTS `establecimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsable_id` int(11) DEFAULT NULL,
  `establecimiento_tipo_id` int(11) DEFAULT NULL,
  `nombre` text,
  `localidad` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `establecimientos`
--

INSERT INTO `establecimientos` (`id`, `responsable_id`, `establecimiento_tipo_id`, `nombre`, `localidad`) VALUES
(4, 4, 4, 'Doña Marina', 'Ita Ibate'),
(5, 4, 2, 'Ita Caabo', 'Mercedes'),
(6, 1, 2, 'Oscuro', 'Perugorria'),
(7, 1, 2, 'San Joaquin', 'San Javier');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento_tipos`
--

DROP TABLE IF EXISTS `establecimiento_tipos`;
CREATE TABLE IF NOT EXISTS `establecimiento_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `detalle` text,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'developers', '2018-02-16 09:20:15', '2018-02-16 09:20:18'),
(2, 'Usuarios', '2018-03-03 09:06:01', '2018-03-03 09:06:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

DROP TABLE IF EXISTS `lotes`;
CREATE TABLE IF NOT EXISTS `lotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `hectareas_reales` float DEFAULT NULL,
  `id_sector` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=634 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lotes`
--

INSERT INTO `lotes` (`id`, `nombre`, `hectareas_reales`, `id_sector`) VALUES
(1, '101', 253, 1),
(3, '102', 286, 1),
(4, '103', 192.8, 1),
(5, '104', 190, 1),
(6, '105', 228.5, 1),
(7, '106', 98, 1),
(8, '107', 42.3, 1),
(9, '108', 60.5, 1),
(10, '201', 67.4, 3),
(11, '202', 68.2, 3),
(12, '203', 67, 3),
(13, '204', 45.3, 3),
(14, '205', 152, 3),
(15, '206', 203.2, 3),
(16, '207', 241.7, 3),
(18, '208', 303.9, 3),
(19, '209', 200, 3),
(20, '210', 164, 3),
(21, '211', 141.5, 3),
(22, '212', 133.4, 3),
(23, '213', 136.9, 3),
(24, '214', 135.7, 3),
(25, '215', 151.3, 3),
(26, '216', 128.6, 3),
(27, '217', 142, 3),
(28, '218', 133.4, 3),
(30, '219', 196, 3),
(31, '220', 190.2, 3),
(33, '221', 145, 3),
(36, '222', 132, 3),
(37, '223', 104.6, 3),
(38, '224', 124, 3),
(39, '225', 95.7, 3),
(40, '301', 48, 4),
(41, '302', 157.7, 4),
(42, '303', 176, 4),
(43, '304', 147.5, 4),
(44, '305', 139, 4),
(45, '306', 40, 4),
(46, '307', 115.5, 4),
(47, '308', 109, 4),
(48, '309', 48, 4),
(49, '310', 154.2, 4),
(50, '401', 356.4, 5),
(51, '402', 301.9, 5),
(52, '403', 249, 5),
(53, '404', 210, 5),
(54, '405', 154, 5),
(55, '501', 91.6, 6),
(56, '502', 185, 6),
(57, '503', 218.7, 6),
(58, '504', 299.6, 6),
(59, '505', 136, 6),
(60, '506', 127, 6),
(61, '507', 95, 6),
(62, '508', 80.9, 6),
(63, '509', 104, 6),
(64, '510', 96.3, 6),
(65, '511', 61.6, 6),
(66, '512', 117, 6),
(67, '513', 181, 6),
(68, '514', 213.1, 6),
(69, '515', 74, 6),
(70, '601A', 58.9, 7),
(71, '601B', 52.6, 7),
(72, '601C', 156.1, 7),
(73, '602A', 64.5, 7),
(74, '602B', 56.2, 7),
(75, '602C', 163.3, 7),
(76, '603A', 71.1, 7),
(77, '603B', 55.5, 7),
(78, '603C', 169, 7),
(79, '604', 78.6, 7),
(80, '604C', 51, 7),
(81, '605', 214.5, 7),
(82, '606', 345, 7),
(83, '607', 360.5, 7),
(84, '608', 200, 7),
(85, '609', 104, 7),
(86, '610', 132.1, 7),
(87, '01 A', 21.6, 22),
(88, '01 B', 22.8, 22),
(89, '01 C', 21.3, 22),
(90, '01 D', 20.2, 22),
(91, '01 E', 18.2, 22),
(92, '02 A', 21, 22),
(93, '02 B', 20.1, 22),
(94, '02 C', 19, 22),
(95, '02 D', 17.9, 22),
(96, '02 E', 16.6, 22),
(97, '03 A', 16.5, 22),
(98, '03 B', 12, 22),
(99, '03 C', 12.6, 22),
(100, '03 D', 12, 22),
(101, '03 E', 11, 22),
(102, '04 A', 9.5, 22),
(103, '04 B', 15.1, 22),
(104, '04 C', 17.3, 22),
(105, '04 D', 23.4, 22),
(106, '04 E', 24.3, 22),
(107, '04 F1', 13.8, 22),
(108, '04 F2', 11.3, 22),
(109, '05 A', 20, 22),
(110, '05 B', 20, 22),
(111, '05 C', 20, 22),
(112, '05 D', 20, 22),
(113, '05 E', 20, 22),
(114, '05 F', 20, 22),
(115, '06 A', 12.8, 22),
(116, '06 B', 13.1, 22),
(117, '06 C', 9.6, 22),
(118, '06 D', 16.4, 22),
(119, '06 E', 21, 22),
(120, '07 A', 16.5, 22),
(121, '07 B', 9.4, 22),
(122, '07 C', 5.9, 22),
(123, '07 E', 9.8, 22),
(124, '07 F', 15.5, 22),
(125, '07 G', 6.9, 22),
(126, '07 H', 16.2, 22),
(127, '08 A', 7, 22),
(128, '08 B', 3.4, 22),
(129, '08 C', 18, 22),
(130, '08 D', 22, 22),
(131, '08 E', 22.7, 22),
(132, '08 F', 21.6, 22),
(133, '09 A', 27, 22),
(134, '09 B', 35.5, 22),
(135, '09 C', 22, 22),
(136, '09 D', 20.8, 22),
(137, '09 E', 23, 22),
(138, '10 A', 33, 22),
(139, '10 B', 36.5, 22),
(140, '10 C', 44.8, 22),
(141, '10 D', 25.7, 22),
(142, '11 A', 23.8, 22),
(143, '11 B', 30.1, 22),
(144, '11 C', 40, 22),
(145, '11 D', 55, 22),
(146, '12 Chico', 13.8, 22),
(147, '12 A', 64.3, 22),
(148, '12 B', 70, 22),
(149, '12 C', 75, 22),
(150, '12 D', 47.4, 22),
(151, '12 E', 29.8, 22),
(152, '12 F', 23.3, 22),
(153, '12 G', 17, 22),
(154, '13 A', 20.1, 22),
(155, '13 B', 28.1, 22),
(156, '13 C', 20.7, 22),
(157, '13 D', 11.3, 22),
(158, '14 A', 24.2, 22),
(159, '14 B', 20.8, 22),
(160, '14 C', 21.1, 22),
(161, '14 D', 18.4, 22),
(162, '14 E', 27.3, 22),
(163, '1', 80, 15),
(164, '2', 77, 15),
(165, '3', 97, 15),
(166, '4', 61.3, 15),
(167, '6', 124, 15),
(168, '8', 115.6, 15),
(169, '11', 171, 15),
(170, '13', 37, 15),
(171, '15', 137, 15),
(172, '10A', 133, 15),
(173, '10B', 162, 15),
(174, '10C', 135, 15),
(175, '12A', 47, 15),
(176, '12B', 79, 15),
(177, '12C', 116, 15),
(178, '12D', 107, 15),
(179, '14A', 198, 15),
(180, '14B', 155, 15),
(181, '14C', 124, 15),
(182, '5A', 82, 15),
(183, '5B', 60, 15),
(184, '5C', 107, 15),
(185, '7A', 82, 15),
(186, '7B', 68, 15),
(187, '9A', 80, 15),
(188, '9B', 103, 15),
(189, 'CASCO', 65, 15),
(190, 'PISTA', 14, 16),
(191, '100', 86, 16),
(192, '101', 40, 16),
(193, '102', 66, 16),
(210, '103', 58, 16),
(211, '104', 31, 16),
(212, '105A', 41.5, 16),
(213, '105B', 27.5, 16),
(214, '106', 91.5, 16),
(215, '107', 15, 16),
(216, '108A', 28, 16),
(217, '108B', 33, 16),
(218, '109', 40.5, 16),
(219, '110', 64, 16),
(220, '111', 45, 16),
(221, '112', 58, 16),
(222, '113', 45, 16),
(223, '200', 70, 16),
(224, '201', 19.2, 16),
(225, '202', 45, 16),
(226, '203', 42, 16),
(227, '204', 44.2, 16),
(228, '205', 43.5, 16),
(229, '206', 44, 16),
(230, '207', 44, 16),
(231, '208', 44, 16),
(232, '209', 44, 16),
(233, '210', 87, 16),
(234, '211', 101, 16),
(235, '212', 109, 16),
(236, '213', 110, 16),
(237, '214', 112, 16),
(238, '215', 109, 16),
(239, '216', 100, 16),
(240, '217', 109, 16),
(241, '218', 93, 16),
(242, '219', 97, 16),
(243, '220', 36, 16),
(244, '221', 33, 16),
(245, '222', 44, 16),
(246, '223', 66, 16),
(247, '224', 46, 16),
(248, '225', 44, 16),
(249, '300', 44, 16),
(250, '301', 105, 16),
(251, '302', 125, 16),
(252, '303', 99, 16),
(253, '304', 76, 16),
(254, '305', 105, 16),
(255, '306', 106, 16),
(256, '307', 110, 16),
(257, '308', 113, 16),
(258, '309', 102.5, 16),
(259, '310', 121, 16),
(260, '400', 39, 16),
(261, '401', 53, 16),
(262, '402', 62, 16),
(263, '403', 90, 16),
(264, '404', 117, 16),
(266, '405', 120, 16),
(269, '406', 87, 16),
(270, '500', 219, 17),
(271, '501', 212.5, 17),
(272, '502', 128, 17),
(273, '503', 143.5, 17),
(274, '504', 169, 17),
(275, '505', 218, 17),
(276, '506', 231.4, 17),
(277, '507', 334.5, 17),
(278, '508', 362.4, 17),
(279, '509', 291, 17),
(280, '510', 201, 17),
(281, '511', 191.4, 17),
(282, '600', 212, 17),
(283, '601', 202, 17),
(284, '602', 113, 17),
(285, '604', 86, 17),
(286, 'CA 01', 12.8, 19),
(287, 'CA 02', 34, 19),
(288, 'CA 03', 9.6, 19),
(289, 'CA 04', 33.4, 19),
(290, 'CA 05', 34.5, 19),
(291, 'CA 06', 75, 19),
(292, 'CA 07', 59, 19),
(293, 'CA 10', 58, 19),
(294, 'CA 11', 51.5, 19),
(295, 'CA 12', 48, 19),
(296, 'CA 13', 29.9, 19),
(297, 'CA 14', 29.7, 19),
(298, 'CA 15', 54.5, 19),
(299, 'CA 16', 50.3, 19),
(300, 'CA 17', 43, 19),
(301, 'CA 20', 18.4, 19),
(302, 'CA 21', 15.3, 19),
(303, 'CA 22', 39.6, 19),
(304, 'CA 23', 16, 19),
(305, 'CA 24', 46, 19),
(306, 'CA 25', 78, 19),
(307, 'CA 26', 53, 19),
(308, 'CA 27', 40.3, 19),
(309, 'CA 28', 18, 19),
(310, 'CA 29', 13.4, 19),
(311, 'CA 30', 14.5, 19),
(312, 'CA 31', 15, 19),
(313, 'CA 32', 17.5, 19),
(314, 'CA 33', 34.5, 19),
(315, 'CA 34', 52.5, 19),
(316, 'CA 35', 48.7, 19),
(317, 'CA 36', 37.2, 19),
(318, 'CA 37', 39.25, 19),
(319, 'CA 38', 51, 19),
(320, 'CA 39', 61.2, 19),
(321, 'CA 40', 8.3, 19),
(322, 'CA 41', 60, 19),
(323, 'CA 42', 42, 19),
(324, 'CA 51', 33, 19),
(325, 'CA 53', 111.3, 19),
(326, 'CA 54', 136.6, 19),
(327, 'CA 55', 91, 19),
(328, 'CA 56', 23, 19),
(329, 'CA 57', 23, 19),
(330, 'CA 58', 21, 19),
(331, 'CA 59', 58, 19),
(332, 'CA 60', 37, 19),
(333, 'CA 61', 48.1, 19),
(334, 'CA 62', 63.3, 19),
(335, 'CHACRA', 34, 19),
(336, 'DA 101', 48, 18),
(337, 'DA 102', 50, 18),
(338, 'DA 103', 24, 18),
(339, 'DA 104', 84, 18),
(340, 'DA 105', 21, 18),
(341, 'DA 106', 35, 18),
(342, 'DA 107', 54, 18),
(343, 'DA 108', 21.8, 18),
(344, 'DA 109', 40, 18),
(345, 'DA 110', 100, 18),
(346, 'DA 111', 52, 18),
(347, 'DA 112', 44, 18),
(348, 'DA 113', 23, 18),
(349, 'DA 114', 45, 18),
(350, 'DA 115', 35, 18),
(351, 'DA 116', 68, 18),
(352, 'DA 200', 45, 18),
(353, 'DA 201', 44, 18),
(354, 'DA 202', 45, 18),
(355, 'DA 203', 45, 18),
(356, 'DA 204', 28, 18),
(357, 'DA 205', 33, 18),
(358, 'DA 206', 4, 18),
(359, 'DA 207', 28, 18),
(360, 'DA 208', 28, 18),
(361, 'DA 209', 23, 18),
(362, 'DA 210', 61, 18),
(363, 'DA 211', 33, 18),
(364, 'DA 300', 49, 18),
(365, 'DA 301', 74, 18),
(366, 'DA 302', 50, 18),
(367, 'DA 303', 68, 18),
(368, 'DA 304', 70, 18),
(369, 'DA 305', 48, 18),
(370, 'DA 306', 54, 18),
(371, 'DA 307', 25, 18),
(372, 'DA 400', 38, 18),
(373, 'DA 401', 38, 18),
(374, 'DA 402', 34, 18),
(375, 'DA 403', 45, 18),
(376, 'DA 404', 44, 18),
(377, 'DA 405', 62, 18),
(378, 'DA 406', 70, 18),
(379, 'DA 407', 39.6, 18),
(380, 'DA 100', 19, 21),
(381, 'DA 100', 13.53, 21),
(382, 'Ciriaco', 28, 21),
(383, 'Colorada', 82, 21),
(384, 'Curupi', 48.9, 21),
(386, 'Higueron Alto', 89.75, 21),
(387, 'Higueron Bajo', 22.2, 21),
(388, 'IC 1', 57.5, 21),
(389, 'IC 2', 54.5, 21),
(390, 'IC 3', 64, 21),
(391, 'IC 4', 70, 21),
(392, 'IC A', 4.1, 21),
(393, 'IC B', 5, 21),
(394, 'IC C', 18.5, 21),
(395, 'IC D', 30.4, 21),
(396, 'IC E', 23, 21),
(397, 'IC F', 4, 21),
(398, 'IC G', 34.1, 21),
(399, 'IC H', 47.5, 21),
(400, 'IC I', 20.5, 21),
(401, 'IC J', 49, 21),
(402, 'Ita Paso', 121.8, 21),
(403, 'Mezcla', 23, 21),
(404, 'Piquete Nuevo', 57.5, 21),
(405, 'Polo', 20.3, 21),
(406, 'Potrero 3', 51.1, 21),
(407, 'San Roquito', 95, 21),
(408, 'YA 1', 1.5, 21),
(409, 'YA 2', 10.3, 21),
(410, 'YA 3', 42.7, 21),
(411, 'YA 4', 5.3, 21),
(412, 'YA 5', 24, 21),
(413, 'YA 6', 41.4, 21),
(414, 'YA 7', 42.4, 21),
(415, 'YA 8', 30.2, 21),
(416, 'YA 9', 30, 21),
(417, 'YA 10', 42.8, 21),
(418, 'Yaguane', 38.2, 21),
(419, 'IC 5', 54, 20),
(420, 'IC 6', 52.5, 20),
(421, 'IC 7', 21.1, 20),
(422, 'IC 8', 77, 20),
(423, 'IC 9', 61.8, 20),
(424, 'IC 10', 37.2, 20),
(425, 'IC 11', 20, 20),
(426, 'SE 12', 34, 20),
(427, 'SE 13', 10, 20),
(428, 'SE 14', 68.7, 20),
(429, 'SE 15', 43, 20),
(430, 'SE 16', 30.4, 20),
(431, 'SE 17', 41.5, 20),
(432, 'SE 18', 40.5, 20),
(433, 'SE 19', 37.7, 20),
(434, 'SE 20A', 42.2, 20),
(435, 'SE 20B', 53.7, 20),
(436, 'SE 20C', 45.7, 20),
(437, 'SE 21A', 32.5, 20),
(438, 'SE 21B', 21.5, 20),
(439, 'SE 21C', 43.5, 20),
(440, 'SE 21D', 34, 20),
(441, 'SE 22', 26, 20),
(442, 'SE 23', 28, 20),
(443, 'SE 24', 31, 20),
(444, 'SE 25', 63.8, 20),
(445, 'SE 26', 64, 20),
(446, 'SE 27', 14, 20),
(447, 'SE 28', 58, 20),
(448, 'SE 29', 50.6, 20),
(449, 'SE 30', 39.3, 20),
(450, 'SE 31', 38.9, 20),
(451, 'SE 32', 27.3, 20),
(452, 'SE 33', 14, 20),
(453, 'SE 34', 85.4, 20),
(454, 'SE 35', 15, 20),
(455, 'SE 36', 42.5, 20),
(456, 'SE 37', 73.8, 20),
(457, 'SE 38', 70.4, 20),
(458, 'SE 39', 95, 20),
(459, 'SE 40A', 29, 20),
(460, 'SE 40B', 45, 20),
(461, 'SE 40C', 50.6, 20),
(468, '100', 1.6, 8),
(469, '101-1', 17.54, 8),
(470, '101-2', 19.38, 8),
(471, '101-3', 23.33, 8),
(472, '101-4', 23.14, 8),
(473, '101-5', 48.63, 8),
(474, '101-6', 40.14, 8),
(475, '101-7', 27.93, 8),
(476, '101-8', 25.26, 8),
(477, '101-9', 8.48, 8),
(478, '102-1', 29.42, 8),
(479, '102-2', 25.89, 8),
(480, '102-3', 27.51, 8),
(481, '102-4', 23.89, 8),
(482, '102-5', 26.38, 8),
(483, '102-6', 23.25, 8),
(484, '102-7', 22.82, 8),
(485, '102-8', 19.91, 8),
(486, '103-1', 20.6, 8),
(487, '103-2', 24.8, 8),
(488, '103-3', 34.34, 8),
(489, '103-4', 18.19, 8),
(490, '103-5', 14.66, 8),
(491, '103-6', 6.16, 8),
(492, '103-7', 9.02, 8),
(493, '103-8', 38.99, 8),
(494, '103-9', 36.85, 8),
(495, '103-10', 19.2, 8),
(496, '103-11', 23.08, 8),
(497, '103-12', 12.31, 8),
(498, '103-13', 29.88, 8),
(499, '103-14', 28.2, 8),
(500, '103-15', 8.16, 8),
(501, '103-16', 27.14, 8),
(502, '103-17', 19.52, 8),
(503, '103-18', 14.82, 8),
(504, '103-19', 8.4, 8),
(505, '104-1', 12.99, 8),
(506, '104-2', 11.7, 8),
(507, '104-3A', 14.82, 8),
(508, '104-3B', 26.61, 8),
(509, '104-4', 11.37, 8),
(510, '104-5', 23.18, 8),
(511, '104-6', 13.26, 8),
(512, '104-7', 18.11, 8),
(513, '104-8', 30.35, 8),
(514, '104-9', 12.63, 8),
(515, '104-10', 18.96, 8),
(516, '104-11', 10.57, 8),
(517, '104-12', 15.87, 8),
(518, '104-13', 10.71, 8),
(519, '104-14', 10.74, 8),
(520, '104-15', 12.26, 8),
(521, '104-16', 18.77, 8),
(522, '201', 72.5, 9),
(523, '202', 85.16, 9),
(524, '203', 85.43, 9),
(525, '204A', 50.4, 9),
(526, '204B', 26.1, 9),
(527, '205', 84.43, 9),
(528, '206', 89.1, 9),
(529, '207', 106.44, 9),
(530, '208', 114.11, 9),
(531, '209A', 74.2, 9),
(532, '209B', 11.29, 9),
(533, '210', 65.94, 9),
(534, '211', 61.57, 9),
(535, '212A', 50.92, 9),
(536, '212B', 16.04, 9),
(537, '213A', 46.54, 9),
(538, '213B', 13.44, 9),
(539, '214', 38.41, 9),
(540, '301', 70.7, 10),
(541, '302', 67.81, 10),
(542, '303', 81.7, 10),
(543, '304', 81.59, 10),
(544, '305', 77.77, 10),
(545, '306', 75.16, 10),
(546, '307', 81, 10),
(547, '308', 89, 10),
(548, '309A', 68, 10),
(549, '309B', 31, 10),
(550, '310A', 51, 10),
(551, '310B', 37.5, 10),
(552, '311A', 43.5, 10),
(553, '311B', 40.5, 10),
(554, '312A', 47, 10),
(555, '312B', 36, 10),
(556, '312C', 24.5, 10),
(557, '313', 101.5, 10),
(558, '314', 93.5, 10),
(559, '315', 94, 10),
(560, '316A', 62.5, 10),
(561, '316B', 49, 10),
(562, '316C', 8, 10),
(563, '401', 11, 11),
(564, '402', 18.5, 11),
(565, '403', 20.5, 11),
(566, '404', 28, 11),
(567, '405', 38.5, 11),
(568, '406', 59, 11),
(569, '407A', 17, 11),
(570, '407B', 25.5, 11),
(571, '407C', 15.5, 11),
(572, '408A', 17.5, 11),
(573, '408B', 13.5, 11),
(574, '408C', 71.5, 11),
(575, '409', 108.99, 11),
(576, '410', 114.59, 11),
(577, '411', 154, 11),
(578, '412', 166, 11),
(579, '413', 153.5, 11),
(580, '414A', 64, 11),
(581, '414B', 63, 11),
(582, '415A', 31.5, 11),
(583, '415B', 9, 11),
(584, '500', 30.43, 12),
(585, '501', 9.7, 12),
(586, '502', 34.04, 12),
(587, '503', 49.9, 12),
(588, '504', 58.29, 12),
(589, '505', 71.95, 12),
(590, '506', 109.89, 12),
(591, '507', 95.29, 12),
(592, '508', 88.31, 12),
(593, '509', 115.49, 12),
(594, '510', 110, 12),
(595, '511', 89.48, 12),
(596, '512', 104.7, 12),
(597, '513', 90.25, 12),
(598, '514', 89, 12),
(599, '515', 80.13, 12),
(600, '516', 72.96, 12),
(601, '517', 72.34, 12),
(602, '518', 67.7, 12),
(603, '519', 53.9, 12),
(604, '520', 114.3, 12),
(605, '521', 90.4, 12),
(606, '522', 63, 12),
(607, '523', 42.2, 12),
(608, '601', 33.11, 13),
(609, '602', 40.76, 13),
(610, '603', 47.75, 13),
(611, '604', 47.99, 13),
(612, '605', 50.9, 13),
(613, '606', 49.17, 13),
(614, '607', 46.66, 13),
(615, '608', 39.3, 13),
(616, '609', 31.84, 13),
(617, '610', 27.52, 13),
(618, '701', 229, 14),
(619, '702', 245, 14),
(620, '703', 186, 14),
(621, '704', 96, 14),
(622, '705A', 36, 14),
(623, '705B', 57, 14),
(624, '706', 105, 14),
(625, '707', 84, 14),
(626, '708', 113, 14),
(627, '709', 97, 14),
(628, '710', 125, 14),
(629, '711', 108.7, 14),
(630, '603', 114, 17),
(631, '07 D', 4.9, 22),
(632, 'CA 08', 80, 19),
(633, 'CA 09', 45, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `dosis_min` float DEFAULT NULL,
  `dosis_max` float DEFAULT NULL,
  `producto_tipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `dosis_min`, `dosis_max`, `producto_tipo_id`) VALUES
(1, 'Urea', 40, 150, 1),
(3, 'NPK', 70, 180, 1),
(4, 'MAP', 40, 110, 1),
(5, 'DAP', 40, 120, 1),
(6, 'Command', 0.3, 1, 3),
(7, 'Dicamba', 0.12, 0.2, 3),
(8, 'Tordon', 0.12, 0.2, 3),
(9, 'Metsulfuron', 0.005, 0.008, 3),
(10, '2,4 D', 0.8, 1.2, 3),
(11, 'Kifix', 0.14, 0.21, 3),
(12, 'Glifosato', 2, 7, 3),
(13, 'Nominee', 0.1, 0.13, 3),
(14, 'Clincher', 1.6, 2, 3),
(15, 'Rebelex', 1.4, 1.6, 3),
(16, 'Facet (25%)', 1, 1.5, 3),
(17, 'Propanil (48%)', 4, 6, 3),
(18, 'Propanil (60%)', 2, 3, 3),
(19, 'Basagran', 1.4, 2, 3),
(20, 'Herbadox', 1.5, 3, 3),
(21, 'Alfametrina (10%)', 0.1, 0.12, 5),
(22, 'Alfametrina (15%) ', 0.08, 0.1, 5),
(23, 'Lambda cialotrina (5%)', 0.13, 0.15, 5),
(24, 'Engeo', 0.2, 0.2, 5),
(25, 'MZ Duo', 0.75, 0.75, 5),
(26, 'Amistar común ', 0.4, 0.6, 6),
(27, 'Amistar Xtra', 0.3, 0.4, 6),
(28, 'Stinger', 0.3, 0.4, 6),
(29, 'Harrier', 0.1, 0.1, 4),
(30, 'Aceite Metilado', 0.5, 0.8, 4),
(31, 'Up Take', 0.5, 0.8, 4),
(32, 'Natural Oleo', 0.5, 0.8, 4),
(33, 'Eco Rizo Spray', 0.02, 0.03, 4),
(34, 'Speed Wet Maxion', 0.075, 0.1, 4),
(35, 'Speed Wet Anti Deriva', 30, 50, 4),
(36, 'Maxi Drop', 0.004, 0.008, 4),
(37, 'Picloram', 0, 0, 3),
(38, 'Sirtaki', 0, 100, 3),
(39, 'Claron', 0, 100, 3),
(40, 'Clomazone', 0, 100, 3),
(41, 'Ricebac', 0, 100, 3),
(42, 'Facet', 0, 100, 3),
(43, 'Heat', 0, 100, 3),
(44, 'Propanil', 0, 100, 3),
(45, 'Dual Gold', 0, 100, 3),
(46, 'Aceite', 0, 100, 3),
(47, 'Speed Maxium', 0, 100, 3),
(48, 'Sulfato de Amonio', 0, 100, 3),
(49, 'SpeedWet', 0, 100, 3),
(50, 'Ricer', 0.15, 0.2, 3),
(51, 'Moddus', 0, 100, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_tipos`
--

DROP TABLE IF EXISTS `producto_tipos`;
CREATE TABLE IF NOT EXISTS `producto_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_tipos`
--

INSERT INTO `producto_tipos` (`id`, `nombre`) VALUES
(1, 'Fertilizante'),
(3, 'Herbicida'),
(4, 'Coadyuvante'),
(5, 'Insecticida'),
(6, 'Fungicida'),
(7, 'Regulador de Crecimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

DROP TABLE IF EXISTS `sectores`;
CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `establecimiento_id` int(11) DEFAULT NULL,
  `campania_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `nombre`, `establecimiento_id`, `campania_id`) VALUES
(1, 'Modulo 1 (DM)', 4, NULL),
(3, 'Modulo 2 (DM)', 4, NULL),
(4, 'Modulo 3 (DM)', 4, NULL),
(5, 'Modulo 4 (DM)', 4, NULL),
(6, 'Modulo 5 (DM)', 4, NULL),
(7, 'Modulo 6 (DM)', 4, NULL),
(8, 'Modulo 1 (OSC)', 6, NULL),
(9, 'Modulo 2 (OSC)', 6, NULL),
(10, 'Modulo 3 (OSC)', 6, NULL),
(11, 'Modulo 4 (OSC)', 6, NULL),
(12, 'Modulo 5 (OSC)', 6, NULL),
(13, 'Modulo 6 (OSC)', 6, NULL),
(14, 'Modulo 7 (OSC)', 6, NULL),
(15, 'Modulo 1 (SJO)', 7, NULL),
(16, 'Modulo 2 (SJO)', 7, NULL),
(17, 'Modulo 3 (SJO)', 7, NULL),
(18, 'Don Antonio (ITC)', 5, NULL),
(19, 'Caneto (ITC)', 5, NULL),
(20, 'Serrano (ITC)', 5, NULL),
(21, 'Ita Caabo (ITC)', 5, NULL),
(22, 'Santa Isabel', 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_laboreos`
--

DROP TABLE IF EXISTS `sistema_laboreos`;
CREATE TABLE IF NOT EXISTS `sistema_laboreos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sistema_laboreos`
--

INSERT INTO `sistema_laboreos` (`id`, `nombre`) VALUES
(1, 'Directa'),
(2, 'Convencional'),
(3, 'Reducida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicas`
--

DROP TABLE IF EXISTS `tecnicas`;
CREATE TABLE IF NOT EXISTS `tecnicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campania_id` int(11) DEFAULT NULL,
  `lote_id` int(11) DEFAULT NULL,
  `sistema_laboreo_id` int(11) DEFAULT NULL,
  `arroz_variedade_id` int(11) DEFAULT NULL,
  `arroz_tipo_curado_id` int(11) DEFAULT NULL,
  `hectareas_sembradas` float DEFAULT NULL,
  `fecha_siembra` date DEFAULT NULL,
  `densidad_siembra` float DEFAULT NULL,
  `fecha_emergencia` date DEFAULT NULL,
  `densidad_planta` int(11) DEFAULT NULL,
  `fecha_diferenciacion` date DEFAULT NULL,
  `fecha_inicioriego` date DEFAULT NULL,
  `fecha_chacracompleta` date DEFAULT NULL,
  `fecha_finriego` date DEFAULT NULL,
  `fecha_floracion` date DEFAULT NULL,
  `panojas` int(11) DEFAULT NULL,
  `grano_lleno` int(11) DEFAULT NULL,
  `grano_vano` int(11) DEFAULT NULL,
  `fecha_cosecha` date DEFAULT NULL,
  `hectareas_cosechadas` float DEFAULT NULL,
  `humedad_cosecha` float DEFAULT NULL,
  `total_kgsecos` int(11) DEFAULT NULL,
  `factor` float DEFAULT NULL,
  `observacion` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnica_responsables`
--

DROP TABLE IF EXISTS `tecnica_responsables`;
CREATE TABLE IF NOT EXISTS `tecnica_responsables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `is_responsable` int(11) DEFAULT NULL,
  `tecnica_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ruta_imagen` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `group_id`, `role_id`, `username`, `password`, `nombre`, `ruta_imagen`, `email`, `created`, `modified`) VALUES
(1, 1, 1, 'jalegre', '$2y$10$DiMcpKS.3SKImMVSdITwTeYhNagctY5fFkSns7J9aJsfOZTodnCr6', 'Javier Alegre', 'user1.jpg', 'javieralegre2003@hotmail.com', '2018-02-16 09:19:46', '2018-02-16 17:53:28'),
(2, 1, 1, 'obarrientos', '$2y$10$ZIgKUo1dqJMwDMRMdtd2Q.aIfvpAmQU9bgJgLDXKgE8cuTMWUE6wW', 'Omar Barrientos', 'user2.jpg', 'obarrientos@adecoagro.com', '2018-03-02 08:10:04', '2018-03-02 08:10:04'),
(3, 1, 1, 'mandreotti', '$2y$10$UDqwF1wRu/KR1bGeuXHkWefwp2vJUU5e7VPR1cE/LDKKYJ98u.P5W', 'Martin Andreotti', 'user3.jpg', 'mandreotti@adecoagro.com', '2018-03-02 08:12:27', '2018-03-02 08:12:27'),
(4, 1, 1, 'cegonzalez', '$2y$10$iY8XDB38SZJYZkJJ2ncys.SXSjDF9BngzACTSCJsUCSkNqMIp3eTO', 'Cesar Gonzalez', NULL, 'cegonzalez@adecoagro.com', '2018-03-02 09:10:23', '2018-03-02 09:10:23'),
(5, 2, 2, 'rgonzalez', '$2y$10$cVPVYCdrtehoK3rzGkLmeOhv/NPDKuIPeBmdF/nljL/YiOVNceuCu', 'Hernan Gonzalez', NULL, 'rgonzalez@adecoagro.com', '2018-03-03 09:06:55', '2018-03-03 09:06:55'),
(10, 1, 1, 'pnunez', '$2y$10$.bqpiIXnQQf02Ytl7M3fP.zo1zFqI1cdr76bnBpOD3HKqscTH4oGC', 'Pedro Nuñez', NULL, 'pnunez@adecoagro.com', '2018-03-06 09:42:13', '2018-03-06 09:42:13'),
(11, 1, 1, 'dhmino', '$2y$10$RD8M0Wd9BMof7QN87VnwZ.zPfFl/qc.UidsKoapegj9lqNQ91RYh.', 'Dario Miño', NULL, 'dhmino@adecoagro.com', '2018-03-06 09:43:16', '2018-03-06 09:43:16'),
(13, 1, 1, 'asauthier', '$2y$10$ZOF18qk5SD598m9iGkjS1ORx1Ifb6pae8wQfE3hDcm3fAva6wKgb6', 'Ailin Sauthier', 'user.jpg', 'asauthier@adecoagro.com', '2018-03-07 08:01:28', '2018-03-07 08:01:28'),
(14, 1, 1, 'irunnacles', '$2y$10$6ILs8.cWHZGFinYs8MGjxed94PrRWLa/6ZLXFvTLhXsZo4HKzIuWa', 'Ian Runnacles', 'user.jpg', 'irunnacles@adecoagro.com', '2018-03-07 08:02:31', '2018-03-07 08:02:31'),
(15, 1, 1, 'semillero', '$2y$10$SzyNwbnqauWtah/ZvfmxL.iagtlj1Ip2xab15mhIxXFteDDc3ejCm', 'Laboratorio Semillero', 'user.jpg', 'semillero@agroarroz.com.ar', '2018-03-07 08:06:14', '2018-03-07 08:06:14'),
(16, 1, 1, 'jlocker', '$2y$10$/7KFG7TPRApcS3IGU4qcE.j6p8sc2.0pNGErB6yCVSqIVN5C2VYsK', 'Jonathan Locker', 'user.jpg', 'jlocker@adecoagro.com', '2018-03-12 08:46:17', '2018-03-12 08:46:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
