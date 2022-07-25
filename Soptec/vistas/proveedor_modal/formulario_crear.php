

<?php

   echo $_GET['resultado'];

?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal4">
  Registrar proveedor
</button>


<!-- <script>
$(document).ready(function(){
  $("#exampleModal1").modal('show');
});
</script> -->


<!-- Modal -->
  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  mx-auto" id="exampleModalLabel">Registrar Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
       
      
  <form class="needs-validation mb-3" novalidate action="../../../back_end/controladores/proveedor_controlador.php" method="POST">

  <input type="hidden" name="opcion" value="1">


  <!------------------------------------Nombre, Apellidos------------------------------------------>
    <div class="form-row"> 
      <div class="col">
        <label for="validationCustom01">Nombre(s)</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombres" required>
      </div>

      <div class="col">
        <label for="validationCustom02">Apellido Paterno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido1" required>
      </div>

      <div class="col">
        <label for="validationCustom03">Apellido Materno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido2" required>
      </div>

      
    </div>

  <!-------------------------------Telefono, email y status---------------------------------------->
    <div class="form-row">

      <div class="col">
        <label for="validationCustom04">Telefono</label>
        <input type="text" class="form-control" id="validationCustom03" name="telefono" required>
      </div>

      <div class="col">
        <label for="validationCustom05">Email</label>
        <input type="text" class="form-control" id="validationCustom03" name="email" required>
      </div>

      <div class="col">
        <label for="validationCustom06">Status</label>
        <input type="text" class="form-control" id="validationCustom05" name="status" required>  
      </div>

      
    </div>



  <!------------------------------------Id_Material y Checkbox--------------------------------------------->
    <div class="form-row">

    <div class="col-2 ">
          <label for="validationCustom07">Id_Material</label>
          <input type="number" class="form-control" id="validationCustom01" name="id_material" required>
    </div>


      <div class="form-check pt-5 ml-5">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Si, quiero registrar un proveedor
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  


      <div class="modal-footer">

      <input type="submit"  class="col-8 btn btn-primary " value="Registrar proveedor">


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      
      
        </div>

        </form>


      </div>
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