<?php
namespace AppData\Model;
class Rgrupo{
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
	public function getGrupo()
	{
		$sql="SELECT grupos.desc_grupo, semestre.descripcion FROM grupos, semestre WHERE grupos.id_semestre=semestre.id_semestre";
		$datos=$this->conexion->QueryResultado($sql);
		return $datos;
	}
}