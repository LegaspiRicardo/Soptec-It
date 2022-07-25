<?php
include_once "crud.php";
include_once "config.php";

class Proveedor implements CRUD
{
    public $id;
    public $nombres;
    public $apellido1;
    public $apellido2;
    public $telefono;
    public $email;
    public $status;
    public $id_material;
    

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                    INSERT INTO proveedor (nombres, apellido1, apellido2, telefono, email, status, id_material)
                    VALUES (:nombres, :apellido1, :apellido2, :telefono, :email, :status, :id_material)");
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido1', $this->apellido1);
                $stmt->bindParam(':apellido2', $this->apellido2);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':status', $this->status);
                $stmt->bindParam(':id_material', $this->id_material);
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
                UPDATE proveedor SET nombres=:nombres, apellido1=:apellido1, apellido2=:apellido2, telefono=:telefono, email=:email, status=:status, id_material=:id_material
                WHERE id=:id");
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido1', $this->apellido1);
                $stmt->bindParam(':apellido2', $this->apellido2);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':status', $this->status);
                $stmt->bindParam(':id_material', $this->id_material);
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
            DELETE FROM proveedor  
            WHERE id=:id");
            $stmt->bindParam(':id',$this->id);
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
            SELECT * FROM proveedor   
            WHERE id=:id");
            $stmt->bindParam(':id',$this->id);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt -> fetchObject();
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
            SELECT * FROM proveedor");
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
}

?>