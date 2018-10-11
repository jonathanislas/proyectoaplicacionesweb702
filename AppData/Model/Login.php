<?php
namespace AppData\Model;
class Login{
	private $nombre, $contraseña;
	public function __construct(){
		$this->conexion= new conexion();
	}
	public function set($atributo,$valor){
		$this->$atributo=$valor;
	}
	public function get($atributo){
		return $this->$atributo;
	}
	public function verify()
	{
		$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m, u.id_tipo_usuario FROM persona p, usuario u,sexo s, tipo_usuario tu WHERE u.nickname='{$this->usuario}' AND u.password='{$this->contraseña}' AND p.id_usuario=u.id_usuario AND u.id_tipo_usuario=tu.id_tipo_usuario AND p.id_sexo=s.id_sexo";
		$dato=$this->conexion->QueryResultado($aql);
		return $dato;
	}
	public function registrar(){

	}
	public function guardar(){
		$sql="INSERT INTO persona(nombre, ap_p, ap_m, edad, id_sexo, id_usuario) VALUES ('{$this->nombre}','{$this->ap_p}','{$this->ap_m}','{this->sexo}','{$this->id_usuario}')";
		$this->conexion->QuerySimple($sql);
	}
}