
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $proveedor=new Proveedor();
  if(isset($_GET['id']) && isset($_GET['editar'])){
    $proveedor->id=$_GET['id'];
    $proveedor=$proveedor->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal5">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal5").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form class="needs-validation" novalidate action="../../../back_end/controladores/proveedor_controlador.php" method="GET">

  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $proveedor->id?>">

  <!------------------------------------Nombres, Apellidos e id_material------------------------------------------>
  <div class="form-row"> 
      <div class="col">
        <label for="validationCustom01">Nombre(s)</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombres" value="<?php echo $proveedor->nombres?>">
      </div>

      <div class="col">
        <label for="validationCustom02">Apellido Paterno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido1" value="<?php echo $proveedor->apellido1?>">
      </div>

      <div class="col">
        <label for="validationCustom03">Apellido Materno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido2" value="<?php echo $proveedor->apellido2?>">
      </div>

    </div>

  <!-------------------------------Telefono, email, Status---------------------------------------->
  <div class="form-row">

      <div class="col">
        <label for="validationCustom04">Telefono</label>
        <input type="text" class="form-control" id="validationCustom03" name="telefono" value="<?php echo $proveedor->telefono?>">
      </div>

      <div class="col">
        <label for="validationCustom05">Email</label>
        <input type="text" class="form-control" id="validationCustom03" name="email" value="<?php echo $proveedor->email?>">
      </div>

      <div class="col">
        <label for="validationCustom06">Status</label>
        <input type="text" class="form-control" id="validationCustom05" name="status" value="<?php echo $proveedor->status?>">  
      </div>

      
    </div>

  <!------------------------------------Checkbox--------------------------------------------->
    <div class="form-row">

    <div class="col-2">
          <label for="validationCustom07">Id_Material</label>
          <input type="number" class="form-control" id="validationCustom01" name="id_material" value="<?php echo $proveedor->id_material?>">
    </div>




      <div class="form-check pt-5 ml-5">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Si, quiero actualizar al proveedor
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  


        
      </div>
      
      
      <div class="modal-footer">
      <input type="submit" class=" col-8 btn btn-success mx-auto" value="Actualizar proveedor">

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