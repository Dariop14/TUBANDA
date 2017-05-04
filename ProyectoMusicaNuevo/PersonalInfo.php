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
        $imagen = $row[0];
      }
      // Agregamos la imagen
      echo "<img src='$imagen' width='170' height='180'>";
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
     <a href="javascript:location.reload()"><p>Recargar</p></a>
     <a href="javascript:ActualizarInfo();"><p> Editar Información </p> </a>
  </div>
</div>

<!-- Sección que permite editar la información del usuario -->
<div id="editarInfo" style="display:none;">

    <div class="Foto">
      <!-- Aquí estan los inputs de subida de imagen -->
        <input type="file"><br><br>
        <input type="submit" name="subirFoto" value="Establecer foto de perfil">
    </div><br>
    <div class="Datos">

      <?php
          // Se comprueba que se envío el formulario
          if(isset($_POST['Actualizar'])){

           include ("ActualizarPerfil.php");

         } else {
      ?>

      <form method="POST">
        <p> Username: <?php echo  $_SESSION['uUsuario'];  ?></p>
        <p><label>Nombre y Apellido:</label>
              <input type="text" name="pNombre" value="<?php echo $nombre ?>" placeholder="Ingresa tu nombre y apellido"></p>
        <p><label>País:</label>
              <input type="text" name="pPais" value="<?php echo $pais ?>" placeholder="Ingresa tu País"></p>
        <p>Fecha de Nacimiento: <?php echo $fecha ?></p>
        <p><label>Contraseña</label>
              <input type="text" name="pContrasena" value="<?php echo $contrasena ?>" placeholder="Ingresa tu nueva contraseña"></p>
        <input type="submit" class="Submit" style="width:auto; margin-left:100px;" name="Actualizar" value="Actualizar Datos">
        <a href="javascript:CancelarActualizacion();"><input type="submit" class="Submit" name="cancelar" value="Cancelar"></a>
      </form>

      <?php } ?>
    </div>

</div>
