<?php
/**
 * ? ISSET y EMPTY
 * @ISSET verifica si la variable existe y tiene valor
 * "EMPTY verifica si la variable esta vacia o no definida
 */
$nombre = 'John Doe';
if (isset($nombre)) {
    echo "La variable 'nombre' está definida y tiene un valor.";
} else {
    echo "La variable 'nombre' no está definida o no tiene un valor.";
}

echo "<br>";


$edad = null;
if (isset($edad)) {
    echo "La variable 'edad' está definida y tiene un valor.";
} else {
    echo "La variable 'edad' no está definida o no tiene un valor.";
}

echo "<br>";

$email = '';
if (empty($email)) {
    echo "La variable 'email' está vacía o no definida.";
} else {
    echo "La variable 'email' no está vacía y tiene un valor.";
}
