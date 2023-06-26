<?php

/**
 * ? include, require, include_once, require_once
 * * Son funciones que se utilizan para incluir archivos externos en un programa.
 * ? 1. include e include_once
 * * Permiten incluir un archivo PHP en el programa. La diferencia entre ellas es que include puede incluir el mismo archivo varias veces mientras que include_once asegura que el archivo solo se incluya una vez en el programa.
 */
// Incluye el archivo "funciones.php" una sola vez
include_once 'funciones.php';

// Llama a la función saludar()
saludar();

// Accede a la variable $nombre definida en "funciones.php"
echo "El nombre es: " . $nombre;

// Crea una instancia de la clase MiClase definida en "funciones.php"
$objeto = new MiClase();