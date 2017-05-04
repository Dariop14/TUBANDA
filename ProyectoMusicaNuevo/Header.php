<div class="bgVentana" id="registro">
    <div class="ventana">

      <?php
        include('acceso_db.php'); // incluimos el archivo de conexión a la Base de Datos
        if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
            // creamos una función que nos parmita validar el email
            function valida_email($correo) {
                if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo)) return true;
                else return false;
            }
            // Procedemos a comprobar que los campos del formulario no estén vacíos
            $sin_espacios = count_chars($_POST['uUsuario'], 1);
            if(!empty($sin_espacios[32])) { // comprobamos que el campo usuario no tenga espacios
                echo "El campo usuario no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif(empty($_POST['uUsuario'])) { // comprobamos que el campo usuario no esté vacío
                echo "No haz ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif(empty($_POST['uNombre'])) { // comprobamos que el campo nombre no esté vacío
                echo "El campo Nombre está vacío. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif(empty($_POST['uLugarOrigen'])) { // comprobamos que el campo lugar de origen no esté vacío
                  echo "El campo Pais está vacío. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif(empty($_POST['uFechaNacimiento'])) { // comprobamos que el campo fecha  no esté vacío
                  echo "El campo Fecha de Nacimiento está vacío. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif(empty($_POST['uContrasena'])) { // comprobamos que el campo contraseña no esté vacío
                echo "No haz ingresado contraseña. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif($_POST['uContrasena'] != $_POST['uContrasena_conf']) { // comprobamos que las contraseñas ingresadas coincidan
                echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
            }elseif(!valida_email($_POST['uCorreo'])) { // validamos que el email ingresado sea correcto
                echo "El correo ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>";
            }else {
                // "limpiamos" los campos del formulario de posibles códigos maliciosos
                $usuario_usuario = mysql_real_escape_string($_POST['uUsuario']);
                $usuario_nombre = mysql_real_escape_string($_POST['uNombre']);
                $usuario_pais = mysql_real_escape_string($_POST['uLugarOrigen']);
                $usuario_fecha = mysql_real_escape_string($_POST['uFechaNacimiento']);
                $usuario_clave = mysql_real_escape_string($_POST['uContrasena']);
                $usuario_email = mysql_real_escape_string($_POST['uCorreo']);
                // comprobamos que el usuario ingresado no haya sido registrado antes
                $sql = mysql_query("SELECT uUsuario FROM Usuario WHERE uUsuario='".$usuario_usuario."'");
                if(mysql_num_rows($sql) > 0) {
                    echo "El nombre usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
                }else {
                    // ingresamos los datos a la BD
                    $reg = mysql_query("INSERT INTO Usuario (uCorreo,uUsuario,uNombre,uContrasena,uFechaNacimiento,uLugarOrigen)
                    VALUES ('".$usuario_email."','".$usuario_usuario."','".$usuario_nombre."','".$usuario_clave."','".$usuario_fecha."','".$usuario_pais."')");
                    // Mostrar mensaje y cerrar ventana si se ingresaron los datos
                    if($reg) {
                        echo "Datos ingresados correctamente.";
                        echo "<br>";
                        echo "<a href='javascript:cerrarRegistro();'>";
                        echo "cerrar";
                        echo "</a>";
                    }else {
                        // Si hubo un error, notificarlo
                        echo "Ha ocurrido un error y no se registraron los datos.";
                    }
                }
            }
          }else {  // Se procede al formulario
      ?>

           <form method="POST">
              <a href="javascript:cerrarRegistro();">x</a>
              <label><p>Usuario:</p></label>
                  <input type="text" class="Search" name="uUsuario" placeholder="Usuario" style="width:60%; margin-top:0px;height: 40px;">
              <label><p>Nombre y Apellido:</p></label>
                  <input type="text" class="Search" name="uNombre" placeholder="Nombre y Apellido" style="width:60%; margin-top:0px;height: 40px;">
              <label><p>País</p></label>
                  <?php include("paises.php"); ?>
              <label><p>Fecha de nacimiento</p></label>
                  <input type="date" name="uFechaNacimiento" placeholder="YYYY-MM-DD" style="width:60%; margin-top:0px;height: 40px;">
              <label><p>Correo electrónico</p></label>
                  <input type="email" class="Search" name="uCorreo" placeholder="alguien@ejemplo.com" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px;">
              <label><p>Contraseña:</p></label>
                  <input type="password" class="Search" name="uContrasena" placeholder="Contraseña" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px;"><br>
              <label><p>Confirmacion Contrasena:</p><label>
                  <input type="password" class="Search" name="uContrasena_conf" maxlength="15" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px;"><br>
              <input type="submit" class="Submit" name="enviar" value="Registrarse" style="margin-top: 15px; width: auto; margin-bottom: 10px;">
           </form>

           <?php
               }
           ?>

    </div>
</div>


<div class="bgVentana" id="InicioSesion">
  <div class="ventana">

    <?php
        // Se inicializa la sesión
        @session_start();
        include('acceso_db.php');
        if(empty($_SESSION['uUsuario'])) { // comprobamos que las variables de sesión estén vacías
    ?>
    <!--  Formulario de registro  -->
      <form action="comprobar.php" method="POST">
          <a href="javascript:cerrar();">Cerrar X</a>
          <p>Usuario:</p>
               <input type="text" class="Search" name="uUsuario" placeholder="Usuario" style="width:60%; height: 40px; margin-top:0px;">
          <p>Contraseña:</p>
               <input type="password" class="Search" name="uContrasena" placeholder="Contraseña"
                                   style="width:60%; height: 40px; border: 1px solid #ccc; border-radius: 2px;"><br>
          <input type="submit" class="Submit" name="enviar" value="Ingresar" style="margin-top: 15px; width: auto; margin-bottom: 5px;">
      </form>

      <?php
          }else {
      ?>
              <p>Hola <strong><?=$_SESSION['uUsuario']?></strong> | <a href="logout.php">Salir</a></p>
      <?php
          }
      ?>

  </div>
</div>

<header>
<!-- Se agrega el buscador al header  -->
<div class="buscador">
<form>
<input type="text" style="margin-top:5%; width:65%;" name="search" placeholder="Buscar">
<input type="submit" class="Submit" name="busqueda" value="Buscar">
</form>
</div>

<!--  Se agregan los idiomas  -->
<div  class="idioma">
<a  href="#">ES</a>
<a  href="#">EN</a>
</div>

<!--  Se agrega el logotipo  -->
<div class="logo">
<a  href="index.php">Tu Banda</a>
</div>
