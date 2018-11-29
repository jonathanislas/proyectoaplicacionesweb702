<div class="container">
  <div class="row">
    <div class="col-">
      <br><h3 align="center" style="color: ##563d7c"><i><b>reporte</b></i></h3><br>
    </div>
    <div class="col-md-4 offset-md-4">
      <br><button type="button" class="btn btn-info pdf"><i><b>Generar PDF</b></i></button>
    </div>
  </div>
  <!-- <?php
    // if(mysqli_num_rows($datos)>0){
  ?> -->
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
      	
        <th scope="col">Alumno</th>
        <th scope="col"></th>
        <th scope="col"></th>
         <!-- <th scope="col">Editar</th>
        <th scope="col">Eliminar</th> -->
        <th scope="col">Unidad I</th>
        <th scope="col">Unidad II</th>
        <th scope="col">Unidad III</th> 
        <th scope="col">Unidad IV</th>
        <th scope="col">Unidad V</th>
        <th scope="col">Promedio</th>
      </tr>
    </thead>
    <tbody>
    	 <?php
              while ($fila=mysqli_fetch_assoc($datos))
              {
          ?>

                  <tr>
                      <td scope="col"><?php echo $fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre'] ?></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"><?php echo $fila['calificacion'] ?></td>

                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                  </tr>
         <?php
              }
          ?>
          
    </tbody>
  </table>

<script type="text/javascript">
  $(document).ready(function(){
    $(".pdf").click(function(){
    // window.open("<?php echo URL?>rmateria/printmateria");
    window.location.href="<?php echo URL?>rmateria/print";    
    })
  })

</script>
