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
	function __destruct(){

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
	


	}