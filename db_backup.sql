-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2014 a las 02:55:37
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE IF NOT EXISTS `tienda` (
  `idTienda` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUsua` int(10) unsigned NOT NULL,
  `nombre` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `descripcion` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idTienda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=169 ;

--
-- Volcar la base de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`idTienda`, `idUsua`, `nombre`, `descripcion`) VALUES
(168, 84, 'Garabatos', 'Jardín Maternal'),
(167, 86, 'Motoshop', 'Venta de repuesto de motos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsua` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `activation_code` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`idUsua`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=87 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsua`, `usuario`, `mail`, `clave`, `activation_code`, `status`) VALUES
(86, 'prueba', 'franco.garcia.so@gmail.com', 'c893bad68927b457dbed39460e6afd62', 'PH0kR9rzZH', 1),
(85, 'frankog_33', 'francog54@hotmail.com', '47c3b7d40598b96a4265eaa6f48ba013', '4cdvbq3jaT', 1),
(84, 'francog54', 'frankog_33@hotmail.com', '47c3b7d40598b96a4265eaa6f48ba013', 'YjxprIBAaL', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
