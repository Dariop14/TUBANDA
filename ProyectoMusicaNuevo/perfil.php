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

             function PublicarPerfil()
             {
               document.getElementById("infoPersonal").style.display="none";
               document.getElementById("nuevoPerfil").style.display="block";
             }
  </script>

</head>
<body>

<?php  include("Header.php");  ?>

<?php  include("menu.php");  ?>

<section>

      <div class="menu-navegacion">
          <p> Hola, <?php echo  $_SESSION['uUsuario'];  ?>  </p>
          <button class="boton" id="datos"> Datos Personales </button>
          <button class="boton" id="nuevo">
             <a href="javascript:PublicarPerfil();"> Publicar un perfil </a> </button>
          <button class="boton" id="misPerfiles"> Mis perfiles </button>
          <button class="boton" id="contratos"> Mis contratos </button>
          <button class="boton" id="eventos"> Eventos </button>
      </div>

        <div class="Contenido" id="nuevoPerfil" style="display:block">
           <?php include("publicarPerfil.php"); ?>
        </div>

        <div class="Contenido" id="infoPersonal" style="display:block">
           <?php include("PersonalInfo.php"); ?>
        </div>

</section>

<footer>
      <?php  include("Footer.php");  ?>
</footer>

</body>
