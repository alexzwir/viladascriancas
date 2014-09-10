<?php
	session_start();
	error_reporting(0);
	
	// switch ($_SERVER['HTTP_HOST'])
	// {
	//     case 'iguatemi.com.br.local':
	// 		$servidor = "localhost";
	// 		$database = "iguatemi_com_br";
	// 		$usuario = "root";
	// 		$senha = "";	
	//     break;
	//     case 'homolog.iguatemibusinesssjrp.com.br':
	// 		$servidor = "localhost";
	// 		$database = "homibjrp";
	// 		$usuario = "homibjrp";
	// 		$senha = "sGw22ddsB";	
	//     break;
	//     default:
	// 		$servidor = "iguatemibusinesssjrp.com.br";
	// 		$database = "ibjrp";
	// 		$usuario = "ibjrp";
	// 		$senha = "n2y767GWd";	
	//     break;
	// }


	$servidor = "localhost";
	$database = "viladascriancas";
	$usuario = "root";
	$senha = "root";	
	
	mysql_connect($servidor,$usuario,$senha);
	mysql_select_db($database);
?>