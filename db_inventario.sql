-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.17-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para inventario
CREATE DATABASE IF NOT EXISTS `inventario` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `inventario`;

-- Volcando estructura para tabla inventario.bitacora_log
CREATE TABLE IF NOT EXISTS `bitacora_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_usuario_bitacora` (`usuario_id`),
  CONSTRAINT `fk_usuario_bitacora` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='registro de inicio de sesion ';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.cat_estatus
CREATE TABLE IF NOT EXISTS `cat_estatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='catalogo de estatus ';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.cat_perfil
CREATE TABLE IF NOT EXISTS `cat_perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='catalogo de tipos de usuarios';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.cat_producto
CREATE TABLE IF NOT EXISTS `cat_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='categorias de productos ';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.cat_sucursal
CREATE TABLE IF NOT EXISTS `cat_sucursal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sucursal` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='se registran las sucursales';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `sucursal_id` int(11) NOT NULL,
  `precio` int(5) NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `estatus_id` int(11) NOT NULL DEFAULT 1,
  `comentarios` varchar(100) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_moficacion` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria` (`categoria_id`),
  KEY `fk_sucursal` (`sucursal_id`),
  KEY `fk_estatus` (`estatus_id`),
  KEY `fk_usuario_productos` (`usuario_id`),
  CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `cat_producto` (`id`),
  CONSTRAINT `fk_estatus` FOREIGN KEY (`estatus_id`) REFERENCES `cat_estatus` (`id`),
  CONSTRAINT `fk_sucursal` FOREIGN KEY (`sucursal_id`) REFERENCES `cat_sucursal` (`id`),
  CONSTRAINT `fk_usuario_productos` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='registro de productos';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `acceso` int(11) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `password` varchar(15) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `fk_perfil` (`perfil_id`) USING BTREE,
  CONSTRAINT `fk_perfil` FOREIGN KEY (`perfil_id`) REFERENCES `cat_perfil` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Usuarios registrados en el sistema ';

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
