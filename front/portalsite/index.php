<?php

$pagina = "htmls/layout/index.php";

if($_GET){

	if(array_key_exists('pagina', $_GET)) {
		$paginaGET = $_GET['pagina'];

		$pagina = "htmls/pages/{$paginaGET}.php";
	} else {
		echo "0";
		$pagina = "htmls/pages/404.php";
			
	}
}



$arquivo = "{$pagina}";

if(file_exists($arquivo)) {
	require_once $arquivo;

} else {
	
	echo "1";
	require_once "htmls/pages/404.php";
}

