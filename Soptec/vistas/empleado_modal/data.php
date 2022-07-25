
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $empleado=new Empleado();
    $empleados=$empleado->leer_todo();
   
    ?>
    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Puesto</th>
      <th scope="col">Status</th>
      <th scope="col">Fecha Ingreso</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($empleados as $empleado){
      ?>
  <tr>
      <td><?php echo $empleado->id ?></td>
      <td><?php echo $empleado->nombres?></td>
      <td><?php echo $empleado->apellido1?></td>
      <td><?php echo $empleado->apellido2?></td>
      <td><?php echo $empleado->puesto?></td>
      <td><?php echo $empleado->status?></td>
      <td><?php echo $empleado->fecha_ingreso?></td>
      <td><?php echo $empleado->correo?></td>
      <td><?php echo $empleado->contrasena?></td>
      <td><a href="index.php?id=<?php echo $empleado->id ?>&editar">editar </a></td>
      <td><a href="index.php?id=<?php echo $empleado->id ?>&borrar">borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>