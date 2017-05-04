<html lang="es">

<head>
<meta charset="utf-8" />
<title>Mi cuenta</title>
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

             function DatosPersonales(){
               document.getElementById("misPerfiles").style.display="none";
               document.getElementById("infoPersonal").style.display="block";
             }

             function Perfiles(){
               document.getElementById("infoPersonal").style.display="none";
               document.getElementById("misPerfiles").style.display="block";
             }

             function ActualizarInfo(){
               document.getElementById("infoPublicada").style.display="none";
               document.getElementById("editarInfo").style.display="block";
             }

             function CancelarActualizacion(){
                document.getElementById("editarInfo").style.display="none";
                document.getElementById("infoPublicada").style.display="block";
             }

  </script>

</head>
<body>
<!-- Se agrega el header -->
<?php  include("Header.php");  ?>
<?php  include("menu.php");  ?>

<section>

      <div class="menu-navegacion">
        <!-- Se agrega un mensaje de bienvenido con el nombre del usuario -->
          <p> Hola, <?php echo  $_SESSION['uUsuario'];  ?>  </p>
          <!--  Menú de navegación dentro de la cuenta  -->
          <a href="javascript:DatosPersonales();"><button class="boton" value="Datos Personales"> Datos Personales </button></a>
          <a href="javascript:Perfiles();"><button class="boton" value="Mis Perfiles"> Mis perfiles </button></a>
          <button class="boton" id="contratos"> Mis contratos </button>
          <button class="boton" id="eventos"> Eventos </button>
      </div>
      <!-- Sección de información personal -->
        <div class="Contenido" id="infoPersonal" style="display:block">
           <?php include("PersonalInfo.php"); ?>
        </div>
        <!-- Sección de perfiles agregados -->
        <section id='misPerfiles' style='display:none;'>
        <?php include("misPerfiles.php"); ?>
        </section>



</section>

<footer>
  <!-- Footer -->
      <?php  include("Footer.php");  ?>
</footer>

</body>
