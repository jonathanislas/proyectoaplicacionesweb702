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
	public function getacentargrupo()
	{
		$acentarpersona="SELECT id_grupo, desc_grupo from grupos";
		$datos=$this->conexion->QueryResultado($acentarpersona);
		return $datos;
	}
	public function getacentarunidad()
	{
		
		$acentarmateria="SELECT id_unidad, desc_unidad from unidades";
		$datos=$this->conexion->QueryResultado($acentarmateria);
		return $datos;

	}
		public function guardar()
	{
		$sql="INSERT INTO calificaciones (calificacion, id_materia, id_persona, id_unidad) VALUES ('{$this->calificacion}','{$this->id_materia}','{$this->id_persona}','{$this->id_unidad}')";
		$this->conexion->QuerySimple($sql);
		
	}
}