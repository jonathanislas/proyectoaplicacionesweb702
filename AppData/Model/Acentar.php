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
	public function getAlumns(){
		$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_persona=u.id_usuario ORDER BY p.ap_p ASC";
		// $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
		// echo $sql;
		$datos=$this->conexion->QueryResultado($sql);
		return $datos;
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
		$acentargrupo="SELECT id_grupo, desc_grupo from grupos";
		$datos=$this->conexion->QueryResultado($acentargrupo);
		return $datos;
	}
	public function getacentarunidad()
	{
		
		$acentarmateria="SELECT id_unidad, desc_unidad from unidades";
		$datos=$this->conexion->QueryResultado($acentarmateria);
		return $datos;

	}
	public function getacentarsemestre()
	{
		
		$acentarsemestre="SELECT id_semestre, descripcion from semestre";
		$datos=$this->conexion->QueryResultado($acentarsemestre);
		return $datos;

	}
		public function guardar()
	{
		$sql="INSERT INTO calificaciones (calificacion, id_materia, id_persona, id_unidad) VALUES ('{$this->calificacion}','{$this->id_materia}','{$this->id_persona}','{$this->id_unidad}')";
		$this->conexion->QuerySimple($sql);
		
	}
}