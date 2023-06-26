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

/**
 * ? 1.5 Encapsuladmiento
 * * Principio que establece que los atributos y métodos relacionados deben agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública.
 */
// la clase Persona tiene dos propiedades privadas: $nombre y $edad. Esto significa que estas propiedades solo pueden ser accedidas o modificadas desde dentro de la propia clase.

/**
 * ? 1.6 Herencia
 * * Mecanismo que permite crear nuevas clases basadas en clases existentes. La clase que se utiliza como base se denomina "clase padre" o "superclase", y la clase que se deriva se llama "clase hija" o "subclase" se hace uso de la palabra reservada extends.
 */
class Estudiante extends Persona
{
    // Propiedades adicionales
    private $grado;

    // Constructor del Estudiante
    public function __construct($nombre, $edad, $grado)
    {
        // Llama al constructor de la clase padre (Persona)
        parent::__construct($nombre, $edad);
        $this->grado = $grado;
    }

    // Método getter para obtener el grado
    public function getGrado()
    {
        return $this->grado;
    }

    // Método setter para establecer el grado
    public function setGrado($grado)
    {
        $this->grado = $grado;
    }
}

// Crear una instancia de la clase Estudiante
$estudiante = new Estudiante("Juan", 18, "12vo grado");

// Acceder a las propiedades y métodos de la instancia Estudiante
echo "Nombre: " . $estudiante->getNombre() . "<br>";
echo "Edad: " . $estudiante->getEdad() . "<br>";
echo "Grado: " . $estudiante->getGrado() . "<br>";
$estudiante->saludar();
