<?php
if (isset($_POST['nombre']) && isset($_POST['edad'])) {
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	
	if (!empty($nombre) && !empty($edad)) {
		echo "Bienvenido, " . $nombre . ". Tienes " . $edad . " a�os.";
	} else {
		echo "Por favor ingresa tu nombre y edad.";
	}
}
?>