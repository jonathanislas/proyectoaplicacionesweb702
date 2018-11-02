<?php
namespace AppData\Model;
class Asignarmateria{
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
	public function getpersona()
	{
		$persona="SELECT id_persona, nombre, ap_p, ap_m FROM persona";
		$datos=$this->conexion->QueryResultado($persona);
		return $datos;

	}
	public function getmateria()
	{
		
		$materia="SELECT id_materia, desc_materia FROM materias";
		$datos=$this->conexion->QueryResultado($materia);
		return $datos;

	}
	public function getgrupo()
	{
		
		$grupo="SELECT id_grupo, desc_grupo FROM grupos";
		$datos=$this->conexion->QueryResultado($grupo);
		return $datos;
	}
	public function guardar()
	{
		$sql="INSERT INTO asigna_mat (id_persona, id_materia, id_grupo) VALUES ('{$this->id_persona}','{$this->id_materia}','{$this->id_grupo}')";
		$this->conexion->QuerySimple($sql);
		
	}

}