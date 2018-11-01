<?php
    if ($datos[0]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarpersona="";
                                while ($row = $datos[0]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarpersona .=" <option value='".$row['id_persona']."'>".$row['ap_p']." ".$row['ap_m']." ".$row['nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }

                            } 
?>
<?php
    if ($datos[1]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarmateria="";
                                while ($row = $datos[1]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarmateria .=" <option value='".$row['id_materia']."'>".$row['desc_materia']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
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
            <h3 class="panel-title">Acentar Calificaciones</h3>
          </div>
          <div class="panel-body">
            <form role="form">
                <!-- <div class="row"> -->                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="acentarmateria"  class="form-control">
                            <option Selected value="0" >Materia</option>
                            <?php echo $acentarmateria; ?>
                       </select>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="acentargrupo"  class="form-control">
                            <option Selected value="0" >Grupo</option>
                            <?php echo $persona; ?>
                       </select>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="acentarpersona"  class="form-control">
                            <option Selected value="0" >Alumno</option>
                            <?php echo $acentarpersona; ?>
                       </select>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="acentarunidad"  class="form-control">
                            <option Selected value="0" >Unidad</option>
                            <?php echo $persona; ?>
                       </select>

                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="Calificacion" id="Calificacion" class="form-control input-sm" placeholder="Calificacion" required="true">
                  </div>
                

                 </div>
              <input type="submit" value="Acentar Calificacion" class="btn">

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
                    Calificacion:
                        {
                            required:true,
                            number:true,
                        },
                },
            messages:
                {
                    Calificacion:
                        {
                            required:"Se requiere una calificacion",
                            number:"**SOLO SE ACEPTAN NUMEROS**"
                        },
                },
        });

    </script>