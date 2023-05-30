<?php
header("Content-Type: application/json");
echo <<<HTML
    Hola mundo </br> <a href="index.html" target="_blank">Volver</a> 
HTML;
//var_dump($_GET);
print_r($_POST);/* Se usa la palabra reservada del metodo por el cual se estan enviando los datos */
