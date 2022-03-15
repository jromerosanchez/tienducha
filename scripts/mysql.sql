CREATE DATABASE IF NOT EXISTS tienducha;
USE tienducha;
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `telefono` int DEFAULT NULL
);
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `codigo` int NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `rebaja` int DEFAULT NULL,
  `estarebajas` enum('Si','No') DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL
);
