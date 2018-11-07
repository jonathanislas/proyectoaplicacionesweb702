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

		// $this->calificaciones->set("id",$id);
		// $this->calificaciones->delete();
		
		// <script type="text/javascript"> -->
			
		 // </script> -->
		
	}
	function __destruct(){

	}
}