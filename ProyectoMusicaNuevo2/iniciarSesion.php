<?php
    session_start();
    include('iniciarSesion.php');
    if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías
?>
        <form action="comprobar.php" method="post">
            <label>Usuario:</label>

            <input type="text" name="usuario_nombre" />

            <label>Contraseña:</label>

            <input type="password" name="usuario_clave" />

            <input type="submit" name="enviar" value="Ingresar" />
        </form>
<?php
    }else {
?>
        <p>Hola <strong><?=$_SESSION['usuario_nombre']?></strong> | <a href="logout.php">Salir</a></p>
<?php
    }
?>
