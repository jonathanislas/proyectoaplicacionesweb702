<?php 
namespace AppData\Controller;
use AppData\Model\Docente;
class docenteController{
	private $docente;
	function __construct(){
		$this->docente=new Docente();
	}
	function index(){
		$datos=$this->docente->getAlumns();
		return $datos;

	}
	function ver(){
		
	}
	function eliminar($id){
		$this->docente->set("id",$id);
		$this->docente->delete();
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				swal({
					title: " ",
					text: "Eliminado correctamente",
					timer: 2000
				});
				setTimeout(function(){
					window.location.href="<?php echo URL ?>docente"
				},2100);
			})
		</script>
		<?php
	}
	function get($id){
		$this->docente->set("id",$id);
		$datos=$this->docente->getOne();
		if(mysqli_num_rows($datos)>0){
			$datos=mysqli_fetch_assoc($datos);
		}
		echo json_encode($datos);

		// $this->calificaciones->set("id",$id);
		// $this->calificaciones->delete();
		
		// <script type="text/javascript"> -->
			
		 // </script> -->
		
	}
	public function updatePer(){
		if (isset($_POST)){
			$this->login->set("nombre",$_POST['nombre']);
			$this->login->set("ap_p",$_POST['ap_p']);
			$this->login->set("ap_m",$_POST['ap_m']);
			// $this->login->set("edad",$_POST['edad']);
			// $this->login->set("id_sexo",$_POST['id_sexo']);
			// $this->login->set("id_usuario",$_POST['id_usuario']);
			// $this->login->set("correo",$_POST['correo']);
			// $this->login->set("nikname",$_POST['nikname']);
			// $this->login->set("password",$_POST['password']);
			$this->login->updatePer();
			?>
			<script type="text/javascript">
                swal({
					title: " ",
					text: "Editado correctamente",
					timer: 2000
				});
				window.location.href="<?php echo URL?>login";
			</script>
			<?php 
		}
	}
	function __destruct(){

	}
}