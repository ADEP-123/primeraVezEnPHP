<?php

/**
 * ? Estructuras de control
 * * se tuilizan para controlar el flujo de ejecucion de un programa
 * ? 1. Condicionales 
 * ? 1.1. IF: permite tomar decisiones en función de si se cumple o no una determinada condición.
 */
$numero = 10;

// Verifica si el número es mayor que cero
if ($numero > 0) {
    echo "El número es mayor que cero.";
} else {
    echo "El número no es mayor que cero.";
}

echo "<br>";

// Verifica si el número es par
if ($numero % 2 == 0) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}
/**
 * ? 1.1.2 IF anidado
 */
$edad = 25;
$genero = 'femenino';

if ($edad >= 18) {
    // Si la edad es mayor o igual a 18, se ejecuta este bloque de código
    echo "Eres mayor de edad.";

    if ($genero == 'masculino') {
        // Si el género es masculino, se ejecuta este bloque de código
        echo " Eres un hombre mayor de edad.";
    } elseif ($genero == 'femenino') {
        // Si el género es femenino, se ejecuta este bloque de código
        echo " Eres una mujer mayor de edad.";
    } else {
        // Si no se especifica el género, se ejecuta este bloque de código
        echo " Eres mayor de edad, pero no se ha especificado tu género.";
    }
} else {
    // Si la edad es menor a 18, se ejecuta este bloque de código
    echo "Eres menor de edad.";
}

/**
 * ? 1.2. Switch ermite ejecutar diferentes bloques de código dependiendo del valor de una variable.
 */
$opcion = 2;

// Selecciona el caso dependiendo del valor de $opcion
switch ($opcion) {
    case 1:
        // Si $opcion es 1, se ejecutará este bloque de código
        echo "Opción 1 seleccionada.";
        break;
    case 2:
        // Si $opcion es 2, se ejecutará este bloque de código
        echo "Opción 2 seleccionada.";
        break;
    case 3:
        // Si $opcion es 3, se ejecutará este bloque de código
        echo "Opción 3 seleccionada.";
        break;
    default:
        // Si $opcion no coincide con ninguno de los casos anteriores, se ejecutará este bloque de código
        echo "Opción no válida.";
        break;
}
/**
 * ? 2. Estructuras repetitivas: permiten repetir la ejecución de un bloque de código varias veces
 * ? 2.1. While 
 */
$contador = 1;

// Mientras el contador sea menor o igual a 5, se ejecuta el bucle
while ($contador <= 5) {
    // Imprime el valor actual del contador
    echo "El valor del contador es: " . $contador . "<br>";

    // Incrementa el contador en 1 para la próxima iteración
    $contador++;
}

/**
 * ? 2.2 do-while: similar al bucle while, pero garantiza que el bloque de código se ejecuta al menos una vez, independientemente de si se cumple o no la condición.
 */
$contador = 1;

// Este bucle siempre se ejecutará al menos una vez
do {
    // Imprime el valor actual del contador
    echo "El valor del contador es: " . $contador . "<br>";

    // Incrementa el contador en 1 para la próxima iteración
    $contador++;
} while ($contador <= 5);

/**
 * ? 2.3 for: permite repetir la ejecución de un bloque de código un número fijo de veces,.
 */
// Itera 5 veces, comenzando desde 1 y aumentando en 1 en cada iteración
for ($i = 1; $i <= 5; $i++) {
    // Imprime el valor actual de la variable $i
    echo "El valor actual de i es: " . $i . "<br>";
}
/**
 * ? 2.4 For-each: se utiliza para iterar sobre elementos de un array o una colección de objetos 
 */
// Un array de nombres
$nombres = array("Juan", "María", "Pedro", "Ana");

// Itera sobre cada elemento del array
foreach ($nombres as $nombre) {
    // Imprime cada nombre
    echo "Nombre: " . $nombre . "<br>";
}
