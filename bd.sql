CREATE DATABASE IF NOT EXISTS CRUDVentas;
USE CRUDVentas;

Create table producto
(
    Codigo char(8) not null Primary Key,
    Nombre varchar(100) not null,
    Marca  varchar(100) not null,
    Presentacion  varchar(100) not null,
		Stock_Disponible int,
    Precio float not null
);

insert into producto values
("P0001", "Arroz","Rompe Olla", "Paquete", 1500, 3.5),
("P0002", "Azucar","Del Valle", "Paquete", 1200, 2.8),
("P0003", "Leche Evaporada","Gloria", "Lata", 1300, 3.4),
("P0004", "Lentejas","Flor del Campo", "Paquete", 1800, 7.1),
("P0005", "Huevo","La Calera", "Paquete", 2000, 5.3);


CREATE TABLE IF NOT EXISTS usuario (
  Codigo int auto_increment Primary Key,
  correo varchar(60) NOT NULL UNIQUE,
  clave VARCHAR(60) NOT NULL 
);

insert into usuario values
("ialiaga@hotmail.com", "1234"),
("jcarlos@hotmail.com", "1234"),
("ftacca@hotmail.com", "1234");

select * from producto;
select * from usuario;
