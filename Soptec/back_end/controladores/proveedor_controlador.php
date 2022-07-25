<?php
include_once '../modelos/proveedor.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $proveedor=new Proveedor();
            $proveedor->nombres=$_REQUEST['nombres'];
            $proveedor->apellido1=$_REQUEST['apellido1'];
            $proveedor->apellido2=$_REQUEST['apellido2'];
            $proveedor->telefono=$_REQUEST['telefono'];
            $proveedor->email=$_REQUEST['email'];
            $proveedor->status=$_REQUEST['status'];
            $proveedor->id_material=$_REQUEST['id_material'];
            $resultado='';
            echo $proveedor->crear();


        
          //  header('Location:../../');







            break;

            case '2': //Actualizar
            $proveedor=new Proveedor();
            $proveedor->nombres=$_REQUEST['nombres'];
            $proveedor->apellido1=$_REQUEST['apellido1'];
            $proveedor->apellido2=$_REQUEST['apellido2'];
            $proveedor->telefono=$_REQUEST['telefono'];
            $proveedor->email=$_REQUEST['email'];
            $proveedor->status=$_REQUEST['status'];
            $proveedor->id_material=$_REQUEST['id_material'];
            $proveedor->id=$_REQUEST['id'];
            $resultado='';
            echo $proveedor->actualizar();
                break;  
            

            case '3': //Borrar
                
            $proveedor=new Proveedor();
            $proveedor->id=$_REQUEST['id'];
            $resultado='';
            echo $proveedor->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/proveedor_modal/index.php?resultado='.$resultado);
    exit(); 

}




?>