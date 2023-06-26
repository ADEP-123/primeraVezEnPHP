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

/**
 * ? 1.2 Objeto
 * * Instancia de una clase. Representa un individuo o entidad específica y tiene sus propias propiedades y comportamientos.
 */
// Crear una instancia de la clase Persona
$persona = new Persona("Juan", 30);

/**
 * ? 1.3 Atributos
 * * Propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase.
 */
// Acceder a los Atributos de la instancia
echo "Nombre: " . $persona->getNombre() . "<br>";
echo "Edad: " . $persona->getEdad() . "<br>";

/**
 * ? 1.4 Metodos
 * * Acciones o comportamientos que un objeto puede realizar. Representan las operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.
 */
// Acceder a los metodos de la instancia
$persona->saludar();
