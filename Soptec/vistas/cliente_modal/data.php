
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $cliente=new cliente();
    $clientes=$cliente->leer_todo();
   
    ?>
    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Calle</th>
      <th scope="col">Numero</th>
      <th scope="col">Colonia</th>
      <th scope="col">C.P</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Status</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($clientes as $cliente){
      ?>
  <tr>
      <td><?php echo $cliente->id ?></td>
      <td><?php echo $cliente->nombres?></td>
      <td><?php echo $cliente->apellido1?></td>
      <td><?php echo $cliente->apellido2?></td>
      <td><?php echo $cliente->calle?></td>
      <td><?php echo $cliente->numero?></td>
      <td><?php echo $cliente->colonia?></td>
      <td><?php echo $cliente->cp?></td>
      <td><?php echo $cliente->ciudad?></td>
      <td><?php echo $cliente->telefono?></td>
      <td><?php echo $cliente->correo?></td>
      <td><?php echo $cliente->status?></td>
      <td><a href="index.php?id=<?php echo $cliente->id ?>&editar">editar </a></td>
      <td><a href="index.php?id=<?php echo $cliente->id ?>&borrar">borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>