<!-- ------------------------PRUEBA DE LOGIN----------------- -->
<br><br><br><br>
<style type="text/css">.boton{text-align:center;}</style>
<form id="form-reg" method="post" action="<?php echo URL?>Login/Verify">

	<div class="row">
		<div class="col"></div>
		<div class="col">		
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
		    <div class="col-sm-11">
		      <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Ingrese Usuario">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
		    <div class="col-sm-11">
		      <input name="contraseña" type="password" class="form-control" id="contraseña" placeholder="Ingrese Constraseña">
		    </div>
		  </div>
		  <fieldset class="form-group">
		    <div class="row">
		  </fieldset>
		  <!-- <div class="boton"> -->
		    <div class="col-sm-10 boton">
		      <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
		    </div>
		  <!-- </div> -->
		</div>
		<div class="col"></div>
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
                    nikname:
                        {
                            required:true,
                            texto:true,
                        },
                    password:
                        {
                            required:true,
                            texto:false,
                        },
                   
                   
                },
            messages:
                {
                    nickname:
                        {
                            required:"Nombre obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    
                    
                },
        });

    </script>