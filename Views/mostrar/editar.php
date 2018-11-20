<div class="container" style="margin-top:5em;">
  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="container">
          <div class="row centered-form">
            <!-- <div class=""> -->
              <div class="panel panel-default">
                <div class="panel-heading text-center">
                  <h3 class="panel-title"><i><b>Editar</b></i></h3>               
                  <form class="form-group" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre"></input>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="app" placeholder="Apellido Paterno"></input>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="apm" placeholder="Apellido Materno"></input>
                    </div>
                  </form>
                  <div class="form-group">
                    <button type="button" class="btn btn-success actualiza" data-dismiss="modal">Actualizar</button>
                  </div>
                </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".actualiza").click(function(){
      var id=$(this).attr('id');
      // $.post("<?php echo URL ?>ver/get/"+id,{},function(data){
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