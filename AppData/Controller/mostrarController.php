<?php 
namespace AppData\Controller;
use AppData\Model\Mostrar;
class mostrarController{
	private $mostrar;
	function __construct(){
		$this->mostrar=new Mostrar();
	}
	function index(){
		$datos=$this->mostrar->getAlumns();
		return $datos;

	}
	function ver(){
		$datos=$this->mostrar->getAlumns();
			return $datos;
		
	}
	function eliminar($id){
		$this->mostrar->set("id",$id);
		$this->mostrar->delete();
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				swal({
					title: "Success",
					text: "Eliminado correctamente",
					timer: 2000
				});
				setTimeout(function(){
					window.location.href="<?php echo URL ?>mostrar"
				},2100);
			})
		</script>
		<?php
	}
	function get($id){
		$this->mostrar->set("id",$id);
		$datos=$this->mostrar->getOne();
		if(mysqli_num_rows($datos)>0){
			$datos=mysqli_fetch_assoc($datos);
		}
		echo json_encode($datos);
		
	}

	function edit(){
			$data=$_POST['arreglo'];
			$this->calificaciones->set("id",$data[0]['value']);
			$this->calificaciones->set("nombre",$data[1]['value']);
			$this->calificaciones->set("ap_p",$data[2]['value']);
			$this->calificaciones->set("ap_m",$data[3]['value']);
			$this->calificaciones->updatePer();
		}
	function __destruct(){

	}
}