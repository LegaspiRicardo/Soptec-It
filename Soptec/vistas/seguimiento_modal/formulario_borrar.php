

<?php

if(isset($_GET['resultado'])){
  echo $resultado=$_GET['resultado'];
  }
  

  $seguimiento=new Seguimiento();
  if(isset($_GET['id_seguimiento'])&& isset($_GET['borrar'])){
    $seguimiento->id_seguimiento=$_GET['id_seguimiento'];
    $seguimiento=$seguimiento->leer_id();
  
?>


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal6">
  Eliminar Producto
</button>  -->

<script>
$(document).ready(function(){
  $("#exampleModal9").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Eliminar proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form class="needs-validation mb-3" novalidate action="../../../back_end/controladores/seguimiento_controlador.php" method="GET">

  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id_seguimiento" value="<?php echo $seguimiento->id_seguimiento?>">
  <!------------------------------------Id cliente y fecha cita------------------------------------------>
  
  <div class="form-row "> 

<div class="col mx-auto" >

      <select id="validationCustom01" class="form-control" name="cliente"  hidden>

      
      <option  value="<?php echo $cliente->id  ?>"> <?php echo $cliente->id?> </option>  

      </select> 
  </div>

  


</div>

<div class="form-row mb-3"> 

  <div class="col mx-auto">

      <label for="validationCustom07" >Cliente</label>
        <select id="validationCustom01" class="form-control"  name="cliente" disabled>
          <?php
            foreach($clientes as $cliente){
          ?>
            <option value="<?php echo $cliente->id?>" <?php  echo ($cliente->id==$seguimiento->cliente) ? "selected" : ""  ?> > <?php echo $cliente->nombres . " ". $cliente->apellido1 ?></option>
          <?php
              }
          ?>

        </select> 
    </div>

    


  </div>


<!-------------------------------Status y submit---------------------------------------->
  <div class="form-row mb-3">

    <div class="col-4 mr-3">
      <label for="validationCustom06">Status</label>
      <input type="text" class="form-control" id="validationCustom05" name="status" value="<?php echo $seguimiento->status?>" disabled>  
    </div>

    <div class="col-6 mx-auto">
      <label for="validationCustom05">Fecha de cita</label>
      <input type="date" class="form-control" id="validationCustom03" name="fecha_cita" value="<?php echo $seguimiento->fecha_cita?>" disabled>
    </div>


   

    
  </div>



  




  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->



      <div class="modal-footer">

      <input type="submit"  class="col-8 btn btn-danger " value="Eliminar proyecto">


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


</body>
</html>


<?php  


  }
?>