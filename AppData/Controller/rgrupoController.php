<?php 
namespace AppData\Controller;
use AppData\Model\Rgrupo;
class rgrupoController
{
	private $rgrupo;

	function __construct(){
		$this->rgrupo=new Rgrupo();
	}
	function index(){
		$datos=$this->rgrupo->getGrupo();
		return $datos;

	}
	function print(){
		$datos=$this->rgrupo->getGrupo2();
		// $datos[1]=$this->rmateria->getcali();
		return $datos;
		
	}
	function __destruct(){

	}
	
}