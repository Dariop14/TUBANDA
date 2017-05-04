<html lang="es">

<head>
<meta charset="utf-8" />
<title>Músicos</title>
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
<?php  include("menu.php");  ?>

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
<!-- conectar  con php segun los filtros que selecciones.. solo ejemplos-->
  <div class="tabletaImagen" style="display:none;">
  <img src="imagenes/bateria.jpg" alt="Person" >
  Bateria
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div>

<div class="tabletaImagen" style="display:none;">
<img src="imagenes/guitarraElectrica.png" alt="Person" >
Guitarra Electrica
<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div>

</section>

<section>

    <?php

        if($Resultado = mysql_query("SELECT * FROM Perfil WHERE pTipo = 'musico'")){
            while($Fila = mysql_fetch_assoc($Resultado)){
              $pfoto = $Fila["pImagen"];
              $pnombre = $Fila["pNombre"];
              $pgenero = $Fila["pGenero"];
              $pinstrumento = $Fila["pInstrumento"];
              $pdescripcion = $Fila["pDescripcion"];

              echo "<div class='contenedor-artistas noColapsar'>";
              echo "<p class='contenedor-artista-individual noColapsar' style='padding-top=20px;'>";

              $printResultados = "<img class='contenedor-imagen-artistas' src='$pfoto' width='220' height='220'><br>";
              $printResultados.= "<a href='perfilCompleto.php' style='text-decoration:none; color:black;'><strong>$pnombre</strong></a>";
              $printResultados.= "<br><br>$pgenero<br><br>$pinstrumento<br><br>";
              $printResultados.= "$pdescripcion";
              $printResultados.= "<a class='reservarbtn' href='#'>Reservar</a>";

              echo "$printResultados";

              echo "</p>";
              echo "</div>";
            }
        }
     ?>

</section>

<footer>
      <?php  include("Footer.php"); ?>
</footer>

</body>
