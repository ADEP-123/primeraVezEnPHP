<?php
header('Content-type: json');
/**
 * todo Array Indexado
 * *este tipo de array tiene indices numericos
 * @var array $nombres
 */
$nombres = array("Juan", "Pedro", "Santiago");
print_r($nombres);
echo "<hr>";
/**
 * todo Array asociativo
 * *en este tipo de array los valores son asociados con claves especificas 
 * @var array $edades
 */
$edades = array(
    "Juan" => 32,
    "Pedro" => 37,
    "Santiago" => 43
);
print_r($edades);
echo "<hr>";
/**
 * todo Array asociativo
 * *en este es un array que contiene uno o mas arrays en si
 * @var array $personas
 */
$personas = array(
    "Juan" => array(
        "Edad" => 35,
        "ciudad" => "Madrid",
        "Pais" => "España"
    ),
    "Pedro" => array(
        "Edad" => "37",
        "Ciudad" => "Barcelona",
        "Pais" => "España"
    ),
    "Santiago" =>array(
        "Edad"=>43,
        "Ciudad"=>"Valencia",
        "Pais"=>"España"
    )
);

print_r($personas);
/**
 * ? Ejemplo de como acceder al array de personas 
 */
print_r($personas['Pedro']['Pais']);
/**
 * ? Ejemplo de como agregar dato a un elemento del array Multidimensional
 */

echo "<hr>";
$personas['Pedro']['Altura'] = 1.63;
print_r($personas);
