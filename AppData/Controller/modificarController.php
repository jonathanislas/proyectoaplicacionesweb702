<?php 
namespace AppData\Controller;
use AppData\Model\Modificar;
class modificarController{
	private $modificar;
	function __construct(){
		$this->modificar=new Modificar();
	}
	function index(){
		$datos[0]=$this->modificar->getmodificarpersona();
		$datos[1]=$this->modificar->getmodificarmateria();
		$datos[2]=$this->modificar->getmodificargrupo();
		$datos[3]=$this->modificar->getmodificarunidad();
		return $datos;
	}
	function __destruct(){

	}
}