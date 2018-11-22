<?php namespace AppData\Controller;
use AppData\Model\Login;
class LoginController
{
	private $login;
	function __construct()
	{
		$this->login=new Login();
	}
	function index(){

	}
	public function logout(){
		session_destroy();
	}
	
	public function guardar(){
		if (isset($_POST)){
			$this->login->set("nombre",$_POST['nombre']);
			$this->login->set("ap_p",$_POST['ap_p']);
			$this->login->set("ap_m",$_POST['ap_m']);
			$this->login->set("edad",$_POST['edad']);
			$this->login->set("id_sexo",$_POST['id_sexo']);
			$this->login->set("id_usuario",$_POST['id_usuario']);
			$this->login->set("correo",$_POST['correo']);
			$this->login->set("nikname",$_POST['nikname']);
			$this->login->set("password",$_POST['password']);
			$this->login->guardar();
			?>
			<script type="text/javascript">
                swal({
                    title: "Agregado Correctamente",
                    position: "center",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 10000
                });
				window.location.href="<?php echo URL?>login";
			</script>
			<?php 
		}
	}
	function __destruct()
	{

	}

	public function verify()
	{
		if(isset($_POST))
    		{
        	$this->login->set("usuario",$_POST["usuario"]);
    			$this->login->set("contraseña",$_POST["contraseña"]);

    			$datos=$this->login->verify();

    			if(mysqli_num_rows($datos)>0)
    			{
    				$datos=mysqli_fetch_assoc($datos);
    				if ($datos['id_tipo_usuario']== 1)
    					{
    						$_SESSION["id_usuario"]=$datos["id_usuario"];
    						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];
    						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];
    						?>
    						<script type="text/javascript">
    							window.location="<?php echo URL.'Home'?>";
    						</script>
    						<?php
    					}
    					else if ($datos['id_tipo_usuario']== 2)
    					{
    						$_SESSION["id_usuario"]=$datos["id_usuario"];
    						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];
    						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];

    						?>
    						<script type="text/javascript">
    							window.location="<?php echo URL.'Home'?>";
    						</script>
    						<?php
    					}
    					else if ($datos['id_tipo_usuario']== 3)
    					{
    						$_SESSION["id_usuario"]=$datos["id_usuario"];
    						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];
    						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];

    						?>
    						<script type="text/javascript">
    							window.location="<?php echo URL.'Home'?>";
    						</script>
    						<?php
    					}
    			}
    			else
    				{
    					?>
    						<script type="text/javascript">

                $(document).ready(function(){
                  swal({
                    title: "Usuario no registrado",
                    text: "Intende de nuevo",
                    type: "warning",
                    closeOnConfirm: false,
                    closeOnCancel: true,
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                  },
                  function(isConfirm){
                    if(isConfirm)
                    window.location.href = "<?php echo URL ?>login";
                  }
                );
                })
    					//alert("usuario no registrado");window.location.href="<?php echo URL.'Login' ?>";
    						</script>
    					<?php
    				}

    		}
	}

public function registrar()
{
		
	}
	}
	?>