

<?php

if(isset($_GET['resultado'])){
  echo $resultado=$_GET['resultado'];
  }
  

  $inventario=new Inventario();
  if(isset($_GET['id'])&& isset($_GET['borrar'])){
    $inventario->id=$_GET['id'];
    $inventario=$inventario->leer_id();
  
?>


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
  Eliminar Producto
</button>  -->

<script>
$(document).ready(function(){
  $("#exampleModal3").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Eliminar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form class="needs-validation" novalidate action="../../../back_end/controladores/inventario_controlador.php" method="GET">

  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id" value="<?php echo $inventario->id?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
    <div class="form-row"> 
      <div class="col">
        <label for="validationCustom01">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" value="<?php echo $inventario->nombre?>" disabled>
      </div>

      <div class="col">
        <label for="validationCustom02">Modelo</label>
        <input type="text" class="form-control" id="validationCustom02" name="modelo" value="<?php echo $inventario->modelo?>" disabled>
      </div>

      <div class="col">
        <label for="validationCustom03">Marca</label>
        <input type="text" class="form-control" id="validationCustom02" name="marca" value="<?php echo $inventario->marca?>" disabled>
      </div>
    </div>

  <!-------------------------------Precio, Cantidad, Status---------------------------------------->
    <div class="form-row">

      <div class="col">
        <label for="validationCustom04">Precio</label>
        <input type="text" class="form-control" id="validationCustom03" name="precio" value="<?php echo $inventario->precio?>" disabled>
      </div>

      <div class="col">
        <label for="validationCustom05">Cantidad</label>
        <input type="number" class="form-control" id="validationCustom03" name="cantidad" value="<?php echo $inventario->cantidad?>" disabled>
      </div>

      <div class="col">
        <label for="validationCustom06">Proveedor</label>
        <input type="text" class="form-control" id="validationCustom05" name="id_proveedor" value="<?php echo $inventario->id_proveedor?>" disabled>  
      </div>

      
    </div>


  <!------------------------------------Descripcion--------------------------------------------->
  <div class="form-row">
    <div class="col">
          <label for="validationCustom07">Descripcion</label>
          <input type="text" class="form-control" id="validationCustom01" name="descripcion" value="<?php echo $inventario->descripcion?>" disabled>
    </div>
  </div>


  <!------------------------------------Checkbox--------------------------------------------->
    
  <div class="form-row">

        <div class="col-4">
                  <label for="validationCustom01">Status</label>
                  <input type="text" class="form-control" id="validationCustom01" name="status" value="<?php echo $inventario->status?>" disabled>
            </div>

     
    </div>
    <br>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  


        
      </div>
      <div class="modal-footer">
      <input type="submit" class=" col-8 btn btn-danger mx-auto" value="Eliminar Material">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


</body>
</html>


<?php  


  }
?>