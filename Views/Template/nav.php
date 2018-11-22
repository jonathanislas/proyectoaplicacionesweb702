<?php
session_start();
?>

<style type="text/css">
.login{
  text-align: right;
  color: #fff;
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
        echo $_SESSION['nombre'];
        ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URL?>Login" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Calificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URL?>ver">Ver</a>
            <a class="dropdown-item" href="<?php echo URL?>mostrar">Mostrar</a>
          </div>
        </li>

<?php
      }
      else
        if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
{
echo $_SESSION['nombre'];
?>


          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URL?>Login" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Calificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URL?>acentar">Acentar</a>
            <a class="dropdown-item" href="<?php echo URL?>modificar">Modificar</i></a>
          </div>
        </li>
        
        
 <?php
      }
      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 3)
      {
      echo $_SESSION['nombre'];
      ?>


 <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i> Materia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo URL?>asignarmateria">Asignar</i></a>
            </div>
          </li>
  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i>Reportes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo URL?>rmateria">Materia</a>
              <a class="dropdown-item" href="<?php echo URL?>rgrupo">Grupo</a>
              <a class="dropdown-item" href="<?php echo URL?>raprobacion">Aprobacion</i></a>
            </div>
          </li>

    <?php }
      }
      ?>


    </ul>
  </div>

<?php if (isset($_SESSION['id_tipo_usuario']))
{
?>
    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-danger" href="<?php echo URL; ?>Login/logout">Salir</a>
    </form>
<?php
}
else
  {
?>

  <div class="login">
     <li class="nav-item dropdown">
        <a class="nav-limk" href="<?php echo URL ?>login"><i>Inicia Sesion</a>
        <a class="nav-limk" href="<?php echo URL ?>registrar">Registrar</i></a>
      </li>
  </div>
<?php
}
?>

</nav>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Calificaciones</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <span><?php if(isset($_SESSION['id_tipo_usuario'])) echo $_SESSION['id_tipo_usuario']; ?></span>
      <?php if(isset($_SESSION['id_tipo_usuario']) and ($_SESSION['id_tipo_usuario']==1 or $_SESSION['id_tipo_usuario']==2)){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo "Home"; ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Calificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo "ver"; ?>">Ver</a>
            <?php if($_SESSION['id_tipo_usuario']==2){ ?>
            <a class="dropdown-item" href="<?php echo "acentar"; ?>">Acentar</a>
            <a class="dropdown-item" href="<?php echo "modificar"; ?>">Modificar</a>
            <?php } ?>
          </div>
        </li>
      <?php } ?>
        <?php if(isset($_SESSION['id_tipo_usuario']) and ($_SESSION['id_tipo_usuario']==3)){ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Materia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo "asignarmateria"; ?>">Asignar</a>
            </div>
          </li>
          <?php } ?>
        <?php if(isset($_SESSION['id_tipo_usuario']) and ($_SESSION['id_tipo_usuario']==2 or $_SESSION['id_tipo_usuario']==3)){ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Reportes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo "rmateria"; ?>">Materia</a>
              <a class="dropdown-item" href="<?php echo "rgrupo"; ?>">Grupo</a>
              <a class="dropdown-item" href="<?php echo "raprobacion"; ?>">Aprobacion</a>
            </div>
          </li>
        <?php } ?>
    </ul>
  </div>
  <div class="login">
     <li class="nav-item dropdown">
        <a class="nav-limk" href="<?php echo "login"; ?>">Inicia Sesion</a>
        <a class="nav-limk" href="<?php echo "registrar"; ?>">Registrar</a>
      </li>
  </div>
</nav> -->