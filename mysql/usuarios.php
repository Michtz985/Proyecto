<?php
$host = '127.0.0.1:3309';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'empresa';

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre de usuario: " . $row["nombre_usuario"] . "<br>";
    }
} else {
    echo "No se encontraron usuarios en la tabla 'usuarios'.";
}

$conn->close();
?>
