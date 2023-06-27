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

    /**
     * ? 1.7 Polimorfismo
     * * Capacidad de un objeto de tomar diferentes formas o comportarse de diferentes maneras según el contexto.
     */
    // Método personalizado para el estudiante
    public function estudiar()
    {
        echo "Estoy estudiando para mis exámenes.";
    }

    /**
     * ? 1.6 Metodos estaticos
     * * Método que pertenece a la clase en sí y no a una instancia específica de la clase. A diferencia de los métodos de instancia, los métodos estáticos se pueden llamar directamente en la clase sin necesidad de crear un objeto o instancia de la misma
     */
    public static function graduarse()
    {
        echo "El estudiante se ha graduado";
    }
}

// Crear una instancia de la clase Estudiante
$estudiante = new Estudiante("Juan", 18, "12vo grado");

// Acceder a las propiedades y métodos de la instancia Estudiante
echo "Nombre: " . $estudiante->getNombre() . "<br>";
echo "Edad: " . $estudiante->getEdad() . "<br>";
echo "Grado: " . $estudiante->getGrado() . "<br>";
$estudiante->saludar();

//Llamar al metodo estatico
Estudiante::graduarse();

/**
 * ? 1.7 Clases abstractas
 * * Una clase abstracta es una clase que no se puede instanciar directamente, sino que sirve como una plantilla o base para otras clases
 */
// Definición de la clase abstracta Animal
abstract class Animal
{
    // Propiedad protegida
    protected $nombre;

    // Constructor
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    // Método abstracto que debe ser implementado por las clases hijas
    abstract public function hacerSonido();
}

// Definición de la clase Perro que hereda de Animal
class Perro extends Animal
{
    // Implementación del método abstracto hacerSonido()
    public function hacerSonido()
    {
        echo "El perro hace: ¡Guau guau!";
    }
}

// Crear una instancia de la clase Perro y llamar al método hacerSonido()
$perro = new Perro("Max");
$perro->hacerSonido();

/**
 * ? 1.8 Interfaces
 * * Es un contrato que especifica qué métodos debe proporcionar una clase sin especificar cómo se implementan esos métodos
 */
// Definición de la interfaz Vehiculo
interface Vehiculo
{
    // Método para obtener el tipo de vehículo
    public function getTipoVehiculo();

    // Método para obtener la velocidad máxima del vehículo
    public function getVelocidadMaxima();
}

// Definición de la clase Automovil que implementa la interfaz Vehiculo
class Automovil implements Vehiculo
{
    // Propiedades
    private $tipo;
    private $velocidadMaxima;

    // Constructor
    public function __construct($tipo, $velocidadMaxima)
    {
        $this->tipo = $tipo;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    // Implementación del método getTipoVehiculo() de la interfaz Vehiculo
    public function getTipoVehiculo()
    {
        return $this->tipo;
    }

    // Implementación del método getVelocidadMaxima() de la interfaz Vehiculo
    public function getVelocidadMaxima()
    {
        return $this->velocidadMaxima;
    }
}

// Crear una instancia de la clase Automovil y utilizar los métodos de la interfaz Vehiculo
$automovil = new Automovil("Sedán", 200);
echo "Tipo de vehículo: " . $automovil->getTipoVehiculo() . "<br>";
echo "Velocidad máxima: " . $automovil->getVelocidadMaxima();

/**
 * ? 1.9 Autoload
 * * Técnica que permite cargar automáticamente las clases cuando son necesarias, sin tener que incluir manualmente los archivos de clase en cada punto del código
 */
// Definición de la función autoload
spl_autoload_register(function ($className) {
    $filePath = __DIR__ . '/' . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
// Crear una instancia de la clase MiClase
// $miClase = new MiClase();

/**
 * ? 1.10 Namespaces
 * * Técnica que permite cargar automáticamente las clases cuando son necesarias, sin tener que incluir manualmente los archivos de clase en cada punto del código
 */
use MiApp\MiClase;
$miClase = new MiClase();
$miClase->saludar();