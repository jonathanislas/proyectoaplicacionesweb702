<?php 
namespace AppData\Controller;
use AppData\Model\Raprobacion;
class raprobacionController{
	private $raprobacion;
	function __construct(){
		$this->raprobacion=new raprobacion();
	}
	function index(){
		$datos=$this->raprobacion->getAlumns();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
	}
	function print(){
		$datos[0]=$this->raprobacion->getmateria();
		$datos[1]=$this->raprobacion->getgrupo();
		$datos[2]=$this->raprobacion->getmaestro();
		$datos[3]=$this->raprobacion->getuni();
		$datos[5]=$this->raprobacion->getAlumns();
		$datos[6]=$this->raprobacion->getcal();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
		
	}
	function __destruct(){

	}
}