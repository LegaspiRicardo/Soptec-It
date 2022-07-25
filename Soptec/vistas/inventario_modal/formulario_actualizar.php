
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $inventario=new Inventario();
  if(isset($_GET['id']) && isset($_GET['editar'])){
    $inventario->id=$_GET['id'];
    $inventario=$inventario->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal2").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Actualizar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form class="needs-validation" novalidate action="../../../back_end/controladores/inventario_controlador.php" method="GET" enctype="multipart/form-data">

  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $inventario->id?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
  <div class="form-row"> 
  <div class="col">
      <label for="validationCustom01">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" name="nombre" value="<?php echo $inventario->nombre?>" required>
  </div>

  <div class="col">
    <label for="validationCustom02">Modelo</label>
    <input type="text" class="form-control" id="validationCustom02" name="modelo" value="<?php echo $inventario->modelo?>" required>
  </div>

  <div class="col">
    <label for="validationCustom03">Marca</label>
    <input type="text" class="form-control" id="validationCustom02" name="marca" value="<?php echo $inventario->marca?>" required>
  </div>
  </div>

  <!-------------------------------Precio, Cantidad, Status---------------------------------------->
  <div class="form-row">

  <div class="col">
    <label for="validationCustom04">Precio</label>
    <input type="text" class="form-control" id="validationCustom03" name="precio" value="<?php echo $inventario->precio?>" required>
  </div>

  <div class="col">
    <label for="validationCustom05">Cantidad</label>
    <input type="number" class="form-control" id="validationCustom03" name="cantidad" value="<?php echo $inventario->cantidad?>" required>
  </div>

  <div class="col">
    <label for="validationCustom06">Proveedor</label>
    <input type="text" class="form-control" id="validationCustom05" name="id_proveedor" value="<?php echo $inventario->id_proveedor?>" required>  
  </div>

  </div>

  <!------------------------------------Descripcion--------------------------------------------->
  <div class="form-row">
    <div class="col">
        <label for="validationCustom07">Descripcion</label>
        <input type="text" class="form-control" id="validationCustom01" name="descripcion" value="<?php echo $inventario->descripcion?>" required>
    </div>
  </div>


    <!------------------------------------Checkbox--------------------------------------------->
    <div class="form-row">
            
            <div class="col-4">
              <label for="validationCustom01">Status</label> 
                <select name="status" id="status" class="form-control" required>
                <option value="<?php echo $inventario->status?>" ><?php echo $inventario->status?></option>  
                <option>Existente</option>
                  <option>Pocos disponibles</option>
                  <option>Agotado</option>
                  <option>Inexistente</option>
                </select>
              
            </div>

            <div class="col-6 ml-3">
            <label for="validationCustom03">Imagen</label>
            <input type="file" accept="image/jpg" class="form-control" id="validationCustom04" name="imagen" required >
            
          </div>


           


          </div>

          <br>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  


        
      </div>
      <div class="modal-footer">
      <input type="submit" class="col-8 btn btn-success mx-auto" value="Actualizar Material">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>

      </form>


    </div>
  </div>
</div>










<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  <?php

  }

  ?>