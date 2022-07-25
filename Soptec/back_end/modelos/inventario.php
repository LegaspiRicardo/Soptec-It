<?php
include_once "crud.php";
include_once "config.php";

class Inventario implements CRUD
{
    public $id;
    public $nombre;
    public $modelo;
    public $marca;
    public $precio;
    public $cantidad;
    public $descripcion;
    public $id_proveedor;
    public $status;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO inventario (nombre, modelo, marca, precio, cantidad, descripcion, id_proveedor, status)
                    VALUES (:nombre, :modelo, :marca, :precio, :cantidad, :descripcion, :id_proveedor, :status)");
                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':modelo', $this->modelo);
                $stmt->bindParam(':marca', $this->marca);
                $stmt->bindParam(':precio', $this->precio);
                $stmt->bindParam(':cantidad', $this->cantidad);
                $stmt->bindParam(':descripcion', $this->descripcion);
                $stmt->bindParam(':id_proveedor', $this->id_proveedor);
                $stmt->bindParam(':status',$this->status);
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
                UPDATE inventario SET nombre=:nombre, modelo=:modelo, marca=:marca, precio=:precio, cantidad=:cantidad, descripcion=:descripcion, id_proveedor=:id_proveedor, status=:status
                WHERE id=:id");

                
                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':modelo', $this->modelo);
                $stmt->bindParam(':marca', $this->marca);
                $stmt->bindParam(':precio', $this->precio);
                $stmt->bindParam(':cantidad', $this->cantidad);
                $stmt->bindParam(':descripcion', $this->descripcion);
                $stmt->bindParam(':id_proveedor', $this->id_proveedor);
                $stmt->bindParam(':status',$this->status);
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
                DELETE FROM inventario  
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
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM inventario   
            WHERE id=:id");
            $stmt->bindParam(':id', $this->id);
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
            SELECT * FROM inventario");
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