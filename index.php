<?php

/**
 * ? Json_encode y json_decode
 * * Son funciones que se utilizan para incluir archivos externos en un programa.
 * ? 1. json_encode()
 * * Se utiliza para convertir una estructura de datos en PHP en una cadena JSON.
 */
// Array
$datos = array(
    'nombre' => 'Juan',
    'edad' => 30,
    'hobbies' => array('fútbol', 'tenis', 'guitarra'),
    'direccion' => array(
        'calle' => 'Avenida Principal',
        'numero' => 123,
        'ciudad' => 'Ciudad de Ejemplo'
    )
);

// Convierte el array en formato JSON
$json = json_encode($datos);

// Imprime el resultado
echo $json;

/**
 * ? 2. json_decode()
 * * Se utiliza para convertir una cadena JSON en una estructura de datos de PHP.
 */
// $json = json_decode($json);
// var_dump($json);

/**
 * ? 2.1 json_decode(,true)
 * * En caso de que se desee manipular el objeto de tipo PHP como un arreglo asociativo se puede agregar un segundo argumento en la función json-decode La cual es un valor booleano; en caso de que se le pase un valor true la función retornará un arreglo de tipo asociativo
 */
$json = json_decode($json, true);
var_dump($json);
