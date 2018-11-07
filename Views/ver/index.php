
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
    	<h3 align="center" style="color: ##563d7c">Aplicaciones web</h3>
      <th scope="col">Alumno</th>
      <th scope="col"></th>
      <th scope="col"></th>
       <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Unidad I</th>
      <th scope="col">Unidad II</th>
      <th scope="col">Unidad III</th> 
      <th scope="col">Unidad IV</th>
      <th scope="col">Unidad V</th>
    </tr>
  </thead>
  <tbody>
  	 <?php
            while ($row=mysqli_fetch_array($datos))
            {
        ?>
                <tr>
                    <!-- <td><?php echo $row[0]?></td> -->
                    <td><?php echo $row[2]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[1]?></td>
                    <!-- <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> -->
                    <th scope="col"><button class="btn btn-success editar" id="<?php echo $fila['id_usuario'] ?>">Editar</button> </th>          
                    <td><a clas="" style="color: red" href="#">Eliminar</a></td>          
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

<script type="text/javascript">
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
</script>