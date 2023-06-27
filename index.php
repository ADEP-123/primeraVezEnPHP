<?php

/**
 * ? COMANDOS DQL
 * * SELECT column1, column2, ..., columnN FROM nombre; Seleciona los registros de las columnas mencionadas en la tabla nombre
 * * SELECT column1, column2, ..., columnN FROM nombre WHERE condicion; Seleccio los registros de las columnas mencionadas en la tabla nombre donde se cumpla la condicion
 * * SELECT columna1, columna2, ..., columnaM FROM nombre ORDER BY columna1 DESC, columna2 ASC; Seleccio los registros de las columnas mencionadas en la tabla nombre y los ordena segun la columna y direccion asignados
 * * SELECT categoria, COUNT(*) as total_productos FROM productos GROUP BY categoria; Esta consulta devolveria la cantidad de registros en la columna productos asociados a la columna categoria
 * * SELECT departamento, AVG(salario) as salario_promedio FROM empleados GROUP BY departamento HAVING salario_promedio > 3000; La siguiente consulta devolveria la lista de departamentos que tienen un salario promedio superior a 3000
 */

// un ejemplo de un crud clasico usando DML y DQL es el siguiente: 
class academic_area extends conectar
{
    private $queryPostAcademicArea = 'INSERT INTO academic_area (id_area,id_staff,id_position,id_journeys) VALUES(:area,:staff,:posicion,:jornada)';
    private $queryDeleteAcademicArea = 'DELETE FROM academic_area WHERE id = :ID';
    private $queryPutAcademicArea = 'UPDATE academic_area SET id_area = :area, id_staff = :staff, id_position = :posicion, id_journeys = :jornada WHERE id = :ID';
    private $queryGetAll = 'SELECT id AS "ID", id_area AS area, id_staff AS staff, id_position AS posicion, id_journeys AS jornada FROM academic_area';
    use instanciar;
    function __construct(private $id_area = 1, private $id_staff = 9, private $id_position = 1, private $id_journeys = 1, private $id = 1)
    {
        parent::__construct();
    }
    public function post_academic_area()
    {
        $mensaje = [];
        try {
            $res = $this->conx->prepare($this->queryPostAcademicArea);
            $res->bindValue("area", $this->id_area);
            $res->bindValue("staff", $this->id_staff);
            $res->bindValue("posicion", $this->id_position);
            $res->bindValue("jornada", $this->id_journeys);
            $res->execute();
            $mensaje = ["Code" => 200 + $res->rowCount(), "Message" => "Data inserted"];
        } catch (\PDOException $e) {
            if ($e->getCode() == 23000) {
                $pattern = '/`([^`]*)`/';
                preg_match_all($pattern, $res->errorInfo()[2], $matches);
                $matches = array_values(array_unique($matches[count($matches) - 1]));
                var_dump($res->errorInfo()[2]);
                $mensaje = ["Code" => $e->getCode(), "Message" => "Error, no se encuentra la llave foranea $matches[2] correspondiente a la tabla $matches[4]"];
            } else {
                $mensaje = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }
        } finally {
            print_r($mensaje);
        }
    }
    public function getAll_academic_area()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $this->message = ["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            echo json_encode($this->message);
        }
    }
    public function delete_academic_area()
    {
        $mensaje = [];
        try {
            $res = $this->conx->prepare($this->queryDeleteAcademicArea);
            $res->bindValue("ID", $this->id);
            $res->execute();
            $mensaje = ["Code" => 200 + $res->rowCount(), "Message" => "Data Deleted"];
        } catch (\PDOException $e) {
            if ($e->getCode() == 23000) {
                $pattern = '/`([^`]*)`/';
                preg_match_all($pattern, $res->errorInfo()[2], $matches);
                $matches = array_values(array_unique($matches[count($matches) - 1]));
                $mensaje = ["Code" => $e->getCode(), "Message" => "Error, no se puede eliminar el id inicado ya que contiene registros asociados en la tabla $matches[1]"];
            } else {
                $mensaje = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
            }
        } finally {
            print_r($mensaje);
        }
    }
    public function put_academic_area()
    {
        $mensaje = [];
        try {
            $res = $this->conx->prepare($this->queryPutAcademicArea);
            $res->bindValue("ID", $this->id);
            $res->bindValue("area", $this->id_area);
            $res->bindValue("staff", $this->id_staff);
            $res->bindValue("posicion", $this->id_position);
            $res->bindValue("jornada", $this->id_journeys);
            $res->execute();
            $mensaje = ["Code" => 200 + $res->rowCount(), "Message" => "Info Updated"];
        } catch (\PDOException $e) {
            $mensaje = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($mensaje);
        }
    }
}