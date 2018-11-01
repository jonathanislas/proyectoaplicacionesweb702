<?php 
namespace AppData\Controller;
use AppData\Model\Acentar;
class acentarController{
	private $acentar;
	function __construct(){
		$this->acentar=new Acentar();
	}
	function index(){
		$datos[0]=$this->acentar->getacentarpersona();
		$datos[1]=$this->acentar->getacentarmateria();
		return $datos;
	}
	public function guardar()
	{
		if (isset($_POST))
		{
			$this->acentar->set("id_persona",$_POST['acentarperosona']);
			$this->acentar->set("id_materia",$_POST['acentarmateria']);
			?>
			<script type="text/javascript">
				window.location.href="<?php echo URL?>acentar";
			</script>
			<?php 
		}
	}
	function __destruct(){

	}
}