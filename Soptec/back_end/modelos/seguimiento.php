<?php
include_once "crud.php";
include_once "config.php";

class Seguimiento implements CRUD
{
    public $id_seguimiento;
    public $cliente;
    public $fecha_cita;
    public $status;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO seguimiento (cliente, fecha_cita, status)
                    VALUES (:cliente, :fecha_cita, :status)");

                $stmt->bindParam(':cliente', $this->cliente);
                $stmt->bindParam(':fecha_cita', $this->fecha_cita);
                $stmt->bindParam(':status', $this->status);
                $stmt->execute();
                return $stmt->rowCount();
            }
            catch(PDOException $e)
            {
                echo "Error: " . $e->getMessage();
            }
            finally
            {
                $conn = null;
                $c->desconectar();
            }
    }

    
    function actualizar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                UPDATE seguimiento SET cliente=:cliente, fecha_cita=:fecha_cita, status=:status
                WHERE id_seguimiento=:id_seguimiento");

                $stmt->bindParam(':id_seguimiento',$this->id_seguimiento);
                $stmt->bindParam(':cliente', $this->cliente);
                $stmt->bindParam(':fecha_cita', $this->fecha_cita);
                $stmt->bindParam(':status', $this->status);
                $stmt->execute();

                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } 
            finally
            {
                $conn = null;
            }
    }

    function borrar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                DELETE FROM seguimiento  
                WHERE id_seguimiento=:id_seguimiento");
                $stmt->bindParam(':id_seguimiento', $this->id_seguimiento);
                $stmt->execute();
                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } finally
            {
                $conn = null;
            }
    }

    function leer_id()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM seguimiento   
            WHERE id_seguimiento=:id_seguimiento");
            $stmt->bindParam(':id_seguimiento', $this->id_seguimiento);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchObject();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }

    function leer_todo()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM seguimiento");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;

            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            } finally{
            $conn = null;
            }  
    }
}

?>