<?php
    if ($datos->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $persona="";
                                while ($row = $datos->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $persona .=" <option value='".$row['id_persona']."'>".$row['nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }
                            } 
?>

<form id="form-reg" class="" action="<?php echo URL ?>asignarmateria/guardar" method="post">
<div class="container" style="margin-top:5em;">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="container">
      <div class="row centered-form">
      <div class="">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h3 class="panel-title">Asignar Materia</h3>
          </div>
          <div class="panel-body">
            <form role="form">
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select name="id_persona"  class="form-control">
                            <option Selected value="0" >Selecciona el alumno</option>
                            <?php echo $persona; ?>
                       </select>

                    </div>
                </div>
                 <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="id_materia" id="id_materia" class="form-control input-sm" placeholder="Materia">
                  </div>
                </div>
                 <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="id_grupo" id="id_grupo" class="form-control input-sm" placeholder="Grupo">
                  </div>
                </div>

                 </div>
              <input type="submit" value="Guardar" class="btn">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    <div>
  <div class="col-md-4"></div>
      </div>
</div>
</div>
</form>
<script type="text/javascript">

        $("#Login").click(function()
        {
            $("#form-reg").submit();
        });

        //validaciones del formulario
        jQuery.validator.addMethod("texto", function(value)
        {
            return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
        });

        $("#form-reg").validate({
            errorClass:"invalid",
            rules:
                {
                    nombre:
                        {
                            required:true,
                            texto:true,
                        },
                    ap_p:
                        {
                            required:true,
                            texto:true,
                        },
                    ap_m:
                        {
                            required:true,
                            texto:true,
                        },     
                    edad:
                        {
                            required:true,
                            // texto:true,
                        },        
                     nickname:
                        {
                            required:true,
                            // email:true,
                        }, 
                    nikname:
                        {
                            required:true,
                            // texto:true,
                        }, 
                    password:
                        {
                            required:true,
                            // texto:true,
                        },                                
                },
            messages:
                {
                    nombre:
                        {
                            required:"Nombre Obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    ap_p:
                        {
                            required:"Apellido paterno Obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    ap_m:
                        {
                            required:"Apellido Materno Obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    edad:
                        {
                            required:"Edad Obligatoria",
                            texto:"Solo puede introducir texto"
                        },
                    nickname:
                        {
                            required:"Correo Obligatorio",
                            email:"Estrucutra de correo incorrecta"
                        },
                    nikname:
                        {
                            required:"Nombre de Usuario Obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    password:
                        {
                            required:"Contraseña Obligatoria",
                            texto:"Solo puede introducir texto"
                        },
                },
        });

    </script>