<?php
    // Se extrae el ID del usuario actual
    $usuario_usuario = $_SESSION['uUsuario'];
    $uID = mysql_query("SELECT uID FROM Usuario WHERE uUsuario = '$usuario_usuario'");
    if($row = mysql_fetch_array($uID)){
      $id_usuario = $row[0];
    }

    // Se comprueba que se envío el formulario
    if(isset($_POST['publicar'])){

      // Se limpia las variables
       $perfilTipo = mysql_real_escape_string($_POST['tipo']);
       $perfilNombre = mysql_real_escape_string($_POST['nombre']);
       $perfilGenero = mysql_real_escape_string($_POST['genero']);
       $perfilInstrumento = mysql_real_escape_string($_POST['instrumento']);
       $perfilDescripcion = mysql_real_escape_string($_POST['descripcion']);
       $perfilImagen = mysql_real_escape_string($_FILES['imagen']['name']);
       $pImagen_tmp = mysql_real_escape_string($_FILES['imagen']['tmp_name']);

        // Se comprueba que los campos no estén vacios
        if(empty($_POST['tipo'])){
            echo "No haz seleccionado el tipo de perfil. <a href='javascript:history.back();'>Reintentar</a>";
        } else if (empty($_POST['nombre'])){
            echo "No haz ingresado el nombre del músico o banda. <a href='javascript:history.back();'> Reintentar </a>";
        } else if (empty($_POST['genero'])){
            echo "No haz ingresado el genero del músico o banda. <a href='javascript:history.back();'> Reintentar </a>";
        } else if (empty($_POST['instrumento'])){
            echo "No haz ingresado el instrumento del músico o banda. <a href='javascript:history.back();'> Reintentar </a>";
        } else if (empty($_POST['descripcion'])){
            echo "No haz ingresado la descripción del músico o banda. <a href='javascript:history.back();'> Reintentar </a>";
        }else {

        // Se inserta los valores en la base de datos
        $ingresarPerfil = mysql_query("INSERT INTO Perfil (uID,pTipo,pNombre,pDescripcion,pImagen,pGenero,pInstrumento)
                VALUES ('".$id_usuario."','".$perfilTipo."','".$perfilNombre."','".$perfilDescripcion."','".$perfilImagen."','".$perfilGenero."','".$perfilInstrumento."')");

        //cargar las imagenen en la carpeta imagenesPerfil
        //no se llama al archivo desde la carpeta por eso no aparece,  SOLUCION?
        move_uploaded_file($pImagen_tmp,"imagenesPerfil/{$perfilImagen}");



        // Se verifica que la información se ingreso correctamente
        if($ingresarPerfil){
            echo "Perfil Publicado <br>";
            echo " Ir a <a href='perfil.php'>Mis Perfiles</a>";
        }
      }


    }

 ?>
