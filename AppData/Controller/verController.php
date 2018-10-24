<?php 
namespace AppData\Controller;
use AppData\Model\Ver;
class verController{
	private $ver;
	function __construct(){
		$this->ver=new Ver();
	}
	function index(){

	}
	function ver(){
		$datos=$this->calificaciones->getAlumns();
		return $datos;
	}
	function eliminar(){
		$this->calificaciones->set("id",$id);
		$this->calificaciones->delete();
		?>
		<script type="text/javascript">
			
		</script>
		<?php
	}
	function __destruct(){

	}
}