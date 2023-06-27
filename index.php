<?php

/**
 * ? COMPOSER
 * * Administrador de dependencias para PHP que permite instalar librerías de terceros para facilitar el desarrollo con php
 * * Una vez que tienes Composer instalado, mediante el uso de la terminal puede configurar composer con el comando 'composer init'
 *
 * * Además de gestionar las dependencias, Composer también proporciona una forma fácil de cargar automáticamente las clases utilizando su autoloading. Cuando ejecutas 'composer install', Composer generará un archivo 'autoload.php' en la carpeta 'vendor' que puedes incluir en tu archivo principal para cargar automáticamente las clases del proyecto.
 *
 * * Para utilizar el autoload de Composer, simplemente incluye el archivo 'autoload.php' en tu archivo principal antes de utilizar las clases. El autoload de Composer se encargará de cargar automáticamente las clases según los estándares PSR-4 con la siguiente linea de codigo;
 * "require": {},
 * "autoload":{
 *  "psr-4":{
 *      "App\\":"./clases"
 *  }
 * }
 * * Posteriormente debe ejecutar el comando composer update
 * * Finalmente en el app debe requerir el autoload el cual se encuentra dentro de la carpeta vendor con el comando "require 'vendor/autoload.php;'
 */
