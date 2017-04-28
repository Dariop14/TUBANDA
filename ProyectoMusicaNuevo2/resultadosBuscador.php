<!DOCTYPE html>
<html>


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

<section>
  <?php
  include("acceso_db.php"); // incluimos el archivo de conexión a la Base de Datos
  //al dar click en el boton submit con nombre barraBuscador
  if (isset($_GET['barraBuscador'])) {
    //guardamos los resutalos de user_query en una VL
    $get_value = $_GET['user_query'];
    $result_query = "select * from tubanda where pKeywords like '%$get_value%'";
    $run_result = mysql_query($result_query);
  //guardar los datos en VL tipo fila
    while ($row_result = mysql_fetch_array($run_result)) {
     $pNombre = $row_result['pNombre'];
     $pLink = $row_result['pLink'];
     $pDescripcion = $row_result['pDescripcion'];
     $pImagen = $row_result['pImagen'];
     $pGenero = $row_result['pGenero'];
     $pInstrumento = $row_result['pInstrumento'];
//imprimir casillas con datos
      echo "<div class='contenedor-artistas noColapsar '>
       <p class='contenedor-artista-individual noColapsar'>
       <img class='contenedor-imagen-artistas' src='imagenesBuscador/$pImagen' atl='$pImagen' width='220' height='220'/>
       <br/>
        <strong>$pNombre</strong> <br/>
        $pDescripcion
        <br/>
        <br/>
        <a class='reservarbtn' href='$pLink'>$pLink</a>
       </p>
     </div>";
    }

  }


   ?>

</section>
<br/>

<footer>
      <?php  include("Footer.php"); ?>
</footer>

</body>
