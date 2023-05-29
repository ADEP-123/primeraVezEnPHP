<?php
/**
 **Numeros y operadores
 */

/* Aritmeticos */
$Inicial = 0;
printf('El valor inicial es: %s </br>', $Inicial);

$Inicial += 1;
printf('El valor inicial mas uno es: %s </br>', $Inicial);

$Inicial -= 2;
printf('El valor inicial menos dos es: %s </br>', $Inicial);

$Inicial *= 3;
printf('El valor inicial por 3 es: %s </br>', $Inicial);

$Inicial /= 3;
printf('El valor inicial dividido entre 3 es: %s </br>', $Inicial);

$modulo = 5 % 2;
printf('El modulo se expresa con el % como ej: %s', $modulo);

$Inicial **= 2;
printf('El valor inicial exponente dos es: %s', $Inicial);

/**
 ** operadores logicos
 ** && y
 ** || o
 ** ! No
 ** and and
 **xor xor
 ** or or
 */

/* Operadores logicos */
$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = '30';

/* Mayor que */
echo '<br/>';
var_dump($numero1 > $numero2);
echo '<br/>';

/* Menor que */
var_dump($numero1 < $numero2);
echo '<br/>';

/* Mayor o igual que */
var_dump($numero1 >= $numero2);
echo '<br/>';

/* Menor o igual que */
var_dump($numero1 <= $numero2);
echo '<br/>';

/* Igual */
var_dump($numero2 == $numero3);
echo '<br/>';

/* Exactamente igual */
var_dump($numero2 === $numero4);
echo '<br/>';

/*
 -1 si izquierda es menor 
 0 si es igual
 1 si izquierda es mayor
 */

var_dump($numero1 <=> $numero2);
echo '<br/>';

var_dump($numero2 <=> $numero3);
echo '<br/>';

var_dump($numero2 <=> $numero1);
echo '<br/>';

$nombreCliente = 'Campers Campuslands';

/* Conocer extension de un string */
echo strlen($nombreCliente);
var_dump($nombreCliente);

/* Eliminar espacios en blanco */
$texto = trim($nombreCliente);
echo strlen($texto);

/*Convertirlo a mayusculas*/
echo strtoupper($nombreCliente);

/*Convertirlo a minusculas*/
echo strtolower($nombreCliente);

$mail1 = 'correo@correo.com';
$mail2 = 'correo@correo.com';

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan', 'J' , $nombreCliente);

/* Revisar si un string existe o no */
echo strpos($nombreCliente, 'Pedro');

$tipoCliente = 'Premium - Empresarial';

echo "<br/>";

echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;

echo "El cliente {$nombreCliente} es ${tipoCliente}";

    ?>