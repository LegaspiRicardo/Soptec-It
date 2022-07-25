
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $inventario=new Inventario();
    $inventarios=$inventario->leer_todo();
   
    ?>


    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
      <th scope="col">id_proveedor</th>
      <th scope="col">Status</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($inventarios as $inventario){
      ?>
  <tr>
      <td><?php echo $inventario->id ?></td>
      <td><?php echo $inventario->nombre ?></td>
      <td><?php echo $inventario->modelo ?></td>
      <td><?php echo $inventario->marca ?></td>
      <td><?php echo $inventario->precio?></td>
      <td><?php echo $inventario->cantidad?></td>
      <td><?php echo $inventario->descripcion?></td>
      <td><img src="<?php echo $inventario->id?>" alt="<?php echo $inventario->id?>"></td>
      <td><?php echo $inventario->id_proveedor?></td>
      <td><?php echo $inventario->status?></td>

      

      <td> <a href="index.php?id=<?php echo $inventario->id ?>&editar">Editar </a></td >
      

      <td><a href="index.php?id=<?php echo $inventario->id ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>