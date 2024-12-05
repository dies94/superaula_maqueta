<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: vistas/panel.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; padding-top: 50px; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" onclick="redireccion(1)">Ingresar</button>
        </form>
    </div>
<script>
    function redireccion(id){
        header('Location: maqueta_SuperAula.html');
    };
</script>

</body>
</html>