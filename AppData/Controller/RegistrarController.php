<?php 
namespace AppData\Controller;
use AppData\Model\Registrar;
class RegistrarController{
	private $login;
	function __construct(){
		$this->registrar=new registrar();
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
				<script type="text/javascript">
                swal({
					title: " ",
					text: "Editado correctamente",
					timer: 2000
				});
                // swal({
                //     title: "Agregado Correctamente",
                //     position: "center",
                //     allowOutsideClick: false,
                //     allowEscapeKey: false,
                //     allowEnterKey: false,
                //     showConfirmButton: false,
                //     showCancelButton: false,
                //     timer: 3000
                // });
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