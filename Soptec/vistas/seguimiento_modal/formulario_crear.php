

<?php

   echo $_GET['resultado'];
   $cliente=new Cliente();
   $clientes=$cliente->leer_todo();
  
?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal7">
  Registrar proyecto
</button>


<!-- <script>
$(document).ready(function(){
  $("#exampleModal1").modal('show');
});
</script> -->


<!-- Modal -->
  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  mx-auto" id="exampleModalLabel">Registrar Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
       
      
<form class="needs-validation mb-3" novalidate action="../../../back_end/controladores/seguimiento_controlador.php" method="POST">

  <input type="hidden" name="opcion" value="1">

  <!------------------------------------Id cliente y fecha cita------------------------------------------>
  <div class="form-row mb-3"> 

  <div class="col mx-auto">

      <label for="validationCustom07" >Cliente</label>
        <select id="validationCustom01" class="form-control"  name="cliente" required>
          <?php
            foreach($clientes as $cliente){
          ?>
            <option value="<?php echo $cliente->id?>"> <?php echo $cliente->nombres . " ". $cliente->apellido1 ?></option>
          <?php
              }
          ?>

        </select> 
    </div>

    


  </div>




  <!------------------------------------Nombre, Apellidos y telefono------------------------------------------>
    <!-- <div class="form-row"> 



      <div class="col">
        <label for="validationCustom01">Nombre(s)</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombres" required>
      </div>

      <div class="col">
        <label for="validationCustom02">Apellido Paterno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido1" required>
      </div>

      <div class="col">
        <label for="validationCustom04">Telefono</label>
        <input type="text" class="form-control" id="validationCustom03" name="telefono" required>
      </div>

    </div> -->

  <!-------------------------------Status y submit---------------------------------------->
    <div class="form-row mb-3">

      <div class="col-4 mr-3">
        <label for="validationCustom06">Status</label>
        <select name="status" id="status" class="form-control">
              <option>En tiempo</option>
              <option>Pendiente</option>
              <option>Urgente</option>
              <option>Atrasado</option>
        </select>
 
      </div>





      <div class="col-6 mx-auto">
        <label for="validationCustom05">Fecha de cita</label>
        <input type="date" class="form-control" id="validationCustom03" name="fecha_cita" required>
      </div>


     

      
    </div>



    <div >

    <div class="form-check mt-3 ml-3 ">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label " for="invalidCheck">
          Si, quiero registrar un proyecto
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>


    </div>



  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  


      <div class="modal-footer">

      <input type="submit"  class="col-8 btn btn-primary " value="Registrar proyecto">


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