<?php header("Content-Type: text/html;charset=utf-8");?>
<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	define('URL', "http://localhost/Github/proyectoaplicacionesweb702/");
	require_once ("AppData/Config/Autoload.php");
	\AppData\Config\Autoload::run();
	if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
     Views\Template::header();
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
      Views\Template::nav();
  AppData\Config\Enrutador::run(new AppData\Config\Request());
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
     Views\Template::footer();
     // if(!isset($_SERVER["http_X_REQUESTED_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
	// 	{
	// 		Views\Template::header();
	// 		AppData\Config\Enrutador::run(new AppData\Config\Request());
	// 		Views\Template::nav();
	// 		// Views\Template::main();
	// 		Views\Template::footer();
	// 	}
		// echo "string";
?>