

<?php

if(isset($_GET['resultado'])){
  echo $resultado=$_GET['resultado'];
  }
  

  $empleado=new Empleado();
  if(isset($_GET['id'])&& isset($_GET['borrar'])){
    $empleado->id=$_GET['id'];
    $empleado=$empleado->leer_id();
  
?>


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
  Eliminar Producto
</button>  -->

<script>
$(document).ready(function(){
  $("#exampleModal15").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Eliminar empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form class="needs-validation" novalidate action="../../../back_end/controladores/empleado_controlador.php" method="GET">

  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id" value="<?php echo $empleado->id?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
  <div class="form-row"> 
    <div class="col">
      <label for="validationCustom01">Nombre(s)</label>
      <input type="text" class="form-control" id="validationCustom01" name="nombres" value="<?php echo $empleado->nombres?>" disabled>
    </div>

    <div class="col">
      <label for="validationCustom02">Apellido Paterno</label>
      <input type="text" class="form-control" id="validationCustom02" name="apellido1" value="<?php echo $empleado->apellido1?>" disabled>
    </div>

    <div class="col">
      <label for="validationCustom03">Apellido Materno</label>
      <input type="text" class="form-control" id="validationCustom03" name="apellido2" value="<?php echo $empleado->apellido2?>" disabled>
    </div>
  </div>

<!-------------------------------Precio, Cantidad, Status---------------------------------------->
  <div class="form-row">

    <div class="col-4">
      <label for="validationCustom04">Puesto</label>
      <input type="text" class="form-control" id="validationCustom04" name="puesto" value="<?php echo $empleado->puesto?>" disabled>
    </div>

    <div class="col-4">
            <label for="validationCustom06">Status</label>
            <select name="status" id="status" class="form-control" value="<?php echo $empleado->status?>">
              <option>Existente</option>
              <option>Pocos disponibles</option>
              <option>Agotado</option>
              <option>Inexistente</option>
          </select>
        </div>

    <div class="col-3">
      <label for="validationCustom05">Fecha Ingreso</label>
      <input type="date" class="form-control" id="validationCustom05" name="fecha_ingreso" value="<?php echo $empleado->fecha_ingreso?>" disabled>
    </div>


    
  </div>


<!------------------------------------Descripcion--------------------------------------------->
<div class="form-row">

    <div class="col-3">
      <label for="validationCustom10">Correo</label>
      <input type="text" class="form-control" id="validationCustom10" name="correo" value="<?php echo $empleado->correo?>" disabled>  
    </div>

    <div class="col-3">
      <label for="validationCustom09">Contraseña</label>
      <input type="password" class="form-control" id="validationCustom09" name="contrasena" value="<?php echo $empleado->contrasena?>" disabled>  
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
      <input type="submit" class=" col-8 btn btn-danger mx-auto" value="Eliminar empleado">

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