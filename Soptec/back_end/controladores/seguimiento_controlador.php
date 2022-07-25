<?php
include_once '../modelos/seguimiento.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){

        case '1':      //crear
            $seguimiento=new Seguimiento();
            $seguimiento->cliente=$_REQUEST['cliente'];
            $seguimiento->fecha_cita=$_REQUEST['fecha_cita'];
            $seguimiento->status=$_REQUEST['status'];
            $resultado='';
            echo $seguimiento->crear();


        
          //  header('Location:../../');



            break;

            case '2': 
            $seguimiento=new Seguimiento();
            $seguimiento->id_seguimiento=$_REQUEST['id_seguimiento'];
            $seguimiento->cliente=$_REQUEST['cliente'];
            $seguimiento->fecha_cita=$_REQUEST['fecha_cita'];
            $seguimiento->status=$_REQUEST['status'];
            $resultado='';
            echo $seguimiento->actualizar();
                break;  //Actualizar

                
            

            case '3':
            $seguimiento=new Seguimiento();
            $seguimiento->id_seguimiento=$_REQUEST['id_seguimiento'];
            $resultado='';
            echo $seguimiento->borrar();
                
                break;
            default: echo"opcion invalida";
    }

         header('Location: ../../front_end/vistas/seguimiento_modal/index.php?resultado='.$resultado);
      exit(); 


}




?>