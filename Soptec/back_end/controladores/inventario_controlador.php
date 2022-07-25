<?php

include_once '../modelos/inventario.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $inventario=new Inventario();
            $inventario->nombre=$_REQUEST['nombre'];
            $inventario->modelo=$_REQUEST['modelo'];
            $inventario->marca=$_REQUEST['marca'];
            $inventario->precio=$_REQUEST['precio'];
            $inventario->cantidad=$_REQUEST['cantidad'];
            $inventario->descripcion=$_REQUEST['descripcion'];
            $inventario->id_proveedor=$_REQUEST['id_proveedor'];
            $inventario->status=$_REQUEST['status'];
            $resultado='';
            echo $inventario->crear();


        
          //  header('Location:../../');







            break;

            case '2': 
            $inventario=new Inventario();
            $inventario->nombre=$_REQUEST['nombre'];
            $inventario->modelo=$_REQUEST['modelo'];
            $inventario->marca=$_REQUEST['marca'];
            $inventario->precio=$_REQUEST['precio'];
            $inventario->cantidad=$_REQUEST['cantidad'];
            $inventario->descripcion=$_REQUEST['descripcion'];
            $inventario->id_proveedor=$_REQUEST['id_proveedor'];
            $inventario->status=$_REQUEST['status'];
            $inventario->id=$_REQUEST['id'];
            $resultado='';
            echo $inventario->actualizar();
                break;  //Actualizar
            

            case '3':
            $inventario=new Inventario();
            $inventario->id=$_REQUEST['id'];
            $resultado='';
            echo $inventario->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/inventario_modal/index.php?resultado='.$resultado);
    exit(); 

}




?>