CREATE DATABASE USUARIOS;

USE USUARIOS;

CREATE TABLE REGISTRO
            (
            Correo varchar(50) not null, 
            Contraseña varchar(9) not null, 
            Nombre varchar(50) not null, 
            Nacimiento date not null);


ALTER TABLE REGISTRO
    ADD CONSTRAINT pk_USER PRIMARY KEY REGISTRO(Correo);

        
