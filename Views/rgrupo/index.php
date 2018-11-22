<div class="container">
  <div class="row">
    <div class="col-">
      <br><h3 align="center" style="color: ##563d7c"><i><b>Grupos</b></i></h3><br>
    </div>
    <div class="col-"></div>
    <div class="col-">
      <br><button type="button" class="btn btn-info pdf"><i><b>Generar PDF</b></i></button>
    </div>
  </div>
  <!-- <?php
    // if(mysqli_num_rows($datos)>0){
  ?> -->
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
      	
        <th scope="col">Semestre</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Grupos</th>
        
     
      </tr>
    </thead>
    <tbody>
    	 <?php
              while ($fila=mysqli_fetch_assoc($datos))
              {
          ?>

                  <tr>
                      <td scope="col"><?php echo $fila['descripcion'] ?></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"><?php echo $fila['desc_grupo'] ?></td>
                           
                  </tr>
         <?php
              }
          ?>
          
    </tbody>
  </table>
  <!-- <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editando</h4>
          <button type="button" class="close" data-dismiss="modal">&times</button>
        </div>
        <div class="modal-body">
          <form class="form-signin" action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="nombre" nombre="nombre"></input>
              <label for="nombre">Nombre</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="app" nombre="ap_p"></input>
              <label for="nombre">Apellido Paterno</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="apm" nombre="ap_m"></imput>
              <label for="nombre">Apellido Materno</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-succes" data-dismiss="modal">Actualizar</button>
        </div>
      </div>
    </div>
  </div> -->
<!-- 
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editando</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body contenido">
          <form class="form-signin" action="" method="post">
            <input type="text" class="form-control" id="nombre"></input>
            <input type="text" class="form-control" id="app"></input>
            <input type="text" class="form-control" id="apm"></input>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
</div>-->
<script type="text/javascript">
  $(document).ready(function(){
    $(".pdf").click(function(){
    // window.open("<?php echo URL?>rmateria/printmateria");
    window.location.href="<?php echo URL?>rgrupo/printgrupo";    
    })
  })
</script>
