<?php

/**
 * ? PHP Y MSQL
 * ? Tipos de datos en MSYQL
 * ? -Tipos de enteros
 * * TINYINT: ocupa 1 byte pero tiene un valor maximo de mas o menos 128
 * * BIT (BOOL, BOOLEAN): Numero entero con valor de 0 o 1
 * * SMALLINT: ocupa 2 bytes y puede ir hasta mas o menos 32768
 * * MEDIUMINT: ocupa 3 bytes puede ir hasta mas o menos 8388608
 * * INT: ocupa 4 bytes puede ir hasta mas o menos 2147483648
 * * BIGINT: ocupa 8 bytes y puede ir hasta mas o menos 9223372036854775808
 * ? Tipos de datos en coma flotante
 * * FLOAT(m,d): contiene un numeroi en coma flotante de precision sencilla, el valor m es la anchira y d es el numero de decimales
 * * DOUBLE(m,d): Contiene un numero en coma flotante de precision doble. Igual que FLOAT la diferencia es el rango de valores posibles
 * * DECIMAL(m,[d]): Se usan para guardar valores para los que es importante preservar una preciison exacta, por ejemplo con datos monetarios. Si se omite d el valor por defecto es 0, los valores no tendran punto decimal ni decimales.
 * ? Tipos de datos caracter
 * * CHAR(M) Los valores validos para m son de . a 255, contiene una cadena de longitud constante para mantener la longitud d ela cadena, se rellena a la derecha con espacios. Estos espacios se eliminan al recuperar el valor
 * * VARCHAR(M) Los valores validos para M son de 0 a 255 caracteres, contiene una cadena de longitud variable. Los espacios al final se seliminan
 * * BLOB: Una longitud maxima de 65535 caracteres valido para objetos binarios como imagenes, ficheros de texto, audio o video
 * * TEXT: Una longitud maxima de 65535 caracteres sirve para almacenar texto plano sin formato
 * * TINYBLOB Y TINYTEXT Longitud maxima de 255 caracteres
 * * MEDIUMBLOB Y MEDIUMTEXT Longitud maxima de 16777215 caracteres
 * * LONGBLOB Y LONGTEXT Longitud maxima de 4294967298 caracteres
 * ? Tipos de dato Fecha
 * * DATE: valido para almacenar una fecha con año mes y dia su rango oscila entre "1000-01-01" y "9999-12-31" Formato(AAAA-MM-DD)
 * * DATETIME: Almacena una fecha y una hora su rango oscila entre "1000-01-01 00:00:00" y "9999-12-31 23:59:59" Formato(AAAA-MM-DD HH:MM:SS)
 * * TIME: Almacena una hora el rango esta entre "-838:59:59" y "838:59:59" Formato(HH:MM:SS)
 * * TIMESTAMP Almacena una fecha y hora UTC rango entre "1970:01:01 00:00:00" y algun momento del año 2037 Formato(AAAA-MM_DD HH:MM:SS)
 */
