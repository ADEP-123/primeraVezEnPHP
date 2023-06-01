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
    "Santiago" => array(
        "Edad" => 43,
        "Ciudad" => "Valencia",
        "Pais" => "España"
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

/**
 * Metodos de array
 * @var array flip Intercambia las claves con sus valores correspondientes en un array. 
 */
echo "Array flip de nombres
";
print_r(array_flip($nombres));

/**
 * @var array fill rellena un array con un valor especificado, se debe indicar el indice inicial a rellenar , cuantos a partir de este y con que se van a rellenar
 */
echo "Array fill rellena un array
";
$newArray = array_fill(0, 4, "a");
print_r($newArray);

/**
 * @var array filter filtra un array a partir de una funcion retornando el elemento y la posicion
 */
function multiplo3($var)
{
    if ($var % 3 === 0) {
        return $var;
    }
}
$arrayNum = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
echo "array_filter filtra un array a partir de una funcion y retorna el elemento y la posicion
";
print_r(array_filter($arrayNum, "multiplo3"));

/**
 * @var array map aplica una funcion a cada elemento del array y devuelve un nuevo array con los resultados, primero se debe indicar la funcion en comillas
 */
function doble($valor)
{
    return $valor * 2;
}
echo "array_map aplica una funcion a cada elemento del array y devuelve un nuevo array con los resultados
";
print_r(array_map("doble", $arrayNum));

/**
 * @var array reduce coge cada elemento del array y le aplica una funcion con los demas devolviendo el valor de la funcion al ejecutarse en todos, primero se debe indicar el array u luego la funcion en comillas
 */
function suma($sumador, $item)
{
    $sumador += $item;
    return $sumador;
}
echo "array_reduce coge cada elemento del array y le aplica una funcion con los demas devolviendo el valor de la funcion al ejecutarse en todos
";
print_r(array_reduce($arrayNum, "suma"));

/**
 * @var array key_exists  comprueba si una clave existe en un array, si existe devuelve 1 si no no devuelve nada
 */
echo "
array_key_exists comprueba si una clave existe en un array
";
print_r(array_key_exists("Pedro", $edades));

/**
 * @var array in_array  comprueba si un valor existe en un array, si existe devuelve 1 si no no devuelve nada
 */
echo "
in_array comprueba si un valor existe en un array
";
print_r(in_array(32, $edades));

/**
 * @var array array_rand Devuelve una o varias claves aleatorias de un array.
 */
echo "
array_rand Devuelve una o varias claves aleatorias de un array.
";
print_r(array_rand($edades, 2));


/**
 * @var array array_unique elimina los valores repetidos de un array
 */
$arrayRep = array(1, 1, 2, 2, 3, 4, 4, 5, 5, 6, 6, 7, 7, 7, 8, 8, 9);
echo "
array_unique elimina los valores repetidos de un array .
";
print_r(array_unique($arrayRep));

/**
 * @var array intersect devuelve los valores en comun entre los array
 */
echo "
array_intersect devuelve los valores en comun entre los array .
";
print_r(array_intersect(array_filter($arrayNum, "multiplo3"), $arrayRep));

/**
 * @var array diff devuelve los valores que no estan en los array adicionales respecto al primero
 */
echo "
array_diff devuelve los valores que no estan en los array adicionales respecto al primero.
";
print_r(array_diff($arrayNum, $arrayRep));

/**
 * @var array push agrega uno o mas valores al final de un array
 */
echo "
array_push agrega uno o mas valores al final de un array
";
array_push($arrayNum, 31, 32, 33);
print_r($arrayNum);

/**
 * @var array array_pop(): Extrae y elimina el último elemento de un array.
 */
echo "
array_pop(): Extrae y elimina el último elemento de un array.
";
array_pop($arrayNum);
print_r($arrayNum);
array_pop($arrayNum);
array_pop($arrayNum);

/**
 * @var array array_reverse(): Revierte el orden de los elementos en un array.
 */
echo "
array_reverse(): Revierte el orden de los elementos en un array.
";
print_r(array_reverse($arrayNum));

/**
 * @var array array_sum(): Devuelve la suma de todos los valores de un array numérico.
 */
echo "
array_sum(): Devuelve la suma de todos los valores de un array numérico.
";
print_r(array_sum($arrayNum));

/**
 * @var array array_product(): Devuelve el producto de todos los valores de un array numérico.
 */
echo "
array_product(): Devuelve el producto de todos los valores de un array numérico.
";
print_r(array_product($arrayNum));

/**
 * @var array array_chunk(): Divide un array en fragmentos más pequeños, primero se coloca el array, seguido de la magnitud de las particiones y finalmente se puede colocar "true" para que mantenga los indices de los objetos.
 */
echo "
array_chunk(): Divide un array en fragmentos más pequeños.
";
echo "
array_chunk(): con true
";
print_r(array_chunk($arrayNum, 10, true));
echo "
array_chunk(): sin true
";
print_r(array_chunk($arrayNum, 10));

/**
 * @var array array_keys(): Devuelve todas las claves de un array.
 */
echo "
array_keys(): Devuelve todas las claves de un array.
";
print_r(array_keys($edades));

/**
 * @var array array_values(): Devuelve todos los valores de un array.
 */
echo "
array_values(): Devuelve todos los valores de un array.
";
print_r(array_values($edades));

/**
 * @var array array_walk(): aplica una funcion a cada elemento del array, similar al foreach de js.
 */
echo "
array_walk(): aplica una funcion a cada elemento del array.
";
function triple($valor)
{
    echo "El triple es:" . 3 * $valor . "
    ";
}
print_r(array_walk($arrayNum, "triple"));
