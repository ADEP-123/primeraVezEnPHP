<?php

/**
 * ? PDO
 * * interfaz de abstracción de bases de datos en PHP. Proporciona un conjunto de clases y métodos para preparar y ejecutar consultas SQL de una manera segura y eficiente
 * ? CONEXION
 * * se suele llevar a cabo en dos clases diferentes para preservar la seguridad de los datos de la siguiente manera:
 */
abstract class credenciales
{
    //----Servidor----
    // protected $host = 'ip_servidor';
    // private $username = 'usuario que le proporcionan';
    // private $password = 'contrasñea del usuario que le proporcionan';
    // protected $dbname = "nombre de la base de datos";

    //----Locales----
    protected $host = 'localhost';
    private $username = 'root';
    private $password = '';
    protected $dbname = "campusland";
    public function __get($name)
    {
        return $this->$name;
    }
}
interface environments
{
    public function __get($name);
}
abstract class conectar extends credenciales
{
    protected $conx;
    function __construct(private $driver = "mysql", private $port = 3306)
    {
        try {
            $this->conx = new \PDO($this->driver . ":host=" . $this->__get('host') . ";port=" . $this->port . ";dbname=" . $this->__get('dbname') . ";user=" . $this->username . ";password=" . $this->password);
            // echo "ok";
            $this->conx->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            $this->conx =  $e->getMessage();
        }
    }
}
