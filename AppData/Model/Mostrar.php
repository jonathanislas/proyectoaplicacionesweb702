<?php
	namespace AppData\Model;
	class Mostrar{
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
		public function getAlumns(){
			$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_persona=u.id_usuario ORDER BY p.ap_p ASC";
			// $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
			// echo $sql;
			$datos=$this->conexion->QueryResultado($sql);
			return $datos;
		}
		public function delete(){
			$sql="DELETE FROM usuario
			WHERE id_usuario='{$this->id}'";
			$this->conexion->QuerySimple($sql);
			$sql="DELETE FROM persona
			WHERE id_persona='{$this->id}'";
			$this->conexion->QuerySimple($sql);
		}
		public function getOne(){
			$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m
						FROM persona p, usuario u
						WHERE p.id_usuario=u.id_usuario
						AND u.id_tipo_usuario=1
						AND p.id_usuario='{$this->id}'
						ORDER BY p.ap_p ASC";
			$datos=$this->conexion->QueryResultado($sql);
			return $datos;
		}
		public function updatePer(){
			$sql="UPDATE persona SET nombre='{$this->nombre}', ap_p='{$this->ap_p}', ap_m='{$this->ap_m}' WHERE id_usuario='$this->id'";
			$this->conexion->QuerySimple($sql);
		}
	}
?>