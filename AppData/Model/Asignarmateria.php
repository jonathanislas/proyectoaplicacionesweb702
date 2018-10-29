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
		$persona="SELECT id_persona, nombre FROM persona";
		$datos=$this->conexion->QueryResultado($persona);
		return $datos;


	}
	public function guardar()
	{
		$sql="INSERT INTO asigna_mat (id_persona, id_materia, id_grupo) VALUES ('{$this->id_persona}','{$this->id_materia}','{$this->id_grupo}')";
		$this->conexion->QuerySimple($sql);
		
	}

}