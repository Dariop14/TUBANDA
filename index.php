<html lang="es">

<head>
<meta charset="utf-8" />
<title>TuBanda</title>
<link rel="stylesheet" href="masterEstilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
            function desplegar(){
                document.getElementById("InicioSesion").style.display="block";
            }

            function cerrar(){
                document.getElementById("InicioSesion").style.display="none";
            }

            function desplegarRegistro(){
                document.getElementById("registro").style.display="block";
            }

            function cerrarRegistro(){
                document.getElementById("registro").style.display="none";
            }
</script>
<script>
function MenuResponsive()
{
  var x = document.getElementById("BarraResponsive");
   if (x.className === "menu") {
       x.className += " responsive";
   } else {
       x.className = "menu";
   }
 }
</script>


</head>
<body onload="desplegar();">


  <?php
     include('conexion.php'); //incluimos el archivo de conexiona la BD
     if(isset($_POST['enviar'])){
       function valida_email($email){
         if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo))
         {return true;}
         else{
           return false;
             }
         }
        }

        // Procedemos a comprobar que los campos del formulario no estén vacíos
          $sin_espacios = count_chars($_POST['uNombre'], 1);
          if(!empty($sin_espacios[32])) { // comprobamos que el campo uNombre no tenga espacios en blanco
              echo "El campo <em>uNombre</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
          }elseif(empty($_POST['uNombre'])) { // comprobamos que el campo uNombre no esté vacío
              echo "No haz ingresado tu usuario. <a href='javascript:history.desplegar();'>Reintentar</a>";
          }elseif(empty($_POST['uContrasena'])) { // comprobamos que el campo uContrasena no esté vacío
              echo "No haz ingresado contraseña. <a href='javascript:history.desplegar();'>Reintentar</a>";
          }elseif($_POST['uContrasena'] != $_POST['usuario_Constrasena_conf']) { // comprobamos que las contraseñas ingresadas coincidan
              echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.desplegar();'>Reintentar</a>";
          }elseif(!valida_email($_POST['uCorreo'])) { // validamos que el email ingresado sea correcto
              echo "El email ingresado no es válido. <a href='javascript:history.desplegar();'>Reintentar</a>";
          }

          else {
               // "limpiamos" los campos del formulario de posibles códigos maliciosos
               $usuario_nombre = mysql_real_escape_string($_POST['uNombre']);
               $usuario_clave = mysql_real_escape_string($_POST['uContrasena']);
               $usuario_email = mysql_real_escape_string($_POST['uCorreo']);
               // comprobamos que el usuario ingresado no haya sido registrado antes
               $sql = mysql_query("SELECT uNombre FROM usuarios WHERE uNombre='".$usuario_nombre."'");
               if(mysql_num_rows($sql) > 0) {
                   echo "El nombre usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.desplegar();'>Reintentar</a>";
               }else {
                   $usuario_clave = md5($usuario_clave); // encriptamos la contraseña ingresada con md5
                   // ingresamos los datos a la BD
                   $reg = mysql_query("INSERT INTO usuarios (uNombre, uContrasena, uCorreo) VALUES ('".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."')");
                   if($reg) {
                       echo "Datos ingresados correctamente.";
                   }else {
                       echo "ha ocurrido un error y no se registraron los datos.";
                   }
                 }

?>
      <div class="bgVentana" id="registro">
          <div class="ventana">
                 <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <label>Registro</label>
                    <a href="javascript:cerrarRegistro();">x</a>
                    <p>Usuario:</p><input type="text" class="Search" name="uNombre" placeholder="Usuario" style="width:60%; margin-top:0px;height: 40px;">
                    <p>Correo electrónico</p><input type="email" class="Search" name="uCorreo" placeholder="Correo Electrónico" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;">
                    <p>Contraseña:</p><input type="password" class="Search" name="uContrasena" placeholder="Contraseña" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;"><br>
                    <p>Confirmacion Contrasena:</p><input type="password" class="Search" name="usuario_Constrasena_conf" maxlength="15" />
                    <button type="submit" class="Submit" name="Registrarse" value="Registrarse" style="margin-top: 15px; width: auto; margin-bottom: 10px;">Registrarse</button>
                 </form>
          </div>
      </div>
<?php } ?>




