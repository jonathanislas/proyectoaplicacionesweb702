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
		// $datos[1]=$this->rmateria->getmat();
		return $datos;
	}
	function print(){
		$datos[0]=$this->rmateria->getmateria();
		$datos[1]=$this->rmateria->getgrupo();
		$datos[2]=$this->rmateria->getmaestro();
		$datos[3]=$this->rmateria->getuni();
		$datos[5]=$this->rmateria->getAlumns();
		$datos[6]=$this->rmateria->getcal();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
		
	}
	function __destruct(){

	}
}