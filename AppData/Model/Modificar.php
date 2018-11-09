<?php
namespace AppData\Model;
class Modificar{
	function __construct(){
		$this->conexion=new conexion();

	}
	public function set($atributo,$valor){
		$this->$atributo=$valor;
	}
	public function get($atributo){
		return $this->$atributo;
	}
	public function getmodificarpersona()
	{
		$modificarpersona="SELECT p.id_persona, p.nombre, p.ap_p, p.ap_m FROM persona p ORDER BY p.ap_p ASC";
		$datos=$this->conexion->QueryResultado($modificarpersona);
		return $datos;
	}
	public function getmodificarmateria()
	{
		
		$modificarmateria="SELECT id_materia, desc_materia FROM materias";
		$datos=$this->conexion->QueryResultado($modificarmateria);
		return $datos;

	}
	public function getmodificargrupo()
	{
		$modificarpersona="SELECT id_grupo, desc_grupo from grupos";
		$datos=$this->conexion->QueryResultado($modificarpersona);
		return $datos;
	}
	public function getmodificarunidad()
	{
		
		$modificarmateria="SELECT id_unidad, desc_unidad from unidades";
		$datos=$this->conexion->QueryResultado($modificarmateria);
		return $datos;
	}
	public function getOne(){

	}
}