
<?php
header('Content_Type: application/json');
require "../bd.php";
function RetornaMenu($mysqli) {
	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
			case 'GET':
			$query = "SELECT * FROM menu";
			if($result = $mysqli->query($query)) { 
				$linhas = array();
				while ($row = $result->fetch_assoc()) {
		    		$linhas[] = $row;  
				}
			}
			return json_encode($linhas);
			break;
	}
}
$result = RetornaMenu($mysqli);
echo $result;