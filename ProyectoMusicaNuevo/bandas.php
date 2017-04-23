<html lang="es">

<head>
<meta charset="utf-8" />
<title>Bandas</title>
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

            $(document).ready(function(){
            $("#flip-Genero").click(function(){
            $("#panel-Genero").slideToggle("slow");
              });
            });

            $(document).ready(function(){
            $("#flip-Instrumentos").click(function(){
            $("#panel-Instrumentos").slideToggle("slow");
              });
            });

  </script>

</head>
<body>

<?php  include("Header.php");  ?>
<?php include("menu.php");  ?>

</header>

</nav>
<section class="contenedor-filtros-master">
<div class="contenedor-filtros clear">
<div id="flip-Instrumentos">Instrumentos</div>
<div id="panel-Instrumentos">
  <br/>
  <a class="contenedor-items-filtros" href="#">
 Guitarra
  </a>
  <a class="contenedor-items-filtros" href="#">
 Guitarra Electrica
  </a>
  <a class="contenedor-items-filtros" href="#">
  Bateria
  </a>
  <a class="contenedor-items-filtros" href="#">
 Bajo
  </a>
  <a class="contenedor-items-filtros" href="#">
 Percusion
  </a>
  <a class="contenedor-items-filtros" href="#">
 Saxophone
  </a>
  <a class="contenedor-items-filtros" href="#">
 Teclado
  </a>
  <a class="contenedor-items-filtros" href="#">
  Violin
  </a>
  <a class="contenedor-items-filtros" href="#">
  Voz
  </a>
</div>
</div>

<div class="contenedor-filtros clear">
  <p style="margin:0px;" id="flip-Genero">Generos</p>
  <div id="panel-Genero">
    <br/>
  <a class="contenedor-items-filtros" href="#">
 Reggae
  </a>
  <a class="contenedor-items-filtros" href="#">
 Electronica
  </a>
  <a class="contenedor-items-filtros" href="#">
  Jazz
  </a>
  <a class="contenedor-items-filtros" href="#">
 Rock
  </a>
  <a class="contenedor-items-filtros" href="#">
 Indie
  </a>
  <a class="contenedor-items-filtros" href="#">
 latino
  </a>
  <a class="contenedor-items-filtros" href="#">
 Clasico
  </a>
  <a class="contenedor-items-filtros" href="#">
  Punk
  </a>
  <a class="contenedor-items-filtros" href="#">
  Ska
  </a>
</div>
</div>
</section>
<br/>
<section style="margin-left: 40px;">
  <div class="tabletaImagen">
  <img src="imagenes/bateria.jpg" alt="Person" >
  Bateria
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div>

<div class="tabletaImagen">
<img src="imagenes/guitarraElectrica.png" alt="Person" >
Guitarra Electrica
<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div>

</section>

<section>
  <div class="contenedor-artistas noColapsar ">
    <p class="contenedor-artista-individual noColapsar">
      <img class="contenedor-imagen-artistas" src="imagenes/santana.jpg" atl="artista Santana" width="220" height="220"/>
       <br/>
       <strong>SANTANA</strong> <br/>
        guitarrista mexicano-estadounidense de rock,
        ganador de varios premios Grammy.
        Es considerado el 20º mejor guitarrista de todos los tiempos,
        1 según la revista Rolling Stone.
        Santana ha vendido más de 90 millones
        de álbumes en todo el mundo contando las ventas
        con su antigua banda y su carrera en solitario.
     <br/>
     <br/>
     <a class="reservarbtn" href="#">Reservar</a>
    </p>


    <p class="contenedor-artista-individual noColapsar">
      <img class="contenedor-imagen-artistas" src="imagenes/santana.jpg" atl="artista Santana" width="220" height="220"/>
       <br/>
       <strong>SANTANA</strong> <br/>
        guitarrista mexicano-estadounidense de rock,
        ganador de varios premios Grammy.
        Es considerado el 20º mejor guitarrista de todos los tiempos,
        1 según la revista Rolling Stone.
        Santana ha vendido más de 90 millones
        de álbumes en todo el mundo contando las ventas
        con su antigua banda y su carrera en solitario.
     <br/>
     <br/>
     <a class="reservarbtn" href="#">Reservar</a>
    </p>

    <p class="contenedor-artista-individual noColapsar">
      <img class="contenedor-imagen-artistas" src="imagenes/santana.jpg" atl="artista Santana" width="220" height="220"/>
       <br/>
       <strong>SANTANA</strong> <br/>
        guitarrista mexicano-estadounidense de rock,
        ganador de varios premios Grammy.
        Es considerado el 20º mejor guitarrista de todos los tiempos,
        1 según la revista Rolling Stone.
        Santana ha vendido más de 90 millones
        de álbumes en todo el mundo contando las ventas
        con su antigua banda y su carrera en solitario.
     <br/>
     <br/>
     <a class="reservarbtn" href="#">Reservar</a>
    </p>
  </div>
</section>

<footer>
        <?php  include("Footer.php");  ?>
</footer>

</body>
