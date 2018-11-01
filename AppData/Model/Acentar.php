<?php
namespace AppData\Model;
class Acentar{
	function __construct(){
		$this->conexion=new conexion();
	}
	public function set($atributo,$valor){
		$this->$atributo=$valor;
	}
	public function get($atributo){
		return $this->$atributo;
	}
	public function getOne(){

	}
	public function getacentarpersona()
	{
		$acentarpersona="SELECT p.id_persona, p.nombre, p.ap_p, p.ap_m FROM persona p ORDER BY p.ap_p ASC";
		$datos=$this->conexion->QueryResultado($acentarpersona);
		return $datos;
	}
	public function getacentarmateria()
	{
		
		$acentarmateria="SELECT id_materia, desc_materia FROM materias";
		$datos=$this->conexion->QueryResultado($acentarmateria);
		return $datos;

	}
}