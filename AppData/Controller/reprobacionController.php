<?php 
namespace AppData\Controller;
use AppData\Model\Reprobacion;
class reprobacionController{
	private $reprobacion;
	function __construct(){
		$this->reprobacion=new reprobacion();
	}
	function index(){
		$datos=$this->reprobacion->getAlumns();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
	}
	function print(){
		$datos[0]=$this->reprobacion->getmateria();
		$datos[1]=$this->reprobacion->getgrupo();
		$datos[2]=$this->reprobacion->getmaestro();
		$datos[3]=$this->reprobacion->getuni();
		$datos[5]=$this->reprobacion->getAlumns();
		$datos[6]=$this->reprobacion->getcal();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
		
	}
	function __destruct(){

	}
}