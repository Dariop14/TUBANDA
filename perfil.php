<?php
    session_start();
    include('conexion.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION['uNombre'])) {
    ?>
            Bienvenido: <a href="perfil.php?id=<?=$_SESSION['uID']?>"><strong><?=$_SESSION['uNombre']?></strong></a>

            <a href="logout.php">Cerrar Sesión</a>
    <?php
        }
    ?>
</body>
</html>
