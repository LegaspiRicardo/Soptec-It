<?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $proveedor=new Proveedor();
    $proveedores=$proveedor->leer_todo();
   

?>
    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">id_material</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($proveedores as $proveedor){
      ?>
  <tr>
      <td><?php echo $proveedor->id ?></td>
      <td><?php echo $proveedor->nombres ?></td>
      <td><?php echo $proveedor->apellido1 ?></td>
      <td><?php echo $proveedor->apellido2 ?></td>
      <td><?php echo $proveedor->telefono?></td>
      <td><?php echo $proveedor->email?></td>
      <td><?php echo $proveedor->status?></td>
      <td><?php echo $proveedor->id_material?></td>
      <td><a href="index.php?id=<?php echo $proveedor->id ?>&editar">editar </a></td>
      <td><a href="index.php?id=<?php echo $proveedor->id ?>&borrar">borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>