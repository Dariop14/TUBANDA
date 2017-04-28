<?php
   session_start();
   include('conexion.php');
   if(isset($_POST['login'])) { // comprobamos que se hayan enviado los datos del formulario
       // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
       if(empty($_POST['usuario']) || empty($_POST['contraseña'])) {
           echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
       }else {
           // "limpiamos" los campos del formulario de posibles códigos maliciosos
           $usuario_nombre = mysql_real_escape_string($_POST['usuario']);
           $usuario_clave = mysql_real_escape_string($_POST['contraseña']);
           $usuario_clave = md5($usuario_clave);
           // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
           $sql = mysql_query("SELECT uID, uNombre, uContrasena FROM Usuario WHERE uNombre='".$usuario_nombre."' AND uContrasena='".$usuario_clave."'");
           if($row = mysql_fetch_array($sql)) {
               $_SESSION['uID'] = $row['uID']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
               $_SESSION['uNombre'] = $row["uNombre"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
               header("Location:index.php");
           }else {
?>
               Error, <a href="index.php">Reintentar</a>
<?php
           }
       }
   }else {
       header("Location: index.php");
   }
?>
