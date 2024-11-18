<?php
session_start();
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

if (isset($_POST['login'])) {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Consultar la base de datos
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($contrasena, $row['contrasena'])) {
            $_SESSION['nombre_usuario'] = $nombre_usuario;
            header("Location: formulario.php");
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}

$conn->close();
?>
