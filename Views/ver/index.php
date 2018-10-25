<!-- <style type="text/css">
.datagrid table { border-collapse: collapse; text-align: center; width: 100%;}
.datagrid {font: normal 12px/100% Verdana, Arial, Helvetica, sans-serif; background: ; overflow: hidden; border: 2px solid #000; width: 100%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; color: }
</style> -->
<!-- <table align="center" border="1" cellpadding="2" cellspacing="2" class="table">
		<thead> 
			<th colspan="100" rowspan="1" align="center">Materia</th>
			<th width='100' colspan="1" rowspan="1" align="center">Unidad 1</th>
			<th width='100' colspan="1" rowspan="1" align="center">Unidad 2</th>
			<th width='100' colspan="1" rowspan="1" align="center">Unidad 3</th>
			<th width='100' colspan="1" rowspan="1" align="center">Unidad 4</th>
			<th width='100' colspan="1" rowspan="1" align="center">Promedio</th>
		</thead>	
</table> -->
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
    	<h3 align="center" style="color: ##563d7c">Aplicaciones web</h3>
      <th scope="col">Alumno</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Unidad I</th>
      <th scope="col">Unidad II</th>
      <th scope="col">Unidad III</th>
      <th scope="col">Unidad IV</th>
      <th scope="col">Promedio</th>
      <th scope="col"></th>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a clas="" style="color: red" href="#">Eliminar</a></td>          
                </tr>
        <?php
            }
        ?>
  </tbody>
</table>
