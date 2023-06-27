<?php

/**
 * ? COMANDOS DDL
 * * Data Definition Language: se utilizan para definir, modificar y eliminar la estructura de la base de datos
 * ? BASES DE DATOS
 * * SHOW DATABASES; Muestra todas las bases de datos disponibles
 * * CREATE DATABASE nombre; Crea una nueva base de datos llamada nombre
 * * DROP DATABASE nombre; Elimina la base de datos llamada nombre
 * * USE nombre; Empieza a usar la base de datos nombre
 * ? TABLAS
 * * CREATE TABLE name (columna1 tipodedato, columna2 tipodedato, ...,columnaN tipodedato); crea una tabla llamada name con las columnas especificadas
 * * SHOW TABLES; muestra una lista con las tablas organizadas
 * * DESCRIBE nombre; Muesta la informacion de la tabla llamada nombre
 * ? -ALTER TABLE
 * * ALTER TABLE nombre ADD columnaB tipodedato; Altera la tabla llamada nombre agregandole una nueva columna llamada columnab 
 * * ALTER TABLE nombre DROP COLUMN columnaB; Altera la tabla llamada nombre quitandole la columna llamada columnab
 * * ALTER TABLE nombre RENAME COLUMN columnaB to columnac; Altera la tabla llamada nombre cambiando el titulo de la columna llamada columnab por columnac
 * * ALTER TABLE nombre MODIFY COLUMN columnaB tipodedato; Altera la tabla llamada nombre cambiando el tipo de dato de la columnaB
 * ? CONSTRAINTS
 * * ALTER TABLE nombre ADD CONSTRAINT Pk_nombre PRIMARY KEY (columnaB); Altera la tabla llamada nombre agregando la caracteristica de primarykey a la columnaB
 * * ALTER TABLE nombreA ADD CONSTRAINT fk_nombreAnombreB FOREIGN KEY (columnaBenA) REFERENCES nombreB(columnaB); Altera la tabla llamada nombre agregando la caracteristica de llave foranea a la columna de la tabla b en a
 */
