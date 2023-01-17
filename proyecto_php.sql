-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.39-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyecto_php
CREATE DATABASE IF NOT EXISTS `proyecto_php` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `proyecto_php`;

-- Volcando estructura para tabla proyecto_php.provincias
CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provincias` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla proyecto_php.provincias: ~52 rows (aproximadamente)
REPLACE INTO `provincias` (`id`, `provincias`) VALUES
	(1, 'Alava'),
	(2, 'Albacete'),
	(3, 'Alicante'),
	(4, 'Almera'),
	(5, 'Avila'),
	(6, 'Badajoz'),
	(7, 'Balears (Illes)'),
	(8, 'Barcelona'),
	(9, 'Burgos'),
	(10, 'Cáceres'),
	(11, 'Cádiz'),
	(12, 'Castellón'),
	(13, 'Ciudad Real'),
	(14, 'Córdoba'),
	(15, 'Coruña (A)'),
	(16, 'Cuenca'),
	(17, 'Girona'),
	(18, 'Granada'),
	(19, 'Guadalajara'),
	(20, 'Guipzcoa'),
	(21, 'Huelva'),
	(22, 'Huesca'),
	(23, 'Jaén'),
	(24, 'León'),
	(25, 'Lleida'),
	(26, 'Rioja (La)'),
	(27, 'Lugo'),
	(28, 'Madrid'),
	(29, 'Málaga'),
	(30, 'Murcia'),
	(31, 'Navarra'),
	(32, 'Ourense'),
	(33, 'Asturias'),
	(34, 'Palencia'),
	(35, 'Palmas (Las)'),
	(36, 'Pontevedra'),
	(37, 'Salamanca'),
	(38, 'Santa Cruz de Teneri'),
	(39, 'Cantabria'),
	(40, 'Segovia'),
	(41, 'Sevilla'),
	(42, 'Soria'),
	(43, 'Tarragona'),
	(44, 'Teruel'),
	(45, 'Toledo'),
	(46, 'Valencia'),
	(47, 'Valladolid'),
	(48, 'Vizcaya'),
	(49, 'Zamora'),
	(50, 'Zaragoza'),
	(51, 'Ceuta'),
	(52, 'Melilla');

-- Volcando estructura para tabla proyecto_php.tareas
CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_tarea` varchar(20) NOT NULL,
  `persona_contacto` varchar(20) NOT NULL,
  `tlf_contacto` int(9) NOT NULL,
  `email` varchar(20) NOT NULL,
  `poblacion` varchar(20) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `operario_encargado` varchar(20) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `anotaciones_anterior` text NOT NULL,
  `fecha_realizacion` date NOT NULL,
  `anotaciones_posteriores` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla proyecto_php.tareas: ~45 rows (aproximadamente)
REPLACE INTO `tareas` (`id`, `nombre_tarea`, `persona_contacto`, `tlf_contacto`, `email`, `poblacion`, `codigo_postal`, `provincia`, `estado`, `operario_encargado`, `fecha_creacion`, `anotaciones_anterior`, `fecha_realizacion`, `anotaciones_posteriores`) VALUES
	(1, 'Prueba1', 'dani', 963258741, 'dani@gmail.com', 'Huelva', 21005, 'Huelva', 'Realizada', 'op1', '2020-11-16', 'Pruebas', '2020-11-18', 'Anotaciones '),
	(2, 'Prueba2', 'pepe', 658974321, 'pepe@gmail.com', 'Sevilla', 41001, 'Sevilla', 'Pendiente', 'op1', '2020-11-19', 'Pruebas 2', '2020-01-06', 'Pruebas 2'),
	(3, 'Prueba3', 'jesus', 698523741, 'jesus@gmail.com', 'Huelva', 21005, 'Huelva', 'Cancelada', 'op2', '2020-11-24', 'Pruebas 3', '2020-12-01', 'Pruebas 3'),
	(5, 'Prueba2', 'pepe', 658974321, 'pepe@gmail.com', 'Sevilla', 41001, 'Sevilla', 'Pendiente', 'op1', '2020-11-19', 'Pruebas 2', '2020-01-06', 'Prueba Edicion'),
	(6, 'Prueba3', 'jesus', 698523741, 'jesus@gmail.com', 'Huelva', 21005, 'Huelva', 'Cancelada', 'op2', '2020-11-24', 'Pruebas 3', '2020-12-01', 'Pruebas 3'),
	(8, 'Prueba Insercion Tar', 'sara', 989653742, 'sara@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-04', 'Prueba Insercion', '2020-12-16', ''),
	(9, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(10, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(11, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(12, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(13, 'Insercion Multiple', 'contacto25', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Realizada', 'op1', '2020-12-07', 'Insercion Multiple', '2020-12-01', 'Edicion'),
	(14, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(15, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(16, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(17, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(18, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(19, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(20, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(21, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(22, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(23, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(24, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(25, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(26, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(27, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(28, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(29, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(30, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(31, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(32, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(33, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(34, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(35, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(36, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(37, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(38, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(39, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(40, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(41, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(42, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(43, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(44, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(45, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(46, 'Insercion Multiple', 'contacto', 963258741, 'correo@gmail.com', 'Huelva', 21005, 'Huelva', 'Pendiente', 'op3', '2020-12-07', 'Insercion Multiple', '2020-12-01', ''),
	(47, 'prueba_nueva', 'adsd', 123456789, 'prueba@gmail.com', 'Huelva', 21005, 'Huelva', 'Cancelada', 'op2', '2023-01-17', 'Prueba 2023', '2023-01-19', 'Modificaciones');

-- Volcando estructura para tabla proyecto_php.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `passw` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla proyecto_php.usuarios: ~12 rows (aproximadamente)
REPLACE INTO `usuarios` (`id`, `user`, `passw`, `admin`) VALUES
	(1, 'daniel', 'admin', 0),
	(2, 'admin2', '12345678', 0),
	(3, 'op1', '12345678', 1),
	(4, 'op2', '12345678', 1),
	(5, 'op3', '12345678', 1),
	(8, 'admin3', '123456', 0),
	(9, 'op4', '123456', 1),
	(10, 'op5', '123456', 1),
	(11, 'op6', '123456', 1),
	(12, 'admin4', '123456', 0),
	(13, 'admin5', '123456', 0),
	(14, 'op7', '123456', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
