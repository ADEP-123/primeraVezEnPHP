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
