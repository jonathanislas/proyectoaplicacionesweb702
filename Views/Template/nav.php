<?php
session_start();
?>

<style type="text/css">
.login{
  text-align: right;
  color: #fff;
}
.salir{
 
  padding-right: 2ex;
  color: #000;
}

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i>Calificaciones</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<?php

    if(isset($_SESSION['id_usuario']))
    {
        if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 1)
        {
          // echo "Bienvenido ";
        echo $_SESSION['nombre'];
        ?>
<form id="alumno">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URL?>Login" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Calificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URL?>ver">Ver</a>
            
          </div>
        </li>
</form>
<?php
      }
      else
        if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
{
echo $_SESSION['nombre'];
?>

<form id="docente">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URL?>Login" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Calificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URL?>ver">Mostrar</a>
            <a class="dropdown-item" href="<?php echo URL?>acentar">Acentar</a>
            <a class="dropdown-item" href="<?php echo URL?>modificar">Modificar</i></a>
          </div>
        </li>
    </form>   
        
 <?php
      }
      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 3)
      {
      echo $_SESSION['nombre'];
      ?>

<!-- <form id="jefe">

<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URL?>Login" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Calificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
            <a class="dropdown-item" href="<?php echo URL?>mostrar">Mostrar</a>
          </div>
        </li>

 <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i> Materia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo URL?>asignarmateria">Asignar</i></a>
            </div>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URL?>Login" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Comunidad
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URL?>mostrar">Mostrar Alumnos</a>
            <a class="dropdown-item" href="<?php echo URL?>docente">Mostrar Docentes</a>
          </div>
        </li>
  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i>Reportes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo URL?>rmateria">Materia</a>
              <a class="dropdown-item" href="<?php echo URL?>rgrupo">Grupo</a>
              <a class="dropdown-item" href="<?php echo URL?>raprobacion">Aprobacion</a>
              <a class="dropdown-item" href="<?php echo URL?>reprobacion">Reprobacion</i></a>
            </div>
          </li>
</form> -->
<form id="jefe">
            <li class="nav-item dropdown">
                <a class="nav-link   " data-toggle="dropdown" href="#" id="dropdown01" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?php echo URL; ?>ver">Mostrar</a>
                </div>

            </li>
</form>

<form id="jefe">

            <li class="nav-item dropdown">
                <a class="nav-link "  data-toggle="dropdown" href="#" id="dropdown03" role="button" aria-haspopup="true" aria-expanded="false">Materia</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="<?php echo URL?>asignarmateria">Asignar</i></a>               
                   </div>
            </li>
</form>

<form id="jefe">

            <li class="nav-item dropdown">
                <a class="nav-link "  data-toggle="dropdown" href="#" id="dropdown03" role="button" aria-haspopup="true" aria-expanded="false">Comunidad</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="<?php echo URL?>mostrar">Mostrar Alumnos</a>
            <a class="dropdown-item" href="<?php echo URL?>docente">Mostrar Docentes</a>               
                   </div>
            </li>
</form>

<form id="jefe">

            <li class="nav-item dropdown">
                <a class="nav-link "  data-toggle="dropdown" href="#" id="dropdown03" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                       <a class="dropdown-item" href="<?php echo URL?>rmateria">Materia</a>
              <a class="dropdown-item" href="<?php echo URL?>rgrupo">Grupo</a>
              <a class="dropdown-item" href="<?php echo URL?>raprobacion">Aprobacion</a>
             <a class="dropdown-item" href="<?php echo URL?>reprobacion">Reprobacion</i></a> 
            <!--  <a class="dropdown-item" href="<?php echo URL?>mostrar">Mostrar Alumnos</a> -->
            <!-- <a class="dropdown-item" href="<?php echo URL?>docente">Mostrar Docentes</a>                -->
                   </div>
            </li>
</form>

    <?php }
      }
      ?>


    </ul>
  </div>

<?php if (isset($_SESSION['id_tipo_usuario']))
{
?>
<div class="salir">
    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-danger salir" href="<?php echo URL; ?>Login/logout">Salir</a>
    </form>
    </div>
<?php
}
else
  {
?>

  <div class="login">
     <li class="nav-item dropdown">
        <a class="nav-limk" href="<?php echo URL ?>login"><i>Inicia Sesion</a>
        <!-- <a class="nav-limk" href="<?php echo URL ?>registrar">Registrar</i></a> -->
      </li>
  </div>
<?php
}
?>

</nav>
