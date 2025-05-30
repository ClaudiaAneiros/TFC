<?php
// Conectar con la base de datos
$db = new mysqli('localhost', 'root', '1234', 'entre_libros');

// Obtener y limpiar datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "SELECT id FROM usuarios WHERE usuario = '" . $usuario . "'";
$result = mysqli_query($db, $query) or die('Query error');

if (mysqli_num_rows($result_check) > 0) {
    echo '<p>Usuario ya existente</p>';
} else {
    // Cifrar la contraseña
    $contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario
    $query_insert = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena_cifrada')";

    if (mysqli_query($db, $query_insert)) {
        header('Location: Inicio.html');
    } else {
        echo '<p>No se ha podido crear el usuario. Inténtelo de nuevo</p>';
    }
}
?>