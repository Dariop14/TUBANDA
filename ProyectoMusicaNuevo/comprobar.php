<?php
    session_start();
    include('acceso_db.php');
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuario y contraseña no estén vacíos
        if(empty($_POST['uUsuario']) || empty($_POST['uContrasena'])) {
            echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
        }else {
            // se limpia los campos
            $usuario_usuario = mysql_real_escape_string($_POST['uUsuario']);
            $usuario_clave = mysql_real_escape_string($_POST['uContrasena']);
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = mysql_query("SELECT uID, uUsuario, uContrasena FROM Usuario WHERE uUsuario='".$usuario_usuario."' AND uContrasena='".$usuario_clave."'");

            if($row = mysql_fetch_array($sql)) {
                $_SESSION['uID'] = $row['uID']; // creamos la sesion y se le asigna un valor
                $_SESSION['uUsuario'] = $row["uUsuario"]; // creamos la sesión y se le asigna un valor
                header("Location: index.php");
            }else {
?>
                <!--  De haber un error en el LogIn se lo notifica  -->
                Error, <a href="javascript:history.back();">Reintentar</a>
<?php
            }
        }
    }else {
        header("Location: index.php");
    }
?>
