<?php
    session_start();
    include('acceso_db.php');
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
        if(empty($_POST['uUsuario']) || empty($_POST['uContrasena'])) {
            echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
            $usuario_usuario = mysql_real_escape_string($_POST['uUsuario']);
            $usuario_clave = mysql_real_escape_string($_POST['uContrasena']);
            //$usuario_clave = md5($usuario_clave);
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = mysql_query("SELECT uID, uUsuario, uContrasena FROM Usuario WHERE uUsuario='".$usuario_usuario."' AND uContrasena='".$usuario_clave."'");

            if($row = mysql_fetch_array($sql)) {
                $_SESSION['uID'] = $row['uID']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
                $_SESSION['uUsuario'] = $row["uUsuario"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
                header("Location: index.php");
            }else {
?>
                Error, <a href="javascript:history.back();">Reintentar</a>
<?php
            }
        }
    }else {
        header("Location: index.php");
    }
?>
