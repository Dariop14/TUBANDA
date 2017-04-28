<div class="foto">
esta es la foto
</div>

<div class="Datos">
     <p> Username: <?php echo  $_SESSION['uUsuario'];  ?></p>
     <p> Nombres y Apellidos:
       <?php
           $usuario_usuario = $_SESSION['uUsuario'];
           $uNombre = mysql_query("SELECT uNombre FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uNombre)){
             echo $row[0];
           }
       ?>
     </p>
     <p> País:
       <?php
           $uPais = mysql_query("SELECT uLugarOrigen FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uPais)){
             echo $row[0];
           }
       ?>
     </p>
     <p> Fecha de Nacimiento:
       <?php
           $uFecha = mysql_query("SELECT uFechaNacimiento FROM Usuario WHERE uUsuario = '$usuario_usuario'");
           if($row = mysql_fetch_array($uFecha)){
             echo $row[0];
           }
       ?>
     </p>
     <a href="#"><p> Editar Información </p> </a>
</div>
