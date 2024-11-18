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

$nombre_usuario = 'Oscar'; // Cambia esto por el nombre de usuario que desees Omar:2020,Jose:2023 Alejandro:8888 Nataly:9090, Osiris:8520
$password_plano = '10100';  // Cambia esto por la contraseña que desees, Saul:1112,Renata:7979, Jessica:3031, Mauricio:6070
$hash_contrasena = password_hash($password_plano, PASSWORD_DEFAULT); // Encriptar la contraseña Gohan:1000, Goten:10001, Trunks:8959


$nombre_usuario = 'Trunks'; // Cambia esto por el nombre de usuario que desees 
$password_plano = '8959';  // Cambia esto por la contraseña que desees 
$hash_contrasena = password_hash($password_plano, PASSWORD_DEFAULT); // Encriptar la contraseña



$sql = "INSERT INTO usuarios (nombre_usuario, contrasena) VALUES ('$nombre_usuario', '$hash_contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registradisisisimo";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