<?php
   session_start();
   include('conexion.php');
   if(empty($_SESSION['uNombre'])) { // comprobamos que las variables de sesión estén vacías
?>
    <div class="bgVentana" id="InicioSesion">
        <div class="ventana">
            <form action="validar.php" method="post">
                <a href="javascript:cerrar();">Cerrar X</a>
                <p>Usuario:</p><input type="text" class="Search" name="uNombre" placeholder="Usuario" style="width:60%; height: 40px;">
                <p>Contraseña:</p><input type="password" class="Search" name="uContrasena" placeholder="Contraseña"
                                         style="width:60%; height: 40px; border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;"><br>
                <button type="submit" class="Submit" name="login" value="login" style="margin-top: 15px; width: auto; margin-bottom: 5px;">Iniciar sesión</button>
            </form>
        </div>
    </div>
    <?php
    }else {
?>
        <p>Hola Perros<strong><?=$_SESSION['uNombre']?></strong> | <a href="logout.php">Salir</a></p>
<?php
    }
?>


<!--Comprobar acceso-->
  <?php
      session_start();
      include('conexion.php');
      if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
       // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
       if(empty($_POST['uNombre']) || empty($_POST['uContrasena'])) {
           echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.desplegar();'>Reintentar</a>";
       }else {
           // "limpiamos" los campos del formulario de posibles códigos maliciosos
           $usuario_nombre = mysql_real_escape_string($_POST['uNombre']);
           $usuario_clave = mysql_real_escape_string($_POST['uContrasena']);
           $usuario_clave = md5($usuario_clave);
           // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
           $sql = mysql_query("SELECT uID, uNombre, uContrasena FROM Usuario WHERE uNombre='".$usuario_nombre."' AND uContrasena='".$usuario_clave."'");
           if($row = mysql_fetch_array($sql)) {
               $_SESSION['uID'] = $row['uID']; // creamos la sesion "uID" y le asignamos como valor el campo uID
               $_SESSION['uNombre'] = $row["uNombre"]; // creamos la sesion "uNombre" y le asignamos como valor el campo uNombre
               header("Location: conexion.php");
           }else {
             echo "Error. <a href='javascript:desplegar();'>Reintentar</a>";
                 }
               }
 }else {
     header("Location: conexion.php");
 }
?>

<header>

  <div class="fullscreen-bg">
      <iframe src="https://www.youtube.com/embed/TA4WfYHAmZk?autoplay=1;rel=0&amp;controls=0&amp;showinfo=0" width="100%" height="100%"></iframe>
  </div>



  <div class="buscador">
    <form>
    <input type="text" name="search" >
    </form>
  </div>

  <div  class="idioma">
    <a  href="#">ES</a>
    <a  href="#">EN</a>
  </div>

<div class="logo">
  <a  href="index.php">Tu Banda</a>
</div>

<h1>Proyecta tu musica</h1>
<p class="subTitle">Bandas // Musicos // Bares</p>




</header>



<nav>
  <div class="menu" id="BarraResponsive">
  <a href="javascript:desplegarRegistro();">Registrarse</a>
  <a href="javascript:desplegar();">Iniciar Sesion</a>
  <a href="premium.php">Premium</a>
  <a href="bandas.php">Bandas</a>
  <a href="artistas.php">Musicos</a>
  <a href="javascript:void(0);" class="icon" onclick="MenuResponsive()">&#9776;</a>
  </div>

</nav>
<!-- inicio fondo-->
<section>
<div style="background-color:rgba(0,0,0,0.3); height: 100%; width:100%;">

</div>
</section>

<!-- fin inicio fondo-->

