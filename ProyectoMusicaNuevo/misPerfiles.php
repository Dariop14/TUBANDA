<?php
    // Extraemos el ID del usuario actual
    $usuario_usuario = $_SESSION['uUsuario'];
    $uID = mysql_query("SELECT uID FROM Usuario WHERE uUsuario = '$usuario_usuario'");
    if($row = mysql_fetch_array($uID)){
      $id_usuario = $row[0];
    }
 ?>

<?php
    // Preguntamos si el usuario actual cuenta con perfiles asociados a su ID
    $existente = mysql_query("SELECT * FROM Perfil WHERE uID = '$id_usuario'");
    if(mysql_num_rows($existente) > 0){

      if($Resultado = mysql_query("SELECT * FROM Perfil WHERE uID = '$id_usuario'")){

          while($Fila = mysql_fetch_assoc($Resultado)){

            $pfoto = $Fila["pImagen"];
            $ptipo = $Fila["pTipo"];
            $pnombre = $Fila["pNombre"];
            $pgenero = $Fila["pGenero"];
            $pdescripcion = $Fila["pDescripcion"];

            //$printResultados = "<div class='Contenido' id='misPerfiles' style='display:none;'>";
            $printResultados = "<div class='Contenido'>";
            $printResultados.= "<div class='foto'>";
            $printResultados.= "<img src='$pfoto' width='170' height='180'>";
            $printResultados.= "</div>";
            $printResultados.= "<div class='Datos'>";
            $printResultados.= "<p><a href='musico.php'><strong>$pnombre</strong></a></p><br><br>";
            $printResultados.= "$pgenero";
            $printResultados.= "<br><br>$pdescripcion";
            $printResultados.= "</div>";
            $printResultados.= "</div>";

            echo "$printResultados";
          }
        }

     } else {
 ?>
 <!--  De no existir ningún perfil asociado se lo notifica  -->
 <div class="Contenido" id="misPerfiles" style="display:none">
   <p>No cuentas con perfiles publicados al momento</p>
 </div>

<?php } ?>
