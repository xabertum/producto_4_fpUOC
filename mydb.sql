-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-05-2018 a las 21:04:12
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id_noticia_keyword` int(11) NOT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `noticias_id_noticia` int(11) NOT NULL,
  `noticias_seccion_id_seccion` int(11) NOT NULL,
  PRIMARY KEY (`id_noticia_keyword`),
  KEY `fk_keywords_noticias1_idx` (`noticias_id_noticia`,`noticias_seccion_id_seccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `editor` varchar(45) DEFAULT NULL,
  `id_seccion` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `subtitulo` varchar(45) DEFAULT NULL,
  `texto` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `fecha_modificacion` varchar(45) DEFAULT NULL,
  `fecha_publicación` varchar(45) DEFAULT NULL,
  `seccion_id_seccion` int(11) NOT NULL,
  `seccion_id_seccion1` int(11) NOT NULL,
  `USUARIOS_username` int(11) NOT NULL,
  `USUARIOS_tipousuario_id_tipousuario` int(11) NOT NULL,
  PRIMARY KEY (`id_noticia`,`seccion_id_seccion`),
  KEY `fk_noticias_seccion1_idx` (`seccion_id_seccion1`),
  KEY `fk_noticias_USUARIOS1_idx` (`USUARIOS_username`,`USUARIOS_tipousuario_id_tipousuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `id_seccion` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id_tipousuario` int(11) NOT NULL,
  `tipo_usuariocol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipousuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `username` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `id_tipousuario` varchar(45) DEFAULT NULL,
  `tipousuario_id_tipousuario` int(11) NOT NULL,
  `tipousuario_id_tipousuario1` int(11) NOT NULL,
  PRIMARY KEY (`username`,`tipousuario_id_tipousuario`),
  KEY `fk_USUARIOS_tipousuario1_idx` (`tipousuario_id_tipousuario1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='				';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `keywords`
--
ALTER TABLE `keywords`
  ADD CONSTRAINT `fk_keywords_noticias1` FOREIGN KEY (`noticias_id_noticia`, `noticias_seccion_id_seccion`) REFERENCES `noticias` (`id_noticia`, `seccion_id_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_noticias_seccion1` FOREIGN KEY (`seccion_id_seccion1`) REFERENCES `seccion` (`id_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_noticias_USUARIOS1` FOREIGN KEY (`USUARIOS_username`, `USUARIOS_tipousuario_id_tipousuario`) REFERENCES `usuarios` (`username`, `tipousuario_id_tipousuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_USUARIOS_tipousuario1` FOREIGN KEY (`tipousuario_id_tipousuario1`) REFERENCES `tipousuario` (`id_tipousuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
