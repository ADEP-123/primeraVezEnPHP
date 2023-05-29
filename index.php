<?php
/**
 **Variables y constantes
 **se usa el simbolo $ seguido del nombre
 ** la declaracion estricta asigna el tipo de variable en parentesis despues de el igual y despues de estos el valor de la variable 
 */

/* numerica */
$edad = 25;

/* Declarar una variable de texto */
$nombre = 'Juan';

/* Declarar una variable booleana */
$es_valido = true;
echo var_dump($nombre);
/* vardump devuelve el tipo de variable y su magnitud */

/**
 ** Declarar una constante numercia 
 ** Para declarar una constante se utiliza el define, entre parentesis va el nombre de la variable seguido por coma y el valor
 */

 /* numerica */
 define('PI', 3.14159264);

 /* texto */
 define('SALUDO', 'Hola mundo');

 /* Declarar una constante booleana */
 define('ES_VALIDO', true);
?>