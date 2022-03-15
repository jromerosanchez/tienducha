CREATE DATABASE IF NOT EXISTS iaw_db;
USE iaw_db;

DROP TABLE IF EXISTS productos;
CREATE TABLE productos (
codigo INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
descripcion varchar(20),
rebaja decimal(8),
estarebajas varchar(2),
precio varchar (5)
);

DROP TABLE IF EXISTS clientes;
CREATE TABLE clientes (
nombre  varchar(20),
pApellido varchar(20),
sApellido varchar(20),
DNI varchar (9)
);
