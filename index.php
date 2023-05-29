<?php
    /**
     * *Funciones de salida
     * *todo lo que se imprime va directamente a la pagina
     */

     /**
      * *echo fues la mas comun
      */
     echo 'Texto a imprimir </br>';

     /**
      ** print solo puede imprimir una cadena de texto a la vez 
      ** El marcador %s lo que hace es que ahi se va a colocar lo que siga en la siguiente coma dependiendo cuantos de estos marcadores haya
      */
    $texto = 'Mundo';
    printf('Hola %s', $texto);

    /* sprintf es similar a printf pero no imprime sino que asigna a una variable, es decir retorna */

    $texto = 'Mundo';
    $mensaje = sprintf('Hola %s', $texto);
    echo $mensaje;

    
?>