<section>
  <div class="NovedadesContainer">
                <div class="Novedades">Novedades</div>
            </div>
            <!-- Este div contiene la caja donde estarán todas las noticias -->
            <div class="NoticiasContainer">
                <!-- Este div contiene la noticia en sí, con imagen y pequeña descripción -->
                <div class="Noticia">
                    <img src="imagenes/Lake_Malawi_music_band.jpg">
                    <a href="#" style="font-size: 20px;">El primer show de ensueño</a>
                    <p class="descripcion">Espectacular primer show de los Maniaticos, haciendo su primer
                    live concert en el bar 'Rock Bohemio'.</p>
                </div>
                <div class="Noticia">
                    <img src="imagenes/banda.jpg">
                    <a href="#" style="font-size: 20px;">Carbonila lanza nuevo video</a>
                    <p class="descripcion">A plena luz del día y en el centro de la ciudad Carbonila
                    grabó su cuarto video musical.</p>
                </div>
                <div class="Noticia">
                    <img src="imagenes/f27fda6ef25e3158303cb305daa188c5.jpg">
                    <a href="#" style="font-size: 20px;">Reunión de viejos amigos</a>
                    <p class="descripcion">Gracias al regreso al país de cada uno de los integrantes
                    de la reconocida Aurora Boreal, se pudo disfrutar de una concierto de 10 estrellas</p>
                </div>
            </div>


  <!-- bloques para noticias-->
    <div style="width:auto;  margin-left: 21%;" class="Noticia">
                <p style="font-size:30px;">Top Canciones Semanales</p>
                <iframe src="https://embed.spotify.com/?uri=spotify:user:erebore:playlist:788MOXyTfcUb1tdw4oC7KJ&theme=white" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>

    </div>

    <!-- bloques para noticias-->
      <div style="width:auto; margin-right: 20%;" class="Noticia">
          <p style="font-size:30px;">Top Canciones Semanales</p>
          <iframe src="https://embed.spotify.com/?uri=spotify:user:erebore:playlist:788MOXyTfcUb1tdw4oC7KJ&theme=white" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>

      </div>
</section>

<!--nosotros-->
<section>
  <!-- secccion informacion sobre nosotros  editable.... talavez agregar fotos de los integrantes
          al click salga un resumnet  -->
      <div class="nosotros-section">
        <div class="contenedor-nosotros">
        <!-- agregar tipografia atractiva igual para titulo y parrafo -->
       <p style="color:#ff2533; font-size:40px;  ">Nosotros</p>
           <p  style="font-size:20px;  ">
             Tu Banda es una iniciativa que comprende
             distintos aspectos de la industria musical
             ecuatoriana. Esta plataforma fue creada con el
             fin de innovación en la forma en que se desarrollan
             las contrataciones y bookings de músicos ya sea para
             conciertos o para unirse a una banda. <br><br>
             El sitio comprende desde contenidos multimedia hasta
             un sistema de pago estandarizado vía web. Servicio sencillo
             y garantizado.
              <br/>
              <br/>
           </p>
            <!-- algun eslogan con una tipografia diferente... puede ser la que se pusiste al inicio
                 -->
             <p style="font-size:30px;">Proyecta tu musica</p>
             <p style="font-size:20px;">Tu Banda <br> 2017</p>
        </div>
      </div>
</section>



<footer>
<div class="container-redes">
    <p style="padding: 0px;">
      <a href="#"><img class="redes" src="redesSociales/FBv.svg" alt="Facebook LOGO"></a>
      <a href="#"><img class="redes" src="redesSociales/instagram.svg" alt="instagram LOGO"></a>
      <a href="#"><img class="redes" src="redesSociales/twitter.svg" alt="twitter LOGO"></a>
      <a href="#"><img class="redes" src="redesSociales/soundcloud.svg" alt="soundcloud LOGO"></a>
    </p>
</div>


      <div class="container-TuBanda">

          <div class="logo" style="margin-left: 100px;">Tu Banda</div>
          <br>

          <p style="color:#d8e2dc; font-size: 14px; margin-left: 28%;">
            Todos los derechos y Copyright reservados <br/>
          <br>
            TuBanda 2017
          </p>
      </div>

    <div class="container-contactanos">
      <p style="color:#d8e2dc; font-size: 15px;">
          Contactanos <br/><br>
        0972876564 | 0978765735 <br/>
        consultas@tubanda.com.ec <br/>
        servicioalcliente@tubanda.com.ec
      </p>
    </div>
</footer>


</body>
