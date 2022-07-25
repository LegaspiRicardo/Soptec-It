<?php
include_once "crud.php";
include_once "config.php";

class Empleado implements CRUD
{
    public $id;
    public $nombres;
    public $apellido1;
    public $apellido2;
    public $puesto;
    public $status;
    public $fecha_ingreso;
    public $correo;
    public $contrasena;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                    INSERT INTO empleado (nombres, apellido1, apellido2, puesto, status, fecha_ingreso, correo, contrasena)
                    VALUES (:nombres, :apellido1, :apellido2, :puesto, :status, :fecha_ingreso, :correo, :contrasena)");
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido1', $this->apellido1);
                $stmt->bindParam(':apellido2', $this->apellido2);
                $stmt->bindParam(':puesto', $this->puesto);
                $stmt->bindParam(':status', $this->status);
                $stmt->bindParam(':fecha_ingreso', $this->fecha_ingreso);
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':contrasena', $this->contrasena);
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
            }
    }

    function actualizar()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            UPDATE empleado SET nombres=:nombres, apellido1=:apellido1, apellido2=:apellido2, puesto=:puesto, status=:status, fecha_ingreso=:fecha_ingreso, correo=:correo, contrasena=:contrasena
            WHERE id=:id");

            $stmt->bindParam(':nombres', $this->nombres);
            $stmt->bindParam(':apellido1', $this->apellido1);
            $stmt->bindParam(':apellido2', $this->apellido2);
            $stmt->bindParam(':puesto', $this->puesto);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':fecha_ingreso', $this->fecha_ingreso);
            $stmt->bindParam(':correo', $this->correo);
            $stmt->bindParam(':contrasena', $this->contrasena);
            $stmt->bindParam(':id',$this->id);
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
            DELETE FROM empleado 
            WHERE id=:id");
            $stmt->bindParam(':id', $this->id);
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
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM empleado   
            WHERE id=:id");
            $stmt->bindParam(':id',$this->id);
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
            SELECT * FROM empleado");
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;
            
            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            } finally{
            $conn = null;
            }   
    }

    function select_cc()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM empleado   
            WHERE correo=:correo and puesto=:puesto and contrasena=:contrasena");
            $stmt->bindParam(':correo', $this->correo);
            $stmt->bindParam(':puesto', $this->puesto);
            $stmt->bindParam(':contrasena', $this->contrasena);
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





}
?>