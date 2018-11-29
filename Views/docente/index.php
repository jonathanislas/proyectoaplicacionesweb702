<div class="container"><!-- <?php
    // if(mysqli_num_rows($datos)>0){
  ?> -->
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
          <br><h3 style="color: ##563d7c"><i><b>Docentes</b></i><div class="col-md-9 offset-md-9">
  <a class="btn btn-success" href="<?php echo URL ?>registrar">Registrar</i></a>
  </div></h3><br>
        <th scope="col">Nombre Docente</th>
        <th scope="col"></th>
        <th scope="col"></th>
         <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
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
                      <!-- <td><?php echo $row[0]?></td> -->
                      <!-- <td><?php echo $row[2]?></td>
                      <td><?php echo $row[3]?></td>
                      <td><?php echo $row[1]?></td> -->
                      <!-- <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td> -->
                      <th scope="col"><button class="btn btn-success editar" id="<?php echo $fila['id_usuario'] ?>" href="<?php echo URL ?>registro">Editar</button> </th>          
                      <th scope="col"><a class="btn btn-danger" href="<?php echo URL ?>docente/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</button> </th>
                      <!-- <td><a clas="" style="color: red" href="#">Eliminar</a></td>           -->
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
</div>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $(".editar").click(function(){
      var id=$(this).attr('id');
      $.post("<?php echo URL ?>ver/get/"+id,{},function(data){
        if(data){
          data=JSON.parse(data)
          $("#nombre").val(data['nombre'])
          $("#app").val(data['ap_p'])
          $("#apm").val(data['ap_m'])
          $("#myModal").modal('show');
        }
      })
    })
  })
</script> -->
<script type="text/javascript">
  $(document).ready(function(){
    $(".editar").click(function(){
    // window.open("<?php echo URL?>rmateria/printmateria");
    window.location.href="<?php echo URL?>docente/editar";    
    })
  })
</script>
