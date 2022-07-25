<?php
session_start();
 if(!isset($_SESSION['nombres'])){
     header('Location: ../../vistas/sign-in/index.php?resultado='.$resultado);
     exit();
 } 


include_once '../../../back_end/modelos/inventario.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v4.6</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      h2{
          font-size:200%;
          color: white;
          width: 100%;
          height: 20%;
          background-color: #30475E;
          text-align: center;
          padding-top:7%;
          padding-bottom:6%;
        }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="dashboard.js"></script>

     

  </head>

 
<body>
    
   <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <?php
      include_once '../../SitioWeb/header.php';
      ?>
    </nav> 


    <div class="container-fluid" >
 
     <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  border-bottom">
        <h1 class="text-body">Sección Inventario</h1>
      
        <div>
          <video width="110%" autoplay="autoplay" loop="loop" muted defaultMuted>
            <source src="../../SitioWeb/video_bodega.mp4" type="video/mp4" >
          </video>
        </div>
      
      </div>

     </main>
    </div>


    <div class="BarraRelacion1">
      <h2>Texto que relaciona</h2>
    </div>


      
      
    <div class="table col-md-10 mx-auto">
      <br>

      <?php  
      include_once('formulario_crear.php');
      include_once('formulario_actualizar.php');
      include_once('formulario_borrar.php');
      include_once 'data.php';      
      ?>  
 
      <form action="../../../back_end/controladores/empleado_controlador.php" method="POST">
        <input type="hidden" name="opcion" value="5">
        <input type="submit"  value="Salir">
      </form>  
    </div>
      
  </body>
</html>