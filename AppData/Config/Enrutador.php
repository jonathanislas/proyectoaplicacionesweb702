<?php
namespace AppData\Config;

class Enrutador
{
	public static function run(Request $request)
	{
		$controlador = $request->getControlador() . "Controller";
		$ruta = ROOT . "AppData" . DS ."Controller" . DS . $controlador . ".php";
		$metodo = $request->getMetodo();
		$argumrnto = $request->getArgumento();

		if(is_readable($ruta)) {
			require_once($ruta);
			$mostrar = "AppData\\Controller\\" . $controlador;
			
		}
	}
}