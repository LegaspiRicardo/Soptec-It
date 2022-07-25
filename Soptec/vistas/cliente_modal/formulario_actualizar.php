
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $cliente=new Cliente();
  if(isset($_GET['id']) && isset($_GET['editar'])){
    $cliente->id=$_GET['id'];
    $cliente=$cliente->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal11").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Actualizar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form class="needs-validation" novalidate action="../../../back_end/controladores/cliente_controlador.php" method="GET" >

  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $cliente->id?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
  <div class="form-row"> 
    <div class="col">
      <label for="validationCustom01">Nombre(s)</label>
      <input type="text" class="form-control" id="validationCustom01" name="nombres" value="<?php echo $cliente->nombres?>" required>
    </div>

    <div class="col">
      <label for="validationCustom02">Apellido Paterno</label>
      <input type="text" class="form-control" id="validationCustom02" name="apellido1" value="<?php echo $cliente->apellido1?>" required>
    </div>

    <div class="col">
      <label for="validationCustom03">Apellido Materno</label>
      <input type="text" class="form-control" id="validationCustom03" name="apellido2" value="<?php echo $cliente->apellido2?>" required>
    </div>
  </div>

<!-------------------------------Precio, Cantidad, Status---------------------------------------->
  <div class="form-row">

    <div class="col-4">
      <label for="validationCustom04">Calle</label>
      <input type="text" class="form-control" id="validationCustom04" name="calle" value="<?php echo $cliente->calle?>" required>
    </div>

    <div class="col-2">
      <label for="validationCustom05">Numero</label>
      <input type="text" class="form-control" id="validationCustom05" name="numero" value="<?php echo $cliente->numero?>" required>
    </div>

    <div class="col-4">
      <label for="validationCustom06">Colonia</label>
      <input type="text" class="form-control" id="validationCustom06" name="colonia" value="<?php echo $cliente->colonia?>" required>  
    </div>

    <div class="col-2">
      <label for="validationCustom07">CP</label>
      <input type="text" class="form-control" id="validationCustom07" name="cp" value="<?php echo $cliente->cp?>" required>  
    </div>

    
  </div>


<!------------------------------------Descripcion--------------------------------------------->
<div class="form-row">
  <div class="col-3">
        <label for="validationCustom08">Ciudad</label>
        <input type="text" class="form-control" id="validationCustom08" name="ciudad" value="<?php echo $cliente->ciudad?>" required>
  </div>

  <div class="col-3">
      <label for="validationCustom09">Telefono</label>
      <input type="text" class="form-control" id="validationCustom09" name="telefono" value="<?php echo $cliente->telefono?>" required>  
    </div>

    <div class="col-3">
      <label for="validationCustom10">Correo</label>
      <input type="text" class="form-control" id="validationCustom10" name="correo" value="<?php echo $cliente->correo?>" required>  
    </div>

    <div class="col">
      <label for="validationCustom11">Status</label>
      <input type="text" class="form-control" id="validationCustom11" name="status" value="<?php echo $cliente->status?>" required>  
    </div>
</div>
 

        <!------------------------------------Checkbox--------------------------------------------->
          <!-- <div class="form-row">
            
            <div class="col-4">
            <label for="validationCustom06">Status</label>
            <select name="status" id="status" class="form-control">
              <option>Existente</option>
              <option>Pocos disponibles</option>
              <option>Agotado</option>
              <option>Inexistente</option>
          </select></div> 


        





          </div>-->

          <br>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  


        
      </div>
      <div class="modal-footer">
      <input type="submit" class="col-8 btn btn-success mx-auto" value="Actualizar Cliente">

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