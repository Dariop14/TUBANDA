<html lang="es">

<head>
<meta charset="utf-8" />
<title>TuBanda</title>
<link rel="stylesheet" href="masterEstilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<<?php
include ("conexion.php");
?>

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

</head>
<body>


    <div class="bgVentana" id="InicioSesion">
        <div class="ventana">
            <form>
                <a href="javascript:cerrar();">x</a>
                <p>Usuario:</p><input type="text" class="Search" name="usuario" placeholder="Usuario" style="width:60%; height: 40px;">
                <p>Contraseña:</p><input type="password" class="Search" name="contraseña" placeholder="Contraseña"
                                         style="width:60%; height: 40px; border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;"><br>
                <button type="submit" class="Submit" name="Iniciar sesión" value="Iniciar Sesión" style="margin-top: 15px; width: auto; margin-bottom: 5px;">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <div class="bgVentana" id="registro">
        <div class="ventana">
               <form>
                  <a href="javascript:cerrarRegistro();">x</a>
                  <p>Usuario:</p><input type="text" class="Search" name="usuario" placeholder="Usuario" style="width:60%; margin-top:0px;height: 40px;">
                  <p>Correo electrónico</p><input type="email" class="Search" name="correo" placeholder="Correo Electrónico" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;">
                  <p>Contraseña:</p><input type="password" class="Search" name="contraseña" placeholder="Contraseña" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;"><br>
                  <button type="submit" class="Submit" name="Registrarse" value="Registrarse" style="margin-top: 15px; width: auto; margin-bottom: 10px;">Registrarse</button>
               </form>
        </div>
    </div>



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
