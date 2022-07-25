<?php
include_once "crud.php";
include_once "config.php";

class Presupuesto implements CRUD
{
    public $id_presupuesto;
    public $material;
    public $id_cliente;
    public $notas;
    public $precio_total;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
            
                $stmt = $conn->prepare("
                    INSERT INTO presupuesto (material, id_cliente, notas, precio_total)
                    VALUES (:material, :id_cliente, :notas, :precio_total)");
                $stmt->bindParam(':material', $this->material);
                $stmt->bindParam(':id_cliente', $this->id_cliente);
                $stmt->bindParam(':notas', $this->notas);
                $stmt->bindParam(':precio_total', $this->precio_total);
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
                UPDATE presupuesto SET material:material, id_cliente:id_cliente, notas:notas, precio_total:precio_total)
                WHERE id_presupuesto=:id_presupuesto");

            $stmt->bindParam(':material', $this->material);
            $stmt->bindParam(':id_cliente', $this->id_cliente);
            $stmt->bindParam(':notas', $this->notas);
            $stmt->bindParam(':precio_total', $this->precio_total);
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

    public function borrar()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            DELETE FROM presupuesto  
            WHERE id_presupuesto=:id_presupuesto");
            $stmt->bindParam(':id_presupuesto', $id_presupuesto);
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
            SELECT * FROM presupuesto   
            WHERE id_presupuesto=:id_presupuesto");
            $stmt->bindParam(':id_presupuesto', $id_presupuesto);
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
            SELECT * FROM presupuesto");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            } finally{
            $conn = null;
            }  
    }

}
?>