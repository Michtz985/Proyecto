<?php
session_start();
if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1 class="welcome-text">Welcome: <?php echo $_SESSION['nombre_usuario']; ?></h1>
        <form method="post" action="conexion.php" class="formulario">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="puesto">Puesto</label>
                <input type="text" id="puesto" name="puesto" placeholder="Puesto" required>
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn-submit">Enviar</button>
                <button type="reset" class="btn-reset">Restablecer</button>
            </div>
        </form>
    </div>
</body>
</html>
