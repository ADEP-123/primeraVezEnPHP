<?php

/**
 * ? POO
 * * Paradigma de programación que se basa en el concepto de "objetos". Los objetos son entidades que representan conceptos del mundo real y que pueden tener propiedades (atributos) y realizar acciones (métodos).
 * ? 1. Conceptos basicos
 * ? 1.1 Clase
 * * plantilla o definición que describe las características y comportamientos de los objetos que se pueden crear a partir de ella
 */
// Definición de la clase Persona
class Persona
{
    // Propiedades
    private $nombre;
    private $edad;

    // Constructor
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método getter para obtener el nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    // Método setter para establecer el nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Método getter para obtener la edad
    public function getEdad()
    {
        return $this->edad;
    }

    // Método setter para establecer la edad
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    // Método personalizado
    public function saludar()
    {
        echo "¡Hola, soy " . $this->nombre . "!";
    }
}
