<?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $seguimiento=new Seguimiento();
    $seguimientos=$seguimiento->leer_todo();
   
    
?>
    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id_seguimiento</th>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha de la cita</th>
      <th scope="col">Status</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>



  <tbody>
    
      <?php
      foreach($seguimientos as $seguimiento){
      ?>
  <tr>
      <td><?php echo $seguimiento->id_seguimiento ?></td>

      <td><?php $cliente=new Cliente();
              $cliente->id=$seguimiento->cliente;
              $client=$cliente->leer_id();
              echo $client->nombres." ".$client->apellido1. " ". $client->apellido2." ".". ".". ".". " ." ." ." ."."Tel.".$client->telefono;
        ?>
      </td>

     


      <td><?php echo $seguimiento->fecha_cita?></td>
      <td><?php echo $seguimiento->status?></td>
      <td><a href="index.php?id_seguimiento=<?php echo $seguimiento->id_seguimiento ?>&editar">editar </a></td>
      <td><a href="index.php?id_seguimiento=<?php echo $seguimiento->id_seguimiento ?>&borrar">borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>