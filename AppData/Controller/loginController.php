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
			$this->login->set("nikname",$_POST['nikname']);
			$this->login->set("password",$_POST['password']);
			$this->login->guardar();
			?>
			<script type="text/javascript">
                swal({
                    title: "Agregado Correctamente",
                    position: "center",
                    backdrop: "linear-gradient(green, orange)",
                    background: "white",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 3000
                });
				window.location.href="<?php echo URL?>login";
			</script>
			<?php 
		}
	}
	function __destruct()
	{

	}

	public function verify(){
		if(isset($_POST)){
			$this->login->set("nombre", $_POST["usuario"]);
			$this->login->set("contraseña", $_POST["password"]);
			$datos = $this->login->verify();
			if (mysqli_num_rows($datos) > 0){
				$datos=mysqli_fetch_assoc($datos);
				var_dump($datos);
				$_SESSION["nombre"]=$datos["nombre"] . " " . $datos["ap_p"] . " " . $datos["ap_m"];
			} else {
				$_SESSION["error_login"] = "los datos no coinciden con nuesros registros";
			}?>
			<script type="text/javascript">
    			// window.location.href = "<?php echo URL?>";
			</script>
	<?php
		}
	}

public function registrar(){
		
	}
	}
	?>