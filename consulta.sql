
-- Práctica SQL
-- 4.1
DROP DATABASE IF EXISTS perfiltic;

CREATE DATABASE perfiltic;
USE perfiltic;

CREATE TABLE `propietario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;

INSERT INTO `propietario` VALUES (1,'Juan','Calle 123'),
(2,'Ramón','Carrera 1');

CREATE TABLE `vehiculo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `propietarioid` int(10) unsigned DEFAULT NULL,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY(propietarioid) REFERENCES propietario(id)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;

INSERT INTO `vehiculo` VALUES (1, 1,'Azul'),
(2,2,'Verde'),
(3,1,'Rojo');

SELECT p.*,  v.*
FROM propietario p, vehiculo v
WHERE p.id = v.propietarioid;