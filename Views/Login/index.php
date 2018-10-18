<!-- ------------------------PRUEBA DE LOGIN----------------- -->
<br><br><br><br>
<style type="text/css">.boton{text-align:center;}</style>
<form id="form-reg">

	<div class="row">
		<div class="col"></div>
		<div class="col">		
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">Nickname</label>
		    <div class="col-sm-10">
		      <input name="nic" type="text" class="form-control" id="inputEmail3" placeholder="Nickname">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
                    nic:
                        {
                            required:true,
                            texto:true,
                        },
                    pass:
                        {
                            required:true,
                            texto:true,
                        },
                   
                   
                },
            messages:
                {
                    nic:
                        {
                            required:"Nombre obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    pass:
                        {
                            required:"Apellido paterno obligatorio",
                            texto:"Solo puede introducir texto"
                        },
                    
                },
        });

    </script>