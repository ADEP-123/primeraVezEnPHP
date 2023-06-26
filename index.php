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