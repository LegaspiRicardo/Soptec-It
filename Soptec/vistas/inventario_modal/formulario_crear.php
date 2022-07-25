

<?php

  // echo $_GET['resultado'];

?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info col-4 mb-3" data-toggle="modal" data-target="#exampleModal1">
  Producto nuevo
</button>


<!-- <script>
$(document).ready(function(){
  $("#exampleModal1").modal('show');
});
</script> -->


<!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Registrar en Inventario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      
      <form class="needs-validation" novalidate action="../../../back_end/controladores/inventario_controlador.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="opcion" value="1">

        <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
          <div class="form-row"> 
            <div class="col">
              <label for="validationCustom01">Nombre</label>
              <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
            </div>

            <div class="col">
              <label for="validationCustom02">Modelo</label>
              <input type="text" class="form-control" id="validationCustom02" name="modelo" required>
            </div>

            <div class="col">
              <label for="validationCustom02">Marca</label>
              <input type="text" class="form-control" id="validationCustom02" name="marca" required>
            </div>
          </div>

        <!-------------------------------Precio, Cantidad, Status---------------------------------------->
          <div class="form-row">

            <div class="col">
              <label for="validationCustom03">Precio</label>
              <input type="text" class="form-control" id="validationCustom03" name="precio" required>
            </div>

            <div class="col">
              <label for="validationCustom03">Cantidad</label>
              <input type="number" class="form-control" id="validationCustom03" name="cantidad" required>
            </div>

            <div class="col">
              <label for="validationCustom05">Proveedor</label>
              <input type="text" class="form-control" id="validationCustom05" name="id_proveedor" required>  
            </div>

            
          </div>


        <!------------------------------------Descripcion--------------------------------------------->
        <div class="form-row">
          <div class="col">
                <label for="validationCustom01">Descripcion</label>
                <input type="text" class="form-control" id="validationCustom01" name="descripcion" required>
          </div>
        </div>
        <!------------------------------------Checkbox--------------------------------------------->
          <div class="form-row">
            
            <div class="col-4">
            <label for="validationCustom06">Status</label>
            <select name="status" id="status" class="form-control">
              <option>Existente</option>
              <option>Pocos disponibles</option>
              <option>Agotado</option>
              <option>Inexistente</option>
          </select></div>


          <div class="col-6 ml-3">
            <label for="validationCustom03">Imagen</label>
            <input type="file" accept="image/jpg" class="form-control" id="validationCustom04" name="imagen" required>
            
          </div>



            <div class="form-check pt-3 mx-auto">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>


          </div>

          <br>
        <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
        
        
      

      
      </div>

      <div class="modal-footer">
      <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Registrar Material">

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

