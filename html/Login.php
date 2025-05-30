<?php
	session_start();

	// Conectar a la base de datos
	$db = new mysqli('localhost', 'root', '1234', 'entre_libros');


	// Recoger datos del formulario
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	$query = "SELECT id, contrasena FROM usuarios WHERE usuario = '".$usuario."'";
	$result = mysqli_query($db, $query) or die('Query error');


	if (mysqli_num_rows($result) > 0) {
		$only_row = mysqli_fetch_array($result);
		if ($only_row[1] == $contrasena) {
			session_start();
			$_SESSION['user_id'] = $only_row[0];
		} else {
			echo '<p>Contraseña incorrecta</p>';
		}
	} else {
		echo '<p>Usuario no encontrado con ese email</p>';
	}
?>