<?php
namespace AppData\Model;
class Reporte{
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
	public function getjefe(){
		$sql="SELECT p.id_persona, u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_persona=u.id_usuario AND u.id_tipo_usuario= 3 ORDER BY p.ap_p ASC";
		// $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
		// echo $sql;
		$datos=$this->conexion->QueryResultado($sql);
		return $datos;
	}
	public function getAlumns(){
		$sql="SELECT p.id_persona, u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_persona=u.id_usuario AND u.id_tipo_usuario= 1 ORDER BY p.ap_p ASC";
		// $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
		// echo $sql;
		$datos=$this->conexion->QueryResultado($sql);
		return $datos;
	}
	public function getmaestro(){
		// $sql="SELECT p.nombre, p.ap_p, p.ap_m, m.desc_materia, g.desc_grupo FROM persona p, materias m, grupos g, asigna_mat a WHERE p.id_persona=a.id_persona AND m.id_materia=a.id_materia AND g.id_grupo=a.id_grupo AND p.id_usuario=10";
		// $sql="SELECT p.nombre, p.ap_p, p.ap_m, m.desc_materia, g.desc_grupo FROM persona p, materias m, grupos g, asigna_mat a, usuario u WHERE p.id_persona=a.id_persona AND m.id_materia=a.id_materia AND g.id_grupo=a.id_grupo AND p.id_usuario=u.id_usuario AND u.id_tipo_usuario=2";
		$sql="SELECT p.id_persona, u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_persona=u.id_usuario AND u.id_tipo_usuario= 2 ORDER BY p.ap_p ASC";
		$datos=$this->conexion->QueryResultado($sql);
		return $datos;
	}
}