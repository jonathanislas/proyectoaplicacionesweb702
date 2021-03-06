<form id="form-reg" class="" action="<?php echo URL ?>login/guardar" method="post">
<div class="container" style="margin-top:5em;">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="container">
      <div class="row centered-form">
      <div class="">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h3 class="panel-title">Registro</h3>
          </div>
          <div class="panel-body">
            <form role="form">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="ap_p" id="ap_p" class="form-control input-sm" placeholder="Apellido Paterno">
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="ap_m" id="ap_m" class="form-control input-sm" placeholder="Apellido Materno" required="true">
                        </div>
                    </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="edad" id="edad" class="form-control input-sm" placeholder="Edad">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control" placeholder="tipo" name="id_sexo">
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control" placeholder="tipo" name="id_usuario">
                            <option value="1">Alumno</option>
                            <option value="2">Docente</option>
                            <option value="3">Jefe de divición</option>
                        </select>
                    </div>
                </div>
                 </div>

              <div class="form-group">
                <input type="email" name="correo" id="correo" class="form-control input-sm" placeholder="Correo Electronico">
              </div>
              <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                        <div class="form-group">
                        <input type="text" name="nikname" id="nikname" class="form-control input-sm" placeholder="Nombre de Usuario">
                </div>

                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                  </div>
                <script>
                    document.querySelector(".btn").addEventListener('click', guardar(){
                        swal("Our First Alert");
                    });
                </script>
              <input type="submit" value="Guardar" class="btn btn-success">

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
<!-- <script type="text/javascript">

        $("#Registrar").click(function()
        {
            $("#form-reg").submit();
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
                            
                        },
                    id_sexo:
                        {
                            required:true,
                            int:true,
                        },
                    id_usuario:
                        {
                            required:true,

                        },
                    nikname:
                        {
                            required:true,

                        },
                    password:
                        {
                            required:true,

                        },
                },
            messages:
                {
                    nombre:
                        {
                            required:"Nombre obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    ap_p:
                        {
                            required:"Apellido paterno obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    ap_m:
                        {
                            required:"Apellido materno obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    edad:
                        {
                            required:"Edad obligatoria",

                        },
                    id_sexo:
                        {
                            required:"Sexo obligatorio",
                        },
                    id_usuario:
                        {
                            required:"Tipo de usuario obligatoria",

                        },
                    nikname:
                        {
                            required:"Nombre de usuario obligatoria",

                        },
                    password:
                        {
                            required:"Contraseña obligatoria",

                        },
                },
        });

    </script> -->