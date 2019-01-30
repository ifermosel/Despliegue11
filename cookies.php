<?php
	if (isset($_POST['nom']) && isset($_POST['ape']) && isset($_POST['fnac']) && isset($_POST['sal'])) {
		$cookie_nombre = $_POST['nom'];
		$cookie_apellido = $_POST['ape'];
		$cookie_fnacimiento = $_POST['fnac'];
		$cookie_salario = $_POST['sal'];
		
		setcookie('nombre',$cookie_nombre, time() + (86400 * 30), "/");
		setcookie('apellido',$cookie_apellido, time() + (86400 * 30), "/");
		setcookie('fnacimiento',$cookie_fnacimiento, time() + (86400 * 30), "/");
		setcookie('salario',$cookie_salario, time() + (86400 * 30), "/");
		header('Location: cookies.php');
	}
	
	if(!isset($_COOKIE['nombre'])) {
		echo "Cookie " . $_COOKIE['nombre'] . " no definida!!!<br>";
		echo "Cookie " . $_COOKIE['apellido'] . " no definida!!!<br>";
		echo "Cookie " . $_COOKIE['fnacimiento'] . " no definida!!!<br>";
		echo "Cookie " . $_COOKIE['salario'] . " no definida!!!<br>";
	} else {
		echo "Cookie " . $_COOKIE['nombre'] . " definida!!!<br>";
		echo "Cookie " . $_COOKIE['apellido'] . " definida!!!<br>";
		echo "Cookie " . $_COOKIE['fnacimiento'] . " definida!!!<br>";
		echo "Cookie " . $_COOKIE['salario'] . " definida!!!<br>";
		
		echo "Nombre de la cookie: " . $_COOKIE['nombre'];
		
		var_dump($_COOKIE);
	}	
?>