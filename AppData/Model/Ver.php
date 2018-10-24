<?php
namespace AppData\Model;
class Ver{
	function __construct(){

	}
	public function set($atributo,$valor){
		$this->$atributo=$valor;
	}
	public function get($atributo){
		return $this->$atributo;
	}
	public function getOne(){

	}
	public function getalumnos(){
		$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p,usuario u WHERE p.id_usuario=u,id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap ASC";
		$datos=$this->conexion->QueryResulrado($sql);
	}
}