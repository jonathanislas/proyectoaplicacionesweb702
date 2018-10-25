<?php
namespace AppData\Model;
class Ver{
	private $conexion;
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
		$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario ORDER BY p.ap_p ASC";
		// $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
		// echo $sql;
		$datos=$this->conexion->QueryResultado($sql);
		return $datos;
	}
}