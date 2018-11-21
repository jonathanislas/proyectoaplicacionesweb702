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
	function __destruct(){

	}
}