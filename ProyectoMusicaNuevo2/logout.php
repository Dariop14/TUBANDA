<?php
    session_start();
    include('acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['uUsuario'])) {
        session_destroy();
        header("Location: index.php");
    }else {
        echo "Operación incorrecta.";
    }
?>
