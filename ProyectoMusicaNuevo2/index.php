<html lang="es">

<head>
<meta charset="utf-8" />
<title>TuBanda</title>
<link rel="stylesheet" href="css/masterEstilos.css">
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
<body>
      <!-- Se incluye el header desde un archivo externo y será el mismo para todas las páginas -->
      <?php  include("Header.php");  ?>


    <h1 class="encuentraMusica">

      <form action="resultadosBuscador.php" method="get">
       <p  style="
         font-size: 40px;
         font-family: cursive;
         color: white;">
         Encuentra a tus musicos favoritos
       </p>
      <input style="background-color: rgba(255,255,255,0.9);
      color: black;
      height: 40px;
      width: 200px;
      border-radius: 5px;
      font-size: 15px;
      font-family: normal;
      padding-left: 15px;" type="text" name="user_query" placeholder="Busca tu artista o banda favorita"/>
      <input style="background-color: black;
        color: white;
        width: 60px;
        height: 40px;
        border: none;
        border-radius: 5px;" type="submit" name="barraBuscador" value="Buscar" />
     </form>
</h1>

      <h1 class="proyectaMusica">Proyecta tu musica</h1>
      <p class="subTitle">Bandas | Musicos | Bares</p>


      <!-- Se incluye el menu desde otro archivo y será constante en todas las páginas -->
      <?php  include("menu.php");  ?>

            <!-- Video de fondo extraído de YouTube -->
            <div class="fullscreen-bg">
                <iframe src="https://www.youtube.com/embed/TA4WfYHAmZk?autoplay=1;rel=0&amp;controls=0&amp;showinfo=0" width="100%" height="100%"></iframe>
            </div>

            <!-- fondo-->
            <section>
            <div style="background-color:rgba(0,0,0,0.3); height: 100%; width:100%;">

            </div>
            </section>

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


              <!-- Container que incluye las mejores canciones de la semana-->
                <div style="width:auto;  margin-left: 21%;" class="Noticia">
                            <p style="font-size:30px;">Top Canciones Semanales</p>
                            <iframe src="https://embed.spotify.com/?uri=spotify:user:erebore:playlist:788MOXyTfcUb1tdw4oC7KJ&theme=white" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
                </div>

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
                       <p style="font-size:30px;">Proyecta tu musica</p>
                       <p style="font-size:20px;">Tu Banda <br> 2017</p>
                    </div>
                  </div>
            </section>
<!-- Se carga el footer o pie de página desde un archivo externo y será el mismo en todas las páginas -->
<footer>
        <?php
            include ("Footer.php");
        ?>
</footer>

</body>

</html>
