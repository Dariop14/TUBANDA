<?php
  // Se realiza una consulta para extraer el ID del usuario actual
  $usuario_usuario = $_SESSION['uUsuario'];
  $uID = mysql_query("SELECT uID FROM Usuario WHERE uUsuario = '$usuario_usuario'");
  if($row = mysql_fetch_array($uID)){
    $id_usuario = $row[0];
  }
 ?>

<!-- Sección que contiene la información del perfil -->
<div id="infoPublicada">
 <div class="foto">
  <?php

      // Extraemos de la BD la imagen del perfil registrada
      $fotoPerfil = mysql_query("SELECT uImagen FROM Usuario WHERE uID = '$id_usuario'");
      if($row = mysql_fetch_array($fotoPerfil)){
        $uImagen = $row[0];
      }
      // Agregamos la imagen
      echo "<img src='$uImagen' width='170' height='180'>";
   ?>
</div>

<div class="Datos">
     <!--  Extraemos datos del usuario  -->
     <p> Username: <?php echo  $_SESSION['uUsuario'];  ?></p>
     <p> Nombres y Apellidos:
       <?php
           $uNombre = mysql_query("SELECT uNombre FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uNombre)){
             echo $row[0];
             $nombre = $row[0];
           }
       ?>
     </p>
     <p> País:
       <?php
           $uPais = mysql_query("SELECT uLugarOrigen FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uPais)){
             echo $row[0];
             $pais = $row[0];
           }
       ?>
     </p>
     <p> Fecha de Nacimiento:
       <?php
           $uFecha = mysql_query("SELECT uFechaNacimiento FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uFecha)){
             echo $row[0];
             $fecha = $row[0];
           }
       ?>
     </p>
     <p> Contraseña:
       <?php
           $uContrasena = mysql_query("SELECT uContrasena FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uContrasena)){
             echo $row[0];
             $contrasena = $row[0];
           }
       ?>
     </p>


     <br>
     <br>
     <a href="javascript:location.reload()">
     <p style="background-color:black; color:white; text-align:center; margin:10px; padding:10px;">Recargar</p></a>
     <a href="javascript:ActualizarInfo();">
     <p style="background-color:black; color:white; text-align:center; margin:10px; padding:10px;">Editar Información </p> </a>
  </div>
</div>

<!-- Sección que permite editar la información del usuario -->
<div id="editarInfo" style="display:none;">


    <div class="Datos">

      <?php
          // Se comprueba que se envío el formulario
          if(isset($_POST['Actualizar'])){
            $pNombre = mysql_real_escape_string($_POST['pNombre']);
            $pPais = mysql_real_escape_string($_POST['pPais']);
            $pContrasena = mysql_real_escape_string($_POST['pContrasena']);
            $usuarioImagen = mysql_real_escape_string($_FILES['uImagen']['name']);
            $uImagen_tmp = mysql_real_escape_string($_FILES['uImagen']['tmp_name']);


        move_uploaded_file($uImagen_tmp,"imagenesUsuario/{$usuarioImagen}");

           include ("ActualizarPerfil.php");

         } else {
      ?>

      <form method="POST" enctype="multipart/form-data">
        <p> Username: <?php echo  $_SESSION['uUsuario'];  ?></p>
        <p><label>Nombre y Apellido:</label>
              <input type="text" name="pNombre" value="<?php echo $nombre ?>" placeholder="Ingresa tu nombre y apellido"></p>
        <p><label>País:</label>
              <input type="text" name="pPais" value="<?php echo $pais ?>" placeholder="Ingresa tu País"></p>
        <p>Fecha de Nacimiento: <?php echo $fecha ?></p>
        <p><label>Contraseña</label>
        <input type="text" name="pContrasena" value="<?php echo $contrasena ?>" placeholder="Ingresa tu nueva contraseña"></p>
          <!-- Aquí estan los inputs de subida de imagen -->
        <input type="file" name="uImagen"><br/><br>
        <input type="submit" class="Submit" style="width:auto; margin-left:100px;" name="Actualizar" value="Actualizar Datos">
        <a href="javascript:CancelarActualizacion();">
        <input type="submit" class="Submit" name="cancelar" value="Cancelar"></a>
      </form>

      <?php } ?>
    </div>

</div>
