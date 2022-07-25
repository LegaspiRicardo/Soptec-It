<?php
include_once '../modelos/cliente.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $cliente=new Cliente();
            $cliente->nombres=$_REQUEST['nombres'];
            $cliente->apellido1=$_REQUEST['apellido1'];
            $cliente->apellido2=$_REQUEST['apellido2'];
            $cliente->calle=$_REQUEST['calle'];
            $cliente->numero=$_REQUEST['numero'];
            $cliente->colonia=$_REQUEST['colonia'];
            $cliente->cp=$_REQUEST['cp'];
            $cliente->ciudad=$_REQUEST['ciudad'];
            $cliente->telefono=$_REQUEST['telefono'];
            $cliente->correo=$_REQUEST['correo'];
            $cliente->status=$_REQUEST['status'];
            $resultado='';
            echo $cliente->crear();


        
          //  header('Location:../../');


            break;

            case '2': 
                $cliente=new Cliente();
                $cliente->nombres=$_REQUEST['nombres'];
                $cliente->apellido1=$_REQUEST['apellido1'];
                $cliente->apellido2=$_REQUEST['apellido2'];
                $cliente->calle=$_REQUEST['calle'];
                $cliente->numero=$_REQUEST['numero'];
                $cliente->colonia=$_REQUEST['colonia'];
                $cliente->cp=$_REQUEST['cp'];
                $cliente->ciudad=$_REQUEST['ciudad'];
                $cliente->telefono=$_REQUEST['telefono'];
                $cliente->correo=$_REQUEST['correo'];
                $cliente->status=$_REQUEST['status'];
                
                $cliente->id=$_REQUEST['id'];
                $resultado='';
            echo $cliente->actualizar();
                break;  //Actualizar
            

            case '3':
            $cliente=new Cliente();
            $cliente->id=$_REQUEST['id'];
            $resultado='';
            echo $cliente->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/cliente_modal/index.php?resultado='.$resultado);
    exit();
}




?>