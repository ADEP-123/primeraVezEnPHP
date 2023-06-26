<?php

/**
 * ? Functiones definidas por el usuario
 * * las funciones definidas por el usuario son bloques de código que se pueden llamar y ejecutar en cualquier parte de un programa para realizar una tarea específica
 * ? 1. Funciones que no retornan valor(VOID)
 * * En PHP, se puede definir una función de void utilizando la palabra clave void en lugar de especificar un tipo de retorno
 */
// Definición de la función void
function calcularPromedio($numeros) {
    // Calcula el promedio de los números en el array
    $suma = array_sum($numeros);
    $cantidad = count($numeros);
    $promedio = $suma / $cantidad;

    // Imprime el promedio
    echo "El promedio de los números es: " . $promedio;
}

// Array de números
$nums = array(7, 5, 9, 12, 3);

// Llamada a la función
calcularPromedio($nums);
