<?php



class Conexion{
private $con;

public function __CONSTRUCT(){

	try {
		
	  $this->con=new PDO("mysql:host=localhost; dbname=soptec", 'root','root');
	  $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 
	
	 }catch(PDOException $e) {
	  echo "Error: " . $e->getMessage();
	 }
}

public function getConection(){
	 	return $this->con;
	}


	
	public function desconectar(){
		$this->con=null;
	}

}


//$con=new Conexion();
 ?>