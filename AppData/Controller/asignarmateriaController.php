<?php 
namespace AppData\Controller;
use AppData\Model\Asignarmateria;
class asignarmateriaController
{
	private $asignarmateria;
	function __construct()
	{
		$this->asignarmateria=new Asignarmateria();
	}
	function index()
	{
		$datos[0]=$this->asignarmateria->getpersona();
		
		$datos[1]=$this->asignarmateria->getmateria();
		
		$datos[2]=$this->asignarmateria->getgrupo();
		return $datos;
		
	}
	public function guardar()
	{
		if (isset($_POST))
		{
			$this->asignarmateria->set("id_persona",$_POST['id_persona']);
			$this->asignarmateria->set("id_materia",$_POST['id_materia']);
			$this->asignarmateria->set("id_grupo",$_POST['id_grupo']);
			$this->asignarmateria->guardar();
			?>
			<script type="text/javascript">
                swal({
                    title: "Alumno Agregado Correctamente",
                    position: "center",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 3000
                });
				window.location.href="<?php echo URL?>asignarmateria";
			</script>
			<?php 
		}
	}
	function __destruct()
	{

	}
}