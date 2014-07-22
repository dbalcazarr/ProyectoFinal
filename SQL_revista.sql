-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2014 a las 01:02:24
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `revista`
--
CREATE DATABASE IF NOT EXISTS `revista` DEFAULT CHARACTER SET utf8 COLLATE utf8_slovenian_ci;
USE `revista`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `resumen` longtext,
  `abstract` longtext,
  `introduccion` longtext,
  `metodologia` longtext,
  `contenido` longtext,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archivo_pdf` varchar(100) DEFAULT NULL,
  `id_status` int(11) NOT NULL,
  `conclusiones` longtext,
  `agradecimientos` text,
  `referencias` text,
  PRIMARY KEY (`id_articulo`),
  KEY `fk_status_articulo_idx` (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nombre`, `resumen`, `abstract`, `introduccion`, `metodologia`, `contenido`, `fecha_creacion`, `archivo_pdf`, `id_status`, `conclusiones`, `agradecimientos`, `referencias`) VALUES
(1, 'Moda', 'La moda es algo de hoy en todos los días es muy importante en la personalidad de toda la gente, asi que tenemos para ti los mejores tips de moda que pueden hacerte lucir deslumbrante y mas atrativ@.', 'Todo la información de moda se obtuvo de personas famosas y profesionales que son altamente reconocidos', 'moda su significado más amplio es una elección o, mejor dicho, un mecanismo regulador de elecciones, realizadas en función de criterios subjetivos asociados al gusto colectivo.', 'Se empleo varios prueba de como es que al publico le llama mas la atencion respecto a su forma de verse, que es lo quen mas le gusta reasltar, y para toto tipo de personas, ya que cada quien a su manera quiere verse mejor, siemore y cuando su moda este dentro de la aceptacion.', 'Tips de como maquillarse\r\nTips para vestir atuendo\r\nTips para combinar prendas\r\nQue es lo de hoy\r\nComo podrias ucir como un elgante actir de cine', '2014-07-17 15:17:45', NULL, 2, 'La moda como tal es todo lo que nos rodea y que llamamos de alguna forma “Globalización”, estamos rodeados de moda, ya sea únicamente hablando de ropa o todo lo que implica desde costumbres hasta actitudes.', 'Se agrace a las personas que aportaron informacion vital para la tendencia de la mosa asi como las recomendacion de profesionales en el campo', 'modate@hotmail.com\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_autor`
--

CREATE TABLE IF NOT EXISTS `articulo_autor` (
  `id_articulo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  PRIMARY KEY (`id_articulo_autor`),
  KEY `fk_articulo_idx` (`id_autor`),
  KEY `fk_autor__idx` (`id_articulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `articulo_autor`
--

INSERT INTO `articulo_autor` (`id_articulo_autor`, `id_articulo`, `id_autor`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre`, `apellidos`, `email`) VALUES
(1, 'Juan ', 'Vega Nuñez', 'vega@live.com'),
(2, 'Sergio', 'Ramos Beltran', 'rbeltran@live.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indice`
--

CREATE TABLE IF NOT EXISTS `indice` (
  `id_indice` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_revista` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_indice`),
  KEY `fk_revista_idx` (`id_revista`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `indice`
--

INSERT INTO `indice` (`id_indice`, `titulo`, `numero`, `id_revista`) VALUES
(1, 'Fashion', 2, 2),
(2, 'Moda', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indice_articulo`
--

CREATE TABLE IF NOT EXISTS `indice_articulo` (
  `id_indice_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `id_indice` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `numero` float NOT NULL,
  PRIMARY KEY (`id_indice_articulo`),
  KEY `fk_indice_idx` (`id_indice`),
  KEY `fk_articulo_idx` (`id_articulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `indice_articulo`
--

INSERT INTO `indice_articulo` (`id_indice_articulo`, `id_indice`, `id_articulo`, `numero`) VALUES
(1, 1, 1, 21),
(2, 2, 1, 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE IF NOT EXISTS `revista` (
  `id_revista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `portada` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `volumen` varchar(45) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `subtitulo` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `directorio` longtext,
  `editorial` longtext,
  `id_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_revista`),
  KEY `fk_status_revista_idx` (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `revista`
--

INSERT INTO `revista` (`id_revista`, `nombre`, `portada`, `fecha`, `volumen`, `titulo`, `subtitulo`, `numero`, `clave`, `directorio`, `editorial`, `id_status`) VALUES
(1, 'Seeventeen', '', '2014-07-23', '103', '125 ideas de belleza fashion', 'Obten un perfecto maquillaje', 23, 'asdf25', 'DIrector:\r\nCarmen Camacho Sanchez\r\nSubdirecor:\r\nAbisau Lopez Vera\r\nColabiradores:\r\nJuan Cornejo Perez\r\nNayeli Chavez Perea\r\nEditores:\r\nFrancisco Huerta Mora\r\nEvelin Samano Rojas\r\nLaura Figueroa Avila\r\n\r\n', 'Televisa S.A. de C.V.\r\nTodos los derechos reservados.', 1),
(2, 'Vogue', '', '2014-07-11', '54', '50 classic looks for spring', 'All stars America', 21, 'zxcc789', 'DIrector:\r\nWillian Turner\r\nSubdirecor:\r\nMichelle Parker\r\nColabiradores:\r\nJohn Bruce\r\nEditores:\r\nFrancisco Huerta Mora\r\nMiranda Leyva', 'CONDÉ NAST DE MÉXICO S.A. DE C.V. TODOS LOS DERECHOS RESERVADOS', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Publicada'),
(2, 'Revisada'),
(3, 'Aceptada'),
(4, 'Rechazada'),
(5, 'En espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `rol` varchar(25) COLLATE utf8_slovenian_ci DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`, `rol`) VALUES
(1, 'lara@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'ale@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(3, 'angel@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'cliente'),
(4, 'david@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'cliente'),
(5, 'rodro@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'gerente'),
(6, 'grimi@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'supervisor');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `fk_status_articulo` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `articulo_autor`
--
ALTER TABLE `articulo_autor`
  ADD CONSTRAINT `fk_articulo_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_autor_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `indice`
--
ALTER TABLE `indice`
  ADD CONSTRAINT `fk_revista` FOREIGN KEY (`id_revista`) REFERENCES `revista` (`id_revista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `indice_articulo`
--
ALTER TABLE `indice_articulo`
  ADD CONSTRAINT `fk_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_indice` FOREIGN KEY (`id_indice`) REFERENCES `indice` (`id_indice`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `revista`
--
ALTER TABLE `revista`
  ADD CONSTRAINT `fk_status_revista` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
