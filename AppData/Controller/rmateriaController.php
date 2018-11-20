<?php 
namespace AppData\Controller;
use AppData\Model\Rmateria;
class rmateriaController{
	private $rmateria;
	function __construct(){
		$this->rmateria=new Rmateria();
	}
	function index(){
		$datos=$this->rmateria->getAlumns();
		return $datos;
	}
	function printmateria(){
		$datos=$this->rmateria->getAlumns();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
		
	}
	function __destruct(){

	}
}