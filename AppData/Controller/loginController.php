<?php 
namespace AppData\Controller;
use AppData\Model\Login;
class LoginController{
	private $login;
	function __construct(){
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
			$this->login->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
			$this->login->guardar();
			?>
			<script type="text/javascript">
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
			$this->login->set("usuario", $_POST["usuario"]);
			$this->login->set("contraseña", $_POST["contraseña"]);
			$datos = $this->login->verify();
			if (mysql_num_rows($datos)){
				$datos=mysqli_fetch_assoc($datos);
				$_SESSION["nombre"]=$datos["nombre"] . " " . $datos["ap_p"] . " " . $datos["ap_m"];
			} else {
				$_SESSION["error_login"] = "los datos no coinciden con nuesros registros";
			}?>
			<script type="test/javascript">
				window.location.href = "<?php echo URL?>";
			</script>
	<?php
		}
	}

public function registrar(){
		
	}
	}
	?>