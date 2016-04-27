<?php

$pagina = "portal/index.php";

if($_GET){
	if(array_key_exists('pagina', $_GET)) {
		$paginaGET = $_GET['pagina'];
		$pagina = "portal/{$paginaGET}.php";
	} else {
		$pagina = "portal/404.php";
	}
}

$arquivo = "{$pagina}";
if(file_exists($arquivo)) {
	require_once $arquivo;
} else {
	require_once "portal/404.php";
}
