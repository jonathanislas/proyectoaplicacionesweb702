<?php 
namespace AppData\Controller;
use AppData\Model\Ver;
class verController{
	private $ver;
	function __construct(){
		$this->ver=new Ver();
	}
	function index(){
		$datos=$this->ver->getAlumns();
		return $datos;

	}
	function ver(){
		
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