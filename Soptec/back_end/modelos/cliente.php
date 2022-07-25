<?php
include_once "crud.php";
include_once "config.php";

class Cliente implements CRUD
{
    public $id;
    public $nombres;
    public $apellido1;
    public $apellido2;
    public $calle;
    public $numero;
    public $colonia;
    public $cp;
    public $ciudad;
    public $telefono;
    public $correo;
    public $status;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                    INSERT INTO cliente (nombres, apellido1, apellido2, calle, numero, colonia, cp, ciudad, telefono, correo, status)
                    VALUES (:nombres, :apellido1, :apellido2, :calle, :numero, :colonia, :cp, :ciudad, :telefono, :correo, :status)");
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido1', $this->apellido1);
                $stmt->bindParam(':apellido2', $this->apellido2);
                $stmt->bindParam(':calle', $this->calle);
                $stmt->bindParam(':numero', $this->numero);
                $stmt->bindParam(':colonia', $this->colonia);
                $stmt->bindParam(':cp', $this->cp);
                $stmt->bindParam(':ciudad', $this->ciudad);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':correo', $this->correo);
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
            }
    }

    function actualizar()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            UPDATE cliente SET nombres=:nombres, apellido1=:apellido1, apellido2=:apellido2, calle=:calle, numero=:numero, colonia=:colonia, cp=:cp, ciudad=:ciudad, telefono=:telefono, correo=:correo, status=:status
            WHERE id=:id");

            $stmt->bindParam(':nombres', $this->nombres);
            $stmt->bindParam(':apellido1', $this->apellido1);
            $stmt->bindParam(':apellido2', $this->apellido2);
            $stmt->bindParam(':calle', $this->calle);
            $stmt->bindParam(':numero', $this->numero);
            $stmt->bindParam(':colonia', $this->colonia);
            $stmt->bindParam(':cp', $this->cp);
            $stmt->bindParam(':ciudad', $this->ciudad);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':correo', $this->correo);
            $stmt->bindParam(':status', $this->status);
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
            DELETE FROM cliente  
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
            SELECT * FROM cliente   
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
            SELECT * FROM cliente");
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