-- 2020-06-06 01:45:44

CREATE DATABASE `services_web` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `services_web`;

CREATE TABLE `aliados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `informacion` text COLLATE utf8_spanish_ci,
  `fotos` text COLLATE utf8_spanish_ci,
  `parametros` text COLLATE utf8_spanish_ci,
  `estado` int(1) NOT NULL DEFAULT '1',
  `creacion` datetime NOT NULL,
  `actualizado` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `aliados_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Información de Aliados de Clientes';

INSERT INTO `aliados` (`id`, `id_cliente`, `nombre`, `informacion`, `fotos`, `parametros`, `estado`, `creacion`, `actualizado`) VALUES
(1,	1,	'Panaderia Comapan',	'Av Calle Falsa # 15-53\r\nTeléfono:',	NULL,	NULL,	1,	'2020-06-05 20:28:39',	'2020-06-05 20:28:39'),
(2,	1,	'Panaderia Copito',	'Av cra 89 # 14 - 45\r\nTélefono: 4567809',	NULL,	NULL,	1,	'2020-06-05 20:40:53',	'2020-06-05 20:40:53');

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `whatsapp` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dominio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `parametros` text COLLATE utf8_spanish_ci,
  `estado` int(11) NOT NULL DEFAULT '1',
  `creacion` datetime NOT NULL,
  `actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de Clientes';

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `whatsapp`, `facebook`, `dominio`, `parametros`, `estado`, `creacion`, `actualizacion`) VALUES
(1,	'tamatoly',	'av calle falsa 123',	'3188918282',	'3188918282',	'cristian.c.bernal1',	'127.0.0.1:8000',	NULL,	1,	'2020-06-04 22:57:20',	'2020-06-04 22:57:20');

CREATE TABLE `parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de parametros de aplicacion';


CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text,
  `precio` decimal(30,0) NOT NULL,  
  `fotos` text NOT NULL,  
  `in_home` int(11) DEFAULT NULL,
  `in_promo` int(2) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,  
  `estado` int(11) NOT NULL DEFAULT '1',
  `creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `id_cliente` (`id_cliente`),  
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de productos de clientes';
