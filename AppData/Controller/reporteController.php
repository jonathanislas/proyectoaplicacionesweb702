<?php 
namespace AppData\Controller;
use AppData\Model\Reporte;
class reporteController{
	private $reporte;
	function __construct(){
		$this->reporte=new Reporte();
	}
	function index(){
		$datos=$this->reporte->getAlumns();
		// $datos[1]=$this->rmateria->getmat();
		return $datos;
	}
	function print(){
		$datos[0]=$this->reporte->getjefe();
		$datos[1]=$this->reporte->getmaestro();
		$datos[2]=$this->reporte->getAlumns();
		return $datos;
		
	}
	function __destruct(){

	}
}