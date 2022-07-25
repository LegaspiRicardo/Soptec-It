
<?php

session_start();
include_once '../modelos/empleado.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $empleado=new Empleado();
            $empleado->nombres=$_REQUEST['nombres'];
            $empleado->apellido1=$_REQUEST['apellido1'];
            $empleado->apellido2=$_REQUEST['apellido2'];
            $empleado->puesto=$_REQUEST['puesto'];
            $empleado->status=$_REQUEST['status'];
            $empleado->fecha_ingreso=$_REQUEST['fecha_ingreso'];
            $empleado->correo=$_REQUEST['correo'];
            $empleado->contrasena=$_REQUEST['contrasena'];
            $resultado='';
            echo $empleado->crear();


        
          //  header('Location:../../');


            break;

            case '2': 
                $empleado=new Empleado();
                $empleado->nombres=$_REQUEST['nombres'];
                $empleado->apellido1=$_REQUEST['apellido1'];
                $empleado->apellido2=$_REQUEST['apellido2'];
                $empleado->puesto=$_REQUEST['puesto'];
                $empleado->status=$_REQUEST['status'];
                $empleado->fecha_ingreso=$_REQUEST['fecha_ingreso'];
                $empleado->correo=$_REQUEST['correo'];
                $empleado->contrasena=$_REQUEST['contrasena'];
                $empleado->id=$_REQUEST['id'];
                $resultado='';
            echo $empleado->actualizar();
                break;  //Actualizar
            

            case '3':
            $empleado=new empleado();
            $empleado->id=$_REQUEST['id'];
            $resultado='';
            echo $empleado->borrar();
                
                break;



    case '4':  //Log in
        
        $empleado=new Empleado();
        $empleado->correo=$_REQUEST['correo'];
        $empleado->puesto=$_REQUEST['puesto'];
        $empleado->contrasena=$_REQUEST['contrasena'];
        $usuario=$empleado->select_cc();




        if($empleado->puesto=$_REQUEST['puesto'] == $empleado->puesto="Almacen")
        
        
        {
          $_SESSION['id']=$usuario->id;
          $_SESSION['nombres']=$usuario->nombres;
        header('Location: ../../front_end/vistas/dashboard/index.php?');
                        exit();
                    }else{
                        session_unset();
                        session_destroy();
                        $resultado="usuario y/o contraseña no validos";
                        header('Location: ../../front_end/vistas/sign-in/index.php?resultado='.$resultado);
                        exit();
                    }
        
                break;

                
                case '5':  //Log out
                    session_unset();
                    session_destroy();
                    header('Location: ../../front_end/vistas/sign-in/index.php?resultado='.$resultado);
                        exit();
        
                break;


            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/empleado_modal/index.php?resultado='.$resultado);
    
    exit();
    
}




?